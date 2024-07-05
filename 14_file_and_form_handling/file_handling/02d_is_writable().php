<?php
// Syntax
// is_writable ( string $filename ) : bool

// Example:

$filename = 'readme.txt';

if (is_writable($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}

echo $message;



?>