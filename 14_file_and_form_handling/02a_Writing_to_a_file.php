<?php

// To write to a file, you can use fopen, fwrite, and fclose.

$filename = 'example.txt';
$file = fopen($filename, 'w'); // Open the file for writing

if ($file) {
    $text = "Hello, World!";
    fwrite($file, $text);
    fclose($file);
    echo "File written successfully.";
} else {
    echo "Error opening the file.";
}


?>