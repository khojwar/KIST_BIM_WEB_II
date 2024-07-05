<?php

// syntax
// unlink ( string $filename , resource $context = ? ) : bool


// Example:
// 1) Simple PHP delete file example
// The following example uses the unlink() function to delete the readme.txt file:

// $filename = 'readme.txt';

// if (unlink($filename)) {
// 	echo 'The file ' . $filename . ' was deleted successfully!';
// } else {
// 	echo 'There was a error deleting the file ' . $filename;
// }




// 2) Delete all files in a directory that match a pattern
// The following example deletes all files with the .tmp extension:


$dir = 'temp/';
array_map('unlink', glob("{$dir}*.tmp"));




