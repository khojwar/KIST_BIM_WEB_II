<?php

// Syntax
// file_exists ( string $filename ) : bool

// Example:

$filename = 'readme.txt';

if (file_exists($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;


?>