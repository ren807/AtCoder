<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($b)=ints();
	$i=1;
	$flg=0;

	while (true) {
		if ($b === pow($i,$i)) {
			$flg = 1;
			break;
		}elseif (pow($i,$i) > $b) {
			break;
		}
		$i++;
	}

	echo $flg === 1 ? $i.PHP_EOL : '-1'.PHP_EOL;
}

main();
