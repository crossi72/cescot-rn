<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Seleziona una regione</h1>
	<form action="clienti-citta.php" method="post">
		<select name="citta" id="citta">
			<?php
				require_once '../lib/library.php';
				//inizializzo la connessione al database
				$db_connection = connectDatabase('prenotazioni');
				//eseguo una query per ottenere tutte le citta
				$query = 'SELECT * FROM citta';
				$result = mysqli_query($db_connection, $query);
				//ciclo sulle righe restituite e stampo un option per ogni citta
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row['id_citta'] . '">' . $row['citta'] . '</option>';
				}
			?>
		</select>
		<input type="submit" value="Seleziona">
	</form>
</body>
</html>