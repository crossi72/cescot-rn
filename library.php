<?php

/**
 * prints a div
 *
 * @param string $content the text inside the div
 * @param string $class the class of the div
 * @return void
 */
function printDiv($content, $class) {
	echo "<div class='$class'>$content</div>";
}