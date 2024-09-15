<?php


// $filename = "public/population.txt";

// if (!file_exists($filename)) {
//     die("File does not exist");
// }

// $handle = fopen($filename, "r");

// if ($handle) {
//     $contents = fread($handle, 100);
//     fclose($handle);
//     echo nl2br(strlen($contents));
// }

$filename = './public/population.txt';
$lines = [];
$f = fopen($filename, 'r');
if (!$f) {
    return;
}
// while (!feof($f)) {
//     $lines[] = fgets($f);
// }

// print_r($lines);
var_dump(fgets($f));
fclose($f);
