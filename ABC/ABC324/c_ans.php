<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function calc($s, $t) {
	// 何文字目で異なる文字が現れるかを判定する関数
	for ($i = 0;$i < strlen($t); $i++) {
		if ($i >= strlen($s)) return strlen($s);
		if ($s[$i] != $t[$i]) return $i;
	}
	return strlen($t); // 文字列が完全に一致する場合、または$sが$tの接頭語である場合
}

function main() {
	list($n, $t2) = strings(); // 最初の入力

	$s = $a = $b = [];
	for ($i = 1; $i <= $n; $i++) {
		list($s[$i]) = strings(); // 後の入力
	}

	// 先頭
	for ($i = 1; $i <= $n; $i++) {
		$a[$i] = calc($s[$i], $t2);
	}

	// 末尾
	$t2 = strrev($t2);
	for ($i = 1; $i <= $n; $i++) {
		$s[$i] = strrev($s[$i]);
		$b[$i] = calc($s[$i], $t2);
	}

	$ans = [];
	for ($i = 1; $i <= $n; $i++) {
		$t = $s[$i];
		$flag = false;

		if ($a[$i] == strlen($t) && strlen($t) == strlen($t2)) $flag = true;
		if ($a[$i] + $b[$i] >= strlen($t) && strlen($t) + 1 == strlen($t2)) $flag = true;
		if ($a[$i] + $b[$i] >= strlen($t) - 1 && strlen($t) - 1 == strlen($t2)) $flag = true;
		if ($a[$i] + $b[$i] == strlen($t) - 1 && strlen($t) == strlen($t2)) $flag = true;
		
		if ($flag) $ans[] = $i;
	}

	echo count($ans) . "\n";
	foreach ($ans as $x) {
		echo $x . " ";
	}
	echo "\n";
}

main();
