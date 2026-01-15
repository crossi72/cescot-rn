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

		//eseguo una query per ottenere tutti i clienti con i dati della regione, area geografica e citta
		$query = 'SELECT clienti.nome, clienti.cognome, regioni.regione,
			regioni.area_geografica, citta.citta
			FROM clienti
			INNER JOIN citta ON clienti.citta = citta.id_citta
			INNER JOIN regioni ON citta.regione = regioni.id_regione';

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