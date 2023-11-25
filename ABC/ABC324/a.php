<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = ints();
	$a = strings();
	$flg = 0;

	for ($i = 0; $i < $n - 1; $i++) {
		if ($a[$i] !== $a[$i+1]) {
			$flg = 1;
			break;
		}
	}

	echo $flg === 1 ? 'No'.PHP_EOL : 'Yes'.PHP_EOL;
}

main();
