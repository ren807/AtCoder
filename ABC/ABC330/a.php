<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n,$l)=ints();
	$a=ints();

		$ans=0;
	for ($i=0;$i<$n;++$i) {
		if ($a[$i] >= $l) {
			$ans++;
		}
	}
	output($ans);
}

main();
