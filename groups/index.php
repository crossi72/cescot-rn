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
	<div class="menu">
		<?php
			printButton("Primo Rosso", "btn_red", "btn_red_1");
			printButton("Secondo Rosso", "btn_red", "btn_red_2");
			printButton("Tutti Rossi", "btn_red", "btn_red_all");
			printButton("Primo Blu", "btn_blue", "btn_blue_1");
			printButton("Secondo Blu", "btn_blue", "btn_blue_2");
			printButton("Tutti Blu", "btn_blue", "btn_blue_all");
		?>
		<h2>Primo gruppo</h2>
		<?php
			printRandomDivs(5, 10, "", "div_150 group_1");
		?>
		<h2>Secondo gruppo</h2>
		<?php
			printRandomDivs(10, 15, "", "div_100 group_2");
		?>
	</div>
</body>
<script src="script.js"></script>
</html>