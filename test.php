<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		echo 'Hello, World!';

		$variable = 42;
		$result = 0;

		if ($variable > 40) {
			$result = 1;
		} else {
			$result = -1;
		}

		echo "<p>Result: $result</p>";
	?>
</body>
</html>