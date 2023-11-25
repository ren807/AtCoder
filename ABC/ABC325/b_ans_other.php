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

	for($i = 0;$i < count($x);$i++) {
		// 与えられた個数分だけループを回す
		for ($j = 0; $j <= 23; ++$j) {
			// 時間の分だけループを回す
			if ($j >= 16) {
				// 0時を跨ぐ場合
				if($x[$i] >= $j || $x[$i] <= ($j + 8) % 24) {
					$arr[$j] += $w[$i];
				}
			} else {
				// 0時を跨がない場合
				if($x[$i] >= $j && $x[$i] <= ($j + 8) % 24) {
					$arr[$j] += $w[$i];
				}
			}
		}
	}

	echo max($arr).PHP_EOL;
}

main();
