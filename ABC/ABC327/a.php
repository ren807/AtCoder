<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n)=ints();
	list($s)=strings();
	$flg=0;

	for($i=0;$i<$n;++$i) {
		if ($s[$i] === 'a') {
			if (isset($s[$i+1]) && $s[$i+1] === 'b') {
				$flg=1;
			}
		} elseif ($s[$i] === 'b') {
			if (isset($s[$i+1]) && $s[$i+1] === 'a') {
				$flg=1;
			}
		}
	}

	echo $flg===1 ? 'Yes'.PHP_EOL : 'No'.PHP_EOL;
}

main();
