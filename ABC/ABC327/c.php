<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

// 転置関数
function transverse_matrix($array){
	return call_user_func_array('array_map',array_merge(array(null),$array));
}

function widthSearch($A) {
	// 横方向を調査
	for ($i=0;$i<9;$i++) {
		for ($j=1;$j<=9;$j++) {
			if (!in_array($j,$A[$i],true)) {
				return false;
			}
		}
	}
	return true;
}

function depthSearch($A) {
	// 転置する
	$A = transverse_matrix($A);
	// 縦方向を調査
	for ($i=0;$i<9;$i++) {
		for ($j=1;$j<=9;$j++) {
			if (!in_array($j,$A[$i],true)) {
				return false;
			}
		}
	}
	return true;
}

// 整形して調査する
function chSearch($A) {
	$B = [];
	// 横で考えやすいように整形
	for ($i=0;$i<9;++$i) {
		for ($j=0;$j<9;++$j) {
			// 上三つ
			if ($i <= 2 && $j <= 2) {
				$B[0][] = $A[$i][$j];
			}
			if ($i <= 2 && $j >= 3 && $j <= 5) {
				$B[1][] = $A[$i][$j];
			}
			if ($i <= 2 && $j >= 6 && $j <= 8) {
				$B[2][] = $A[$i][$j];
			}
			// 中三つ
			if ($i <= 5 && $i >= 3 && $j <= 2) {
				$B[3][] = $A[$i][$j];
			}
			if ($i <= 5 && $i >= 3 && $j >= 3 && $j <= 5) {
				$B[4][] = $A[$i][$j];
			}
			if ($i <= 5 && $i >= 3 && $j >= 6 && $j <= 8) {
				$B[5][] = $A[$i][$j];
			}
			// 下三つ
			if ($i <= 8 && $i >= 6 && $j <= 2) {
				$B[6][] = $A[$i][$j];
			}
			if ($i <= 8 && $i >= 6 && $j >= 3 && $j <= 5) {
				$B[7][] = $A[$i][$j];
			}
			if ($i <= 8 && $i >= 6 && $j >= 6 && $j <= 8) {
				$B[8][] = $A[$i][$j];
			}
		}
	}

	for ($i=0;$i<9;$i++) {
		for ($j=1;$j<=9;$j++) {
			if (!in_array($j,$B[$i],true)) {
				return false;
			}
		}
	}
	return true;
}

function main() {
	for ($i=0;$i<9;$i++) {
		$A[] = ints();
	}

	// 横方向を調査
	$ans_w = widthSearch($A);
	// 縦方向を調査
	$ans_d = depthSearch($A);
	// 3x3を調査
	$ans_3 = chSearch($A);
	
	if ($ans_w && $ans_d && $ans_3) {
		echo 'Yes'.PHP_EOL;
	} else {
		echo 'No'.PHP_EOL;
	}
}

main();
