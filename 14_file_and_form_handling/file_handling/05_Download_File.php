<?php

// Syntax
// readfile ( 
//     string $filename , 
//     bool $use_include_path = false , 
//     resource $context = ? 
// ) : int|false

// Example 1: , 
// readfile() will read the contents of example.txt and output it. 
// If the file does not exist, it will output a message saying the file does not exist. 

// $file = './readme.txt';
// if (file_exists($file)) {
//     readfile($file);
// } else {
//     echo 'The file does not exist.';
// }

// Example 2:
// Example with Headers
// A common use case for readfile() is to force a file download in the browser:


// $file = 'readme1.txt';

// if (file_exists($file)) {
//     // Set headers to prompt download
//     header('Content-Description: File Transfer');
//     header('Content-Type: application/octet-stream');
//     header('Content-Disposition: attachment; filename="'.basename($file).'"');
//     header('Expires: 0');
//     header('Cache-Control: must-revalidate');
//     header('Pragma: public');
//     header('Content-Length: ' . filesize($file));
//     // Clear output buffer and read the file
//     ob_clean();
//     flush();
//     readfile($file);
//     exit;
// } else {
//     echo 'The file does not exist.';
// }



// Example 3:  The following example shows how to download the readme.txt file using the readfile() function example.
$filename = 'readme.txt';

if (file_exists($filename)) {
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($filename));
	readfile($filename);
	exit;
}




?>
