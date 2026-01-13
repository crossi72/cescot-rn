<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prenotazioni</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Prenotazioni</h1>
	<?php
		/*
		stampo un div per ogni prenotazione, contenente
			- H2 contenente la data di arrivo
			- nome e cognome del cliente
			- nome della citta di residenza del cliente
			- importo della prenotazione
			- caparra
			- saldo (importo - caparra)
		*/
		require_once '../lib/library.php';
		//inizializzo la connessione al database
		$db_connection = connectDatabase('prenotazioni');
		//eseguo una query per ottenere tutte le prenotazioni con i dati del cliente e della citta
		$query = 'SELECT citta.citta, clienti.nome, clienti.cognome,
			prenotazioni.arrivo, prenotazioni.importo, prenotazioni.caparra,
			ROUND(prenotazioni.importo - prenotazioni.caparra, 2) AS saldo
			FROM citta
			INNER JOIN clienti ON citta.id_citta = clienti.citta
			INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente';

		$result = mysqli_query($db_connection, $query);

		//ciclo sulle righe restituite e stampo i dati di ogni prenotazione
		while ($row = mysqli_fetch_assoc($result)) {
			// $saldo = $row['importo'] - $row['caparra'];
			$prenotazioneDivContent = "<h2>" . $row['arrivo'] . "</h2>
				<p>Cliente: " . $row['nome'] . " " . $row['cognome'] . "</p>
				<p>Città di residenza: " . $row['citta'] . "</p>
				<p>Importo: " . $row['importo'] . "€</p>
				<p>Caparra: " . $row['caparra'] . "€</p>
				<p class='saldo'>Saldo: " . $row['saldo'] . "€</p>";
			printDiv($prenotazioneDivContent, 'prenotazione');
		}
	?>
</body>
</html>