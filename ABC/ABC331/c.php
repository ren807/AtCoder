<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = ints();
	$a = ints();
	$b = $a;

	sort($a);

	// 累積和
	$arr = [];
	for ($i=0;$i<$n;++$i) {
		if (!isset($arr[$i])) $arr[$i] = 0; // これいるか？
		$arr[$i+1] = $arr[$i] + $a[$i];
	}

	// 特定の値よりも大きな値の和を作成
	$d_arr = [];
	for ($i=0;$i<$n;++$i) {
		// if ($a[$i] === $a[$i+1]) continue; // なんでこれいらないんよ
		if (!isset($d_arr[$a[$i]])) $d_arr[$a[$i]] = 0; // これいるか？
		$d_arr[$a[$i]] = $arr[$n] - $arr[$i+1];
	}

	// 大きな要素がいくつありますか？
	for ($i=0;$i<$n;++$i) {
		$ans[] = $d_arr[$b[$i]];
	}

	output(...$ans);

}

main();
