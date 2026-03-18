<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inserimento Cliente</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Inserimento Cliente</h1>

	<?php
		require_once '../lib/library.php';

		//inizializzo la connessione al database
		$db_connection = connectDatabase('prenotazioni');

		//se il form è stato inviato con il pulsante "salva", salvo i dati nel database
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salva'])) {
			$nome = trim($_POST['nome']);
			$cognome = trim($_POST['cognome']);
			$citta_id = intval($_POST['citta']);

			if ($nome !== '' && $cognome !== '' && $citta_id > 0) {
				$stmt = mysqli_prepare($db_connection, "INSERT INTO clienti (nome, cognome, citta) VALUES (?, ?, ?)");
				mysqli_stmt_bind_param($stmt, 'ssi', $nome, $cognome, $citta_id);
				$result = mysqli_stmt_execute($stmt);
				mysqli_stmt_close($stmt);

				if ($result) {
					echo "<p>Cliente salvato con successo.</p>";
				} else {
					echo "<p>Errore durante il salvataggio: " . mysqli_error($db_connection) . "</p>";
				}
			} else {
				echo "<p>Nome, cognome e città sono campi obbligatori.</p>";
			}
		}

		//carico le città dalla tabella citta
		$query = "SELECT id_citta, citta FROM citta ORDER BY citta";
		$citta_result = mysqli_query($db_connection, $query);
	?>

	<form method="POST" action="inserimento-clienti.php" id="form-inserimento">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome"><br>

		<label for="cognome">Cognome:</label>
		<input type="text" id="cognome" name="cognome"><br>

		<label for="citta">Città:</label>
		<select name="citta" id="citta">
			<option value="0">-- Seleziona una città --</option>
			<?php
			while ($row = mysqli_fetch_assoc($citta_result)) {
				echo "<option value='" . htmlspecialchars($row['id_citta']) . "'>" . htmlspecialchars($row['citta']) . "</option>";
			}
			?>
		</select><br>

		<button type="reset" name="annulla">Annulla</button>
		<button type="submit" name="salva">Salva</button>
	</form>
</body>
</html>
