<?php

// $filename = "hello.txt";

// if (!file_exists($filename)) {
//     // die("The file $filename doesnot exist");
//     echo "file doesnot exist so we create file.";

//     $f = fopen($filename, 'w');
//     $text = "hello BIM";
//     fwrite($f, $text);
//     fclose($f);
// }

// $f = fopen($filename, 'r');

// if ($f) {
//     $content = fread($f, filesize($filename));
//     echo nl2br($content);
//     fclose($f);

// }


// using gets methods 
// $filename = "./hello.txt";
// $lines = [];

// $f = fopen($filename, 'r');

// if (!$f) {
//     die("file doesnot exist");
// }

// while (!feof($f)) {
//     $lines[] = fgets($f);
// }

// print_r($lines);
// fclose($f);

// // A file named "num.txt" contains 10 integers. Write a  php program to 
// // read that file and print the largest one.  

// $filename = "./hello.txt";
// echo file_get_contents($filename, false, null, 0, 5);

$google = file_get_contents("https://www.google.com/");
echo $google;




?>