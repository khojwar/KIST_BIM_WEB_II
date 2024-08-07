<?php

// syntax

// fputcsv ( 
//     resource $handle ,      // file pointer 
//     array $fields ,         // data to write to the file 
//     string $delimiter = "," ,   // delimiter eg. comma or tab etc
//     string $enclosure = '"' ,   // enclosure eg. double quote or single quote etc 
//     string $escape_char = "\\"      // escape character eg. backslash or double quote etc 
// ) : int|false



// Example:
$data = [
	['Symbol', 'Company', 'Price'],
	['GOOG', 'Google Inc.', '800'],
	['AAPL', 'Apple Inc.', '500'],
	['AMZN', 'Amazon.com Inc.', '250'],
	['YHOO', 'Yahoo! Inc.', '250'],
	['FB', 'Facebook, Inc.', '30'],
];

$filename = 'stock.csv';

// open csv file for writing
$f = fopen($filename, 'w');

if ($f === false) {
	die('Error opening the file ' . $filename);
}

// write each row at a time to a file
foreach ($data as $row) {
	fputcsv($f, $row);
}

// close the file
fclose($f);