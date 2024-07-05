<?php

// syntax 
// copy ( string $source , string $dest , resource $context = ? ) : bool


// Example:
// 1) A simple PHP copy file example
// The following example uses the copy() function to copy the readme.txt to readme.bak file:

// $source = 'readme.txt';
// $dest = 'readme.bak';

// echo copy($source, $dest)
//     ? "The file $source was copied to $dest  successfully!"
//     : "Error copying the file $source";



// 2) Check if the destination file exists before copying
// The following example uses the copy() function to copy the readme.txt file to the readme.bak file. Also, it checks if the readme.bak exists before overwriting the file:


// $source = 'readme.txt';
// $dest = 'readme.bak';

// !file_exists($source) && die("The file $source does not exist");

// file_exists($dest) && die("The file $dest already exists");

// echo copy($source, $dest)
//     ? "The file $source was copied to $dest  successfully!"
//     : "Error copying the file $source";




// 3) PHP copy file helper function
// The following copy_file() helper function copies a file. It returns false if the source file does not exist or the destination file exists and the overwritten argument is true:

function copy_file($source, $dest, $overwritten = true): bool
{
    if (!file_exists($source)) {
        return false;
    }

    if (!$overwritten && file_exists($dest)) {
        return false;
    }

    return copy($source, $dest);
}

