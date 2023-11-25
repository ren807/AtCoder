<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n, $m) = ints();
	$a = ints();
	sort($a);
	$a[] = 9000000000000;
	$res = 0;
	$j = 0;

	// スライディングウィンドウアルゴリズム
	for ($i = 0; $i < $n; $i++) {
		while ($a[$j] < $a[$i] + $m) {
			$j++;
		}
		var_dump($j,$i);
		$res = max($res, $j - $i);
	}

	output($res);
}

main();
