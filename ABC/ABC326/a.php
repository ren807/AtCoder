<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($x,$y) = ints();

	if ($x > $y && $x - $y <= 3) {
		echo 'Yes'.PHP_EOL;
	} else if ($x < $y && $y - $x <= 2) {
		echo 'Yes'.PHP_EOL;
	} else {
		echo 'No'.PHP_EOL;
	}
}

main();
