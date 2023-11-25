<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n)=ints();
	$a=ints();
	$ans = 0;

	$max_a = max($a);

	for ($i=0;$i<$n;++$i) {
		if ($max_a !== $a[$i] && $a[$i]> $ans ) {
			$ans = $a[$i];
		}
	}

	output($ans);
}

main();
