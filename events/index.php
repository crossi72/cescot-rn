<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>eventi javascript</h1>
	<button id="btn_red">Rosso</button>
	<button id="btn_yellow">Giallo</button>
	<button id="btn_blu">Blu</button>
	<?php
	/*
		stampo 20 div
	*/
		for ($i = 1; $i <= 20; $i++) {
			printDiv("", "box");
		}

		function printDiv($content, $class) {
			echo "<div class='$class'>$content</div>";
		}
	?>
</body>
<script src="script.js?ver=1.0.1"></script>
</html>