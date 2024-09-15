<?php

require 'bootstrap.php';

function add($a, $b)
{
	if (!is_numeric($a) || !is_numeric($a)) {
		throw new InvalidArgumentException('Both arguments must be numeric or numeric strings');
	}

	return $a + $b;
}

echo add('Hi', 'there');
