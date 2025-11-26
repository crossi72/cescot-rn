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
			$bgColor = 'gray';
			$size = '50px';

			printDiv("", "random");
		}

		// Div finale
		printDiv("fine pagina", "footer");
	?>
</body>
</html>

<?php
	/**
	 * riceve una stringa e stampa un div con la stringa passata come contenuto
	 * @param string $content Il contenuto da inserire nel div
	 * @param string $class La classe da applicare al div
	 * @return void
	 */
	function printDiv($content, $class) {
		echo "<div class='$class'>$content</div>";
	}
?>