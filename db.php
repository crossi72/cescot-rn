<?php
//inizializza la connessione al database
$databaseHost = 'localhost';
$databaseName = 'prenotazioni';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//verifica la connessione
if (!$mysqli) {
	die("Connection failed: " . mysqli_connect_error());
}

//esegui una query di esempio
$query = 'SELECT * FROM clienti';

$result = mysqli_query($mysqli, $query);

//stampa il numero di righe restituite
echo $result->num_rows . '<br>';

//ciclo sulle righe restituite e stampo nome e cognome di ogni cliente
while ($row = mysqli_fetch_assoc($result)) {
	echo 'Nome: ' . $row['nome'] . ', Cognome: ' . $row['cognome'] . '<br>';
}
