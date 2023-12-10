<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n,$m) = ints();
	list($s) = strings();
	$s .= "0";

	$logo_t = 0;
	$t = 0;
	$ans = 0;
	// $j_zero = false;

	for ($i=0;$i<=$n;++$i) {
		if ($s[$i] === '0') {
			// $j_zero = true;
			// if ($t - $m > 0) {
				// まかなえない時
				$ans = max(max($logo_t+$t-$m,$logo_t),$ans);
				// } else {
					// 	// まかなえる時
					// 	$ans = max($logo_t,$ans);
					// }
			$t = 0;
			$logo_t = 0;
		}
		if ($s[$i] === '1') $t++;
		if ($s[$i] === '2') $logo_t++;
	}

	// if ($j_zero) {
	// 	output($ans);
	// } else {
	// 	if ($t - $m > 0) {
	// 		$ans = $logo_t+($t-$m);
	// 	} else {
	// 		$ans = $logo_t;
	// 	}
	// 	output($ans);
	// }

	output($ans);
}

main();
