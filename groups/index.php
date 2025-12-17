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
			printButton("Terzo Rosso", "btn_red", "btn_red_3");
			printButton("Tutti Rossi", "btn_red", "btn_red_all");
			printButton("Primo Blu", "btn_blue", "btn_blue_1");
			printButton("Secondo Blu", "btn_blue", "btn_blue_2");
			printButton("Terzo Blu", "btn_blue", "btn_blue_3");
			printButton("Tutti Blu", "btn_blue", "btn_blue_all");
			printButton("Primo Giallo", "btn_yellow", "btn_yellow_1");
			printButton("Secondo Giallo", "btn_yellow", "btn_yellow_2");
			printButton("Terzo Giallo", "btn_yellow", "btn_yellow_3");
			printButton("Tutti Giallo", "btn_yellow", "btn_yellow_all");
		?>
		<h2>Primo gruppo</h2>
		<?php
			printRandomDivs(5, 10, "", "div_150 group_1");
		?>
		<h2>Secondo gruppo</h2>
		<?php
			printRandomDivs(10, 15, "", "div_100 group_2");
		?>
		<h2>Terzo gruppo</h2>
		<?php
			printRandomDivs(5, 20, "", "div_50 group_3");
		?>
	</div>
</body>
<script src="script.js"></script>
</html>