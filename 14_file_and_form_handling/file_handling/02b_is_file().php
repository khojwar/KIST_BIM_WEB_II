<?php

// Syntax
// is_file ( string $filename ) : bool


// Example:

$filename = 'readme.txt';

if (is_file($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;


?>