<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Riepilogo regioni</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Regioni</h1>
	<?php
		/*
		un div per ogni regione, contenente
  - H2 contenente nome della regione
  - numero di prenotazioni
  - importo totale delle prenotazioni
  - saldo (importo - caparra) totale delle prenotazioni
		*/
		require_once '../lib/library.php';
		//inizializzo la connessione al database
		$db_connection = connectDatabase('prenotazioni');
		//eseguo una query per ottenere i dati richiesti
		$query = 'SELECT regioni.regione, COUNT(*) AS numero_prenotazioni,
			ROUND(SUM(prenotazioni.importo), 2) AS totale_importo,
			ROUND(SUM(prenotazioni.importo - prenotazioni.caparra), 2) AS totale_saldo
			FROM regioni
			INNER JOIN citta ON regioni.id_regione = citta.regione
			INNER JOIN clienti ON citta.id_citta = clienti.citta
			INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente
			GROUP BY regioni.regione';

		$result = mysqli_query($db_connection, $query);
		//ciclo sulle righe restituite e stampo i dati di ogni regione
		while ($row = mysqli_fetch_assoc($result)) {
			$regioneDivContent = "<h2>" . $row['regione'] . "</h2>
				<p>Numero di prenotazioni: " . $row['numero_prenotazioni'] . "</p>
				<p>Importo totale: " . $row['totale_importo'] . "€</p>
				<p class='saldo'>Saldo totale: " . $row['totale_saldo'] . "€</p>";
			printDiv($regioneDivContent, 'regione');
		}
	?>
</body>
</html>