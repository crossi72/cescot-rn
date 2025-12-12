<?php
// includo la libreria
require_once("../library.php");
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
	<h1>colori</h1>
	<?php
	/*
	Tramite css implementare queste regole:
	- H1 testo rosso
	- div generati casualmente con dimensione 50x50 e colore di sfondo grigio
	- div finale con sfondo rosso e testo bianco
	*/
		// Genera un numero casuale tra 5 e 30
		$numDivs = rand(5, 30);

		// Crea i div in base al numero generato
		for ($i = 1; $i <= $numDivs; $i++) {

			//genero un numero casuale per il colore di sfondo
			$color_index = rand(1, 4);

			switch ($color_index) {
				case 1:
					$color = "rosso";
					break;
				case 2:
					$color = "verde";
					break;
				case 3:
					$color = "blu";
					break;
				case 4:
					$color = "giallo";
					break;
			}

			printDiv("", "random $color");
		}

		// Div finale
		printDiv("fine pagina", "footer");
	?>
</body>
</html>
