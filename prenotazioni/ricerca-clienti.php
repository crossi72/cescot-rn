<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ricerca Clienti</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Ricerca Clienti</h1>

	<?php
		require_once '../lib/library.php';

		//inizializzo la connessione al database
		$db_connection = connectDatabase('prenotazioni');

		//carico le regioni dalla tabella regioni
		$query = "SELECT * FROM regioni";
		$result = mysqli_query($db_connection, $query);
	?>

	<form method="GET">
		<label for="cliente">Cliente:</label>
		<input type="text" id="cliente" name="cliente" value="<?php echo isset($_GET['cliente']) ? htmlspecialchars($_GET['cliente']) : ''; ?>">

		<label for="regione">Regione:</label>
		<select name="regione" id="regione">
			<option value="0">-- Seleziona una regione --</option>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
				$selected = (isset($_GET['regione']) && intval($_GET['regione']) === intval($row['ID_regione'])) ? " selected" : "";
				echo "<option value='" . $row['ID_regione'] . "'" . $selected . ">" . $row['regione'] . "</option>";
			}
			?>
		</select>

		<input type="submit" value="Cerca">
	</form>

	<?php
		//eseguo la ricerca solo se il form è stato inviato
		if (isset($_GET['cliente']) || isset($_GET['regione'])) {
			$regione_id = isset($_GET['regione']) ? intval($_GET['regione']) : 0;
			$cliente_filtro = isset($_GET['cliente']) ? trim($_GET['cliente']) : '';

			if ($regione_id === 0) {
				echo "<p>nessuna regione selezionata</p>";
			} elseif ($cliente_filtro === '') {
				echo "<p>inserire il filtro per il cliente</p>";
			} else {
				$cliente_filtro_escaped = mysqli_real_escape_string($db_connection, $cliente_filtro);

				$query = "SELECT clienti.nome, clienti.cognome, regioni.regione,
					regioni.area_geografica, citta.citta
					FROM clienti
					INNER JOIN citta ON clienti.citta = citta.id_citta
					INNER JOIN regioni ON citta.regione = regioni.id_regione
					WHERE regioni.id_regione = " . $regione_id . "
					AND (clienti.nome LIKE '%" . $cliente_filtro_escaped . "%'
					OR clienti.cognome LIKE '%" . $cliente_filtro_escaped . "%')";

				$result = mysqli_query($db_connection, $query);

				while ($row = mysqli_fetch_assoc($result)) {
					$clienteDivContent = "<h2>" . $row['nome'] . " " . $row['cognome'] . "</h2>
						<p>Regione: " . $row['regione'] . "</p>
						<p>Area Geografica: " . $row['area_geografica'] . "</p>
						<p>Città: " . $row['citta'] . "</p>";
					printDiv($clienteDivContent, 'cliente');
				}
			}
		}
	?>
</body>
</html>
