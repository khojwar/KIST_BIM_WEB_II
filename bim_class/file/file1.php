<?php

$filename = "./file/hello.txt";
// $lines = [];


// $f = fopen($filename, 'r');

// if (!$f) {
//     die("The file $filename doesnot exist");
// }

// while (!feof($f)) {
//     $lines[] = fgets($f);
// }

// print_r($lines);
// fclose($f);


// A file named "num.txt" contains 10 integers. Write a  php program to 
// read that file and print the largest one.  


$google = file_get_contents($filename);
echo $google;

?>