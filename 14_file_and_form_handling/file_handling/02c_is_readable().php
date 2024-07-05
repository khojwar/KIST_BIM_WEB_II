<?php
// Syntax
// is_readable ( string $filename ) : bool

// Example:

$filename = 'readme.txt';

if (is_readable($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;


?>