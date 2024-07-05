<?php
// To read a file in PHP, you can use functions like fopen, fread, and fgets.

$filename = 'example.txt';
$file = fopen($filename, 'r'); // Open the file for reading

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }
    fclose($file);
} else {
    echo "Error opening the file.";
}




?>