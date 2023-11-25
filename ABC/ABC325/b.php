<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = ints();
	for ($i=0;$i<$n;$i++) {
		list($w[],$x[]) = ints();
	}
	
	for($i=0;$i<24;$i++) {
		$arr[$i] = 0;
	}

	for($i=0;$i<count($x);$i++) {
		if($x[$i] >= 23 || $x[$i] <= 7) {
			$arr[23] += $w[$i];
			// continue;
		}
		if($x[$i] >= 22 || $x[$i] <= 6) {
			$arr[22] += $w[$i];
			// continue;
		}
		if($x[$i] >= 21 || $x[$i] <= 5) {
			$arr[21] += $w[$i];
			// continue;
		}
		if($x[$i] >= 20 || $x[$i] <= 4) {
			$arr[20] += $w[$i];
			// continue;
		}
		if($x[$i] >= 19 || $x[$i] <= 3) {
			$arr[19] += $w[$i];
			// continue;
		}
		if($x[$i] >= 18 || $x[$i] <= 2) {
			$arr[18] += $w[$i];
			// continue;
		}
		if($x[$i] >= 17 || $x[$i] <= 1) {
			$arr[17] += $w[$i];
			// continue;
		}
		if($x[$i] >= 16 || $x[$i] <= 0) {
			$arr[16] += $w[$i];
			// continue;
		}
		if($x[$i] >= 15 && $x[$i] < 24) {
			$arr[15] += $w[$i];
			// continue;
		}
		if($x[$i] >= 14 && $x[$i] < 23) {
			$arr[14] += $w[$i];
			// continue;
		}
		if($x[$i] >= 13 && $x[$i] < 22) {
			$arr[13] += $w[$i];
			// continue;
		}
		if($x[$i] >= 12 && $x[$i] < 21) {
			$arr[12] += $w[$i];
			// continue;
		}
		if($x[$i] >= 11 && $x[$i] < 20) {
			$arr[11] += $w[$i];
			// continue;
		}
		if($x[$i] >= 10 && $x[$i] < 19) {
			$arr[10] += $w[$i];
			// continue;
		}
		if($x[$i] >= 9 && $x[$i] < 18) {
			$arr[9] += $w[$i]; // 1 18
			// continue;
		}
		if($x[$i] >= 8 && $x[$i] < 17) {
			$arr[8] += $w[$i];
			// continue;
		}
		if($x[$i] >= 7 && $x[$i] < 16) {
			$arr[7] += $w[$i];
			// continue;
		}
		if($x[$i] >= 6 && $x[$i] < 15) {
			$arr[6] += $w[$i];
			// continue;
		}
		if($x[$i] >= 5 && $x[$i] < 14) {
			$arr[5] += $w[$i]; // 47 14
			// continue;
		}
		if($x[$i] >= 4 && $x[$i] < 13) {
			$arr[4] += $w[$i];
			// continue;
		}
		if($x[$i] >= 3 && $x[$i] < 12) {
			$arr[3] += $w[$i];
			// continue;
		}
		if($x[$i] >= 2 && $x[$i] < 11) {
			$arr[2] += $w[$i];
			// continue;
		}
		if($x[$i] >= 1 && $x[$i] < 10) {
			$arr[1] += $w[$i];
			// continue;
		}
		if($x[$i] >= 0 && $x[$i] < 9) {
			$arr[0] += $w[$i];
			// continue;
		}
	}

	echo max($arr).PHP_EOL;
}

main();
