<?php

// Syntax 
// fopen ( string $filename , string $mode , bool $use_include_path = false , resource $context = ? ) : resource


// After opening a file and completing working with it, you should always close the file. If you don’t close a file properly, it may cause many issues. For example, you may not be able to access the file again.
// To close a file, you pass the file pointer to the fclose() function:
// fclose ( resource $stream ) : bool

// Example
// It’s a good practice to check if a file exists before opening it.
// The following example uses the fopen() to open the readme.txt file for reading:

$filename = 'readme.txt';

if (!file_exists($filename)) {
    die("The file $filename does not exist.");
}

$f = fopen($filename, 'r');
if ($f) {
    // process the file
    // ...
    echo 'The file ' . $filename . ' is open';
    fclose($f);
}




?>