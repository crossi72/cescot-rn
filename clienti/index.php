<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Clienti</h1>
	<?php
		require_once '../lib/library.php';

		//inizializzo la connessione al database
		$db_connection = connectDatabase('cescot');

		//eseguo una query per ottenere tutti i clienti
		$query = 'SELECT id, nome, cognome FROM clienti';
		$result = mysqli_query($db_connection, $query);

		//ciclo sulle righe restituite e stampo nome e cognome di ogni cliente
		while ($row = mysqli_fetch_assoc($result)) {
			$clientDivContent = "<h2>" . $row['id'] . "</h2><p>" . $row['nome'] . " " . $row['cognome'] . "</p>";
			printDiv($clientDivContent, 'cliente');
		}
  ?>
</body>
</html>