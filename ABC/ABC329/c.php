<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n)=ints();
	list($s)=strings();

	// 配列の初期化
	$arr_s = str_split($s);
	$arr_unique = array_unique($arr_s);
	foreach($arr_unique as $k => $v) {
		$arr[$v] = 0;
		$flg[$v] = 0;// 連続判定フラグ
	}

	for ($i=0;$i<$n-1;++$i) {
		if ($i!==0 && $s[$i] === $s[$i+1]){
			// 文字が連続する場合
			$arr[$s[$i]]++;
			$flg[$s[$i]]++;

		} elseif ($i!==0 && $s[$i] !== $s[$i+1]) {
			// 異なる値が出てきた場合
			$arr[$s[$i]]++;
			$flg[$s[$i]]=0;

		} else {
			// 初回
			$arr[$s[$i]]++;
		}
	}
	var_dump($arr);exit;
}

main();
