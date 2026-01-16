<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Archivio Clienti</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Clienti</h1>
	<?php
		require_once '../lib/library.php';

		//inizializzo la connessione al database
		$db_connection = connectDatabase('prenotazioni');

		//carico le regioni dalla tabella regioni
		$query = "SELECT * FROM regioni";
		$result = mysqli_query($db_connection, $query);

		//mostro una select che contiene tutte le regioni
		?>
		<form method=POST>
			<label for='regione'>Seleziona una regione:</label>
			<select name='regione' id='regione'>
				<option value='0'>-- Seleziona una regione --</option>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<option value='" . $row['ID_regione'] . "'>" . $row['regione'] . "</option>";
				}
				?>
			</select>
			<input type='submit' value='Seleziona'>
		</form>

		<?php
		//leggo l'ID della regione dal parametro POST
		$regione_id = isset($_POST['regione']) ? intval($_POST['regione']) : 0;

		//eseguo una query per ottenere tutti i clienti con i dati della regione, area geografica e citta
		$query = "SELECT clienti.nome, clienti.cognome, regioni.regione,
			regioni.area_geografica, citta.citta
			FROM clienti
			INNER JOIN citta ON clienti.citta = citta.id_citta
			INNER JOIN regioni ON citta.regione = regioni.id_regione
			WHERE regioni.id_regione = " . $regione_id;

		$result = mysqli_query($db_connection, $query);

		//ciclo sulle righe restituite e stampo i dati di ogni cliente
		while ($row = mysqli_fetch_assoc($result)) {
			$clienteDivContent = "<h2>" . $row['nome'] . " " . $row['cognome'] . "</h2>
				<p>Regione: " . $row['regione'] . "</p>
				<p>Area Geografica: " . $row['area_geografica'] . "</p>
				<p>Città: " . $row['citta'] . "</p>";
			printDiv($clienteDivContent, 'cliente');
		}
	?>
</body>
</html>