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
	<h1>eventi javascript</h1>
	<button id="btn_red">Rosso</button>
	<button id="btn_yellow">Giallo</button>
	<button id="btn_blu">Blu</button>
	<button id="btn_alterna">Alterna</button>
	<?php
	/*
		stampo 20 div
	*/
		for ($i = 1; $i <= 20; $i++) {
			printDiv("", "box");
		}
	?>
</body>
<script src="script.js?ver=1.1.0"></script>
</html>