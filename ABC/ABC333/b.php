<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($s) = strings();
	list($t) = strings();

	$arr = [
		'A' => [
			'E',
			'B',
		],
		'B' => [
			'A',
			'C',
		],
		'C' => [
			'B',
			'D',
		],
		'D' => [
			'C',
			'E',
		],
		'E' => [
			'A',
			'D',
		],
	];

	$flg1 = 0;
	$flg2 = 0;
	// 以下隣あわせかを判定
	if (in_array($s[1], $arr[$s[0]], true)) {
		$flg1 = 1;
	}
	if (in_array($t[1], $arr[$t[0]], true)) {
		$flg2 = 1;
	}

	// 線分の長さが同じ場合
	if ($flg1 === $flg2) {
		output('Yes');
	} else {
		output('No');
	}
}

main();
