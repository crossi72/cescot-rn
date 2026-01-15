<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Clienti della citta selezionata</h1>
	<?php
		require_once '../lib/library.php';
		//inizializzo la connessione al database
		$db_connection = connectDatabase('prenotazioni');
		//ottengo l'id della citta selezionata dal form
		$citta_id = $_POST['citta'];
		//eseguo una query per ottenere tutti i clienti della citta selezionata
		$query = 'SELECT * FROM clienti WHERE citta = ' . intval($citta_id);

		$result = mysqli_query($db_connection, $query);
		//stampo i clienti trovati
		if ($result->num_rows > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo 'Nome: ' . $row['nome'] . ', Cognome: ' . $row['cognome'] . '<br>';
			}
		} else {
			echo 'Nessun cliente trovato per la citta selezionata.';
		}
	?>
</body>
</html>