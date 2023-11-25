<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	// 入力値 n を取得
	list($n) = ints();

	// 各時刻のカウントを保持する配列を初期化
	$cnt = array_fill(0, 24, 0);
	

	// n 行の入力を受け取る
	for ($i = 0; $i < $n; $i++) {
		list($w, $x) = ints();
		$cnt[$x] += $w;
	}

	$ans = 0;

	// 各時刻に対する処理
	for ($i=0;$i<24;$i++) {
		$sum = 0;
		// 連続する9時間の合計値を計算
		for ($j=0;$j<9;$j++) {
			$sum += $cnt[($i+$j)%24];
		}
		// 最大値を更新
		$ans = max($ans, $sum);
	}

	output($ans);
}

main();
