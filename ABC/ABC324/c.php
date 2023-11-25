<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n, $t) = strings();

	$t_arr = str_split($t);
	foreach($t_arr as $v ) {
		$t_conv[$v] = 0;
		$t_conv[$v] = 1;
	}
	$t_cnt = count(str_split($t));
	for ($i = 0; $i < $n; $i++) {
		list($arr[]) = strings();
	}

	foreach ($arr as $v => $k) {
		$a = str_split($v);
		if (count($a) === $t_cnt) {

		}
	}
}

main();
