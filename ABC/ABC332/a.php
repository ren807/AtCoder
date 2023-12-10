<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n,$s,$k) = ints();
	
	$ans = 0;
	for ($i=0;$i<$n;++$i) {
		list($p[],$q[]) = ints();
		$ans += $p[$i]*$q[$i];
	}

	if ($ans >= $s) {
		output($ans);
	} else {
		output($ans+$k);
	}
}

main();
