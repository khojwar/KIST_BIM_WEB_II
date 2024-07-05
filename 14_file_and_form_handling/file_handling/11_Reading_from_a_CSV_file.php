<?php
// syntax
// fgetcsv ( 
//     resource $stream ,      // The file pointer must be valid, and must point to a file successfully opened by fopen() or fsockopen() (and not yet closed by fclose()).
//     int $length = 0 ,       // Must be greater than the longest line (in characters) to be found in the CSV file (allowing for trailing line-end characters). It became optional in PHP 5.0.4.
//     string $separator = "," ,   // The field delimiter (one character only). Defaults as a comma.
//     string $enclosure = '"' ,   // The field enclosure character (one character only). Defaults as a double quotation mark.
//     string $escape = "\\"       // The escape character (one character only). Defaults as a backslash.
// ) : array       // Returns an indexed array containing the fields read.

// Example:
$filename = './stock.csv';
$data = [];

// open the file
$f = fopen($filename, 'r');

if ($f === false) {
	die('Cannot open the file ' . $filename);
}

// read each line in CSV file at a time
while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
}

// close the file
fclose($f);