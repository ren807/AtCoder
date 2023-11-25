<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = ints();
	$flg2 = 0;
	$flg3 = 0;

	// 2のやつ
	while(1) {
		if ($n % 2 !== 0) break;
		$n = $n / 2;
		$flg2++;
	}

	//3のやつ
	while(1) {
		if ($n % 3 !== 0) break;
		$n = $n / 3;
		$flg3++;
	}

	if ($n === 1) {
		echo 'Yes'.PHP_EOL;
	// } else if (($flg2 > 0 || $flg3 > 0) && ($n === 1)) {
	// echo 'Yes'.PHP_EOL;
	} else {
		echo 'No'.PHP_EOL;
	}
}

main();
