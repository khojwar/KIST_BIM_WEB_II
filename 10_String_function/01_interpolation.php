<?php
/*
************* string interpolation ***************
In PHP, string interpolation allows you to include variables directly within a string, making it easy to create strings that contain variable values. 
PHP supports two types of string interpolation: 
    1. double-quoted strings and 
    2. heredoc syntax.
*/

// 1. Double-Quoted Strings
// In double-quoted strings, variables and escape sequences are parsed, making it straightforward to embed variables.
$name = "John";
$age = 25;
echo "My name is $name and I am $age years old.";       // Output: My name is John and I am 25 years old.


echo "<br>";
// 2. Heredoc Syntax
// Heredoc syntax is another way to interpolate strings, especially useful for multi-line strings. 
// It starts with <<< followed by an identifier and ends with the same identifier.

$name = "John";
$age = 25;
echo <<<EOT
My name is $name and I am $age years old.
This is a multi-line string.
EOT;

// Output: My name is John and I am 25 years old. This is a multi-line string.





?>