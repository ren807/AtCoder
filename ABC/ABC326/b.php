<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = strings();
	$ans = 0;
	$n_arr = str_split($n);

	$a = $n_arr[0]*$n_arr[1];
	if ($a == $n_arr[2]) {
		$ans = $n;
	} else {
		for ($i = $n; $i <= 919; $i++) {
			$n_arr_2 = [];
			$n_arr_2 = str_split($i);
			$b = $n_arr_2[0]*$n_arr_2[1];
			if ($b == $n_arr_2[2]) {
				$ans = $i;
				break;
			}
		}
	}
	echo $ans.PHP_EOL;
}

main();
