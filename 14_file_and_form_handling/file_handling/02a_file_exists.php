<?php

// Syntax
// file_exists ( string $filename ) : bool

// Example:

$filename = 'readme.txt';

if (file_exists($filename)) {
    $message = "The file $filename exists";
    $f = fopen($filename, 'r');
    echo fread($f, filesize($filename));
    fclose($f);
} else {
    $message = "The file $filename does not exist";
}
echo $message;


?>