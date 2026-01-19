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
		<form method=GET>
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
		//leggo l'ID della regione dal parametro GET
		$regione_id = isset($_GET['regione']) ? intval($_GET['regione']) : 0;

		$pagina = isset($_GET['pagina']) ? intval($_GET['pagina']) : 0;
		if ($pagina < 0) {
			$pagina = 0;
		}

		//eseguo una query per ottenere tutti i clienti con i dati della regione, area geografica e citta
		$clienti_da_caricare = 50;
		$query = "SELECT clienti.nome, clienti.cognome, regioni.regione,
			regioni.area_geografica, citta.citta
			FROM clienti
			INNER JOIN citta ON clienti.citta = citta.id_citta
			INNER JOIN regioni ON citta.regione = regioni.id_regione
			WHERE regioni.id_regione = " . $regione_id . "
			LIMIT " . $pagina * $clienti_da_caricare . ", " . $clienti_da_caricare;

		$result = mysqli_query($db_connection, $query);

		// aggiungo i link di navigazione
		echo "<navigation>";
			// se sono a pagina 0, non mostro il link "Indietro"
			if ($pagina > 0){
				echo "<a href='clienti.php?regione=" . $regione_id . 
				"&pagina=". $pagina - 1 ."'>Indietro</a>";
			} else {
				echo "Indietro";
			}
			echo " | ";
			//se sono nell'ultima pagina, non mostro il link "Avanti"
			if (mysqli_num_rows($result) < ($pagina + 1) * 50){
				echo "Avanti<br><br>";
			} else{
				echo "<a href='clienti.php?regione=" . $regione_id . 
				"&pagina=". $pagina + 1 ."'>Avanti</a><br><br>";
			}
		echo "</navigation>";

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