<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = ints();
	$d = ints();
	$ans = 0;

	for ($i=0;$i<$n;++$i) {
		$b = str_split($i+1);
		for ($j=1;$j<=$d[$i];++$j) {
			if (count(array_unique($b)) > 1) continue;
			if (($i+1) === $j || $j === (($i+1) * 10) + ($i+1) || $i+1 === ($j*10)+$j) {
				$ans++;
			}
		}
	}

	output($ans);
}

main();
