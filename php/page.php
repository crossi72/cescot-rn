<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>pagina di prova</h1>
	<?php
		// ciclo per generare i 15 div
		for ($i = 1; $i <= 15; $i++) {
			printDiv("questo è il div numero $i</div>", "numbered");
		}
	?>
	<div class="closing">questa è la fine della pagina</div>
</body>
</html>

<?php
	/**
	 * receives a strings and a class and prints a div containing the string, using the class for styling
	 * @param string $text
	 * @param string $class
	 * @return void
	 */
	function printDiv($text, $class) {
		echo "<div class='" . $class . "'>" . $text . "</div>";
	}

?>