<?php
// 途中・・・

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

ini_set("memory_limit", "512M");

function main() {
	list($n) = ints();

	$num = '3';
	$flg1 = 0;
	$cnt = 0;
	for ($i=0;$i<strlen($num);$i++) {
		if ($num[$i] === '3') $flg1++; // 桁をチェック
		if ($flg1 === strlen($num)) { // 全て3じゃないか！！
			$num = str_repeat("1", strlen($num));
			$num .= '3';
			$flg1 = 0;
		} else { // 3じゃない場合は？
			$rev_num = strrev($num);
			for ($j=1;$j<strlen($rev_num);$j++) {
				if ($rev_num[$j] !== '3') {
					$rev_num[$j] = (string)((int)$rev_num[$j] + 1);
				}
			}
			$num = strrev($rev_num);
		}
		$i=0;
		$cnt++;

		if ($cnt === $n) break;
	}
	output($num);
}

main();
