<?php
// includo la libreria
require_once("../lib/library.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>contenuti a caso!</h1>
	<?php
		// Genera un numero casuale tra 10 e 30
		$numDivs = rand(10, 30);

		// Crea i div in base al numero generato
		for ($i = 1; $i <= $numDivs; $i++) {
			if ($i % 2 == 0) {
				// Div pari
				printDiv("io sono pari", "pari");
			} else {
				// Div dispari
				printDiv("io sono dispari", "dispari");
			}
		}

		// Div finale
		echo "<div class='ultimo'>fine pagina</div>";
	?>
</body>
</html>
