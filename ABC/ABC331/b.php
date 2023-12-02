<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n,$s,$m,$l) = ints();

	$egg = [6 => $s, 8 => $m, 12 => $l];
	
}

main();
