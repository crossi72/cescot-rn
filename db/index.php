<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Il testo che segue arriva dal database</h1>
	<div>
		<?php
			//inizializza la connessione al database
			$databaseHost = 'localhost';
			$databaseName = 'cescot';
			$databaseUsername = 'root';
			$databasePassword = '';

			$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
			//verifica la connessione
			if (!$mysqli) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$query = 'SELECT value FROM content';
			$result = mysqli_query($mysqli, $query);
			$row = mysqli_fetch_assoc($result);
			echo $row['value'];
		?>
	</div>
</body>
</html>