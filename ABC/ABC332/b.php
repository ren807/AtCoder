<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($k,$g_max,$m_max) = ints();

	$g = 0;
	$m = 0;
	for ($i=0;$i<$k;++$i) {
		// グラスが水で見たされている場合
		if ($g === $g_max) {
			$g = 0;
			continue;
		}
		// マグカップが空である時
		if ($m === 0) {
			$m = $m_max;
			continue;
		}
		// そうでもない場合
		if ($g_max - $g >= $m) {
			$g += $m;
			$m = 0;
		} else {
			$m = $m - ($g_max - $g);
			$g = $g_max;
		}
	}

	output($g,$m);
}

main();
