<?php

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