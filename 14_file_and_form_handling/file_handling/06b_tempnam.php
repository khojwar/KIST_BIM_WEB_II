<?php

// syntax:
// tempnam ( string $directory , string $prefix ) : string|false

$name = tempnam('tmp', 'php');

// full path to the temp file
echo $name; //C:\xampp\htdocs\tmp\phpA125.tmp

// open the temporary file
$f = fopen($name, 'w+');
if ($f) {
    // write a text to the file
    fputs($f, 'the current time is ' . strftime('%c'));
    fclose($f);
}


// output: the current time is Thu Jul  1 14:00:00 2021
?>