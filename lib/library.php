<?php

/**
 * Connects a database
 * @param string $host the database host
 * @param string $username the database username
 * @param string $password the database password
 * @param string $dbname the database name
 * @return mysqli the connection object
 */
function connectDatabase($dbname, $host = 'localhost', $username = 'root', $password = '') {
	$mysqli = mysqli_connect($host, $username, $password, $dbname);
	if (!$mysqli) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $mysqli;
}

/**
 * prints a div
 *
 * @param string $content the text inside the div
 * @param string $class the class of the div
 * @param string $id the id of the div
 * @return void
 */
function printDiv($content, $class, $id = "") {
	if ($id != "") {
		echo "<div class='$class' id='$id'>$content</div>";
		return;
	}
	echo "<div class='$class'>$content</div>";
}

/**
 * prints a button
 *
 * @param string $content the text inside the button
 * @param string $class the class of the button
 * @param string $id the id of the button
 * @return void
 */
function printButton($content, $class, $id = "") {
	if ($id != "") {
		echo "<button class='$class' id='$id'>$content</button>";
	} else {
		echo "<button class='$class'>$content</button>";
	}
}

/**
 * prints a random number of divs
 * @param int $min the minimum number of divs
 * @param int $max the maximum number of divs
 * @param string $content the text inside the divs
 * @param string $class the class of the divs
 * @return void
 */
function printRandomDivs($min, $max, $content, $class) {
	// Genera un numero casuale tra $min e $max
	$numDivs = rand($min, $max);

	// Crea i div in base al numero generato
	for ($i = 1; $i <= $numDivs; $i++) {
		printDiv($content, $class);
	}
}