<?php

$filename = './public/population.txt';
$lines = [];

$f = fopen($filename, 'r');

if (!$f) {
    return;
}

while (!feof($f)) {     // check if the end of the file has been reached
    $lines[] = fgets($f);
}

print_r($lines);

fclose($f);