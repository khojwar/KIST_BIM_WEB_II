<?php
// Syntax

// file_get_contents ( 
//     string $filename , 
//     bool $use_include_path = false , 
//     resource $context = ? , 
//     int $offset = 0 , 
//     int $maxlen = ? 
// ) : string|false


// 1) Using the file_get_contents() function to download a webpage example

$html = file_get_contents('https://www.google.com/');
echo $html;



// 2) Using the file_get_contents() function to read an entire file into a string example

// $filename = 'readme1.txt';

// if (!is_readable($filename)) {
//     die('File does not exist or is not readable');
// }

// echo file_get_contents($filename);



// 3) Using the file_get_contents() function to read a part of a file into a string
// The following example uses the file_get_contents() function to read 20 characters starting from the 5th character in the readme.txt file:


// $filename = 'readme.txt';

// if (!is_readable($filename)) {
//     die('File does not exist or is not readable');
// }

// $content = file_get_contents($filename, false, null, 5, 20);

// echo $content;

?>


