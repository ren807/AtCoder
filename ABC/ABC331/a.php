<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($M,$D) = ints();
	list($y,$m,$d) = ints();

	if ($D > $d) {
		output($y,$m,$d+1);
	} elseif ($M === $m && $D === $d) {
		output(...[$y+1,1,1]);
	} elseif ($D === $d) {
		output($y,$m+1,1);
	}
}

main();
