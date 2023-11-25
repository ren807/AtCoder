<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n,$x) = ints();
	$s = ints();

	$ans = 0;
	for ($i=0;$i<$n;++$i) {
		if ($s[$i] <= $x) $ans += $s[$i];
	}

	output($ans);
}

main();
