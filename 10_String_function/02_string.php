<?php
/*
Creating Strings:
There are four ways of creating strings in PHP: 

1. Single-quoted strings
2. Double-quoted strings
3. Heredoc syntax
4. Nowdoc syntax

*/

// 1. Single-Quoted Strings
// Single-quoted strings are the simplest way to create strings in PHP.
// In single-quoted strings, escape sequences are not parsed, and variables are not interpolated.

// eg:
$name = 'John';
$age = 25;
echo 'My name is $name and I am $age years old. <br>';       // Output: My name is $name and I am $age years old.

// 2. Double-Quoted Strings
// In double-quoted strings, variables and escape sequences are parsed, making it straightforward to embed variables.

// eg:
$name = "John";
$age = 25;
echo "My name is $name and I am $age years old. <br>";       // Output: My name is John and I am 25 years old.

// 3. Heredoc Syntax
// Heredoc syntax is another way to interpolate strings, especially useful for multi-line strings.
// It starts with <<< followed by an identifier and ends with the same identifier.

// eg:
$name = "John";
$age = 25;
echo <<<EOT
My name is $name and I am $age years old.
This is a multi-line string.
EOT;    // Output: My name is John and I am 25 years old. This is a multi-line string.

echo "<br>";
// 4. Nowdoc Syntax
// Nowdoc syntax is similar to heredoc syntax, but it does not parse variables or escape sequences.
// It starts with <<<' followed by an identifier and ends with the same identifier.

// eg:
$name = "John";
$age = 25;
echo <<<'EOT'
My name is $name and I am $age years old.
This is a multi-line string.
EOT;    // Output: My name is $name and I am $age years old. This is a multi-line string.







echo "<br>";
echo "---------------------------------------- <br> ";
echo "---------------------------------------- ";
echo "<br>";

// ************************ more details ******************************
// 1. Single-Quoted Strings
// A sequence of characters enclosed in single quotes (the character ') is a string.
$str = 'this is a simple string';

// If you want to include a literal single quote, escape it with a backslash (\).
$str = 'This is a \'simple\' string <br>';
echo $str;  // Output: This is a 'simple' string

// If you want to include a backslash, escape it with another backslash.
$str = 'The command C:\\*.* will delete all files. <br>';
echo $str;  // output: The command C:\*.* will delete all files.

// The escape sequences such as "\r" or "\n" will be treated literally and their special meaning will not be interpreted. 
// The variables too will not be expanded if they appear in a single quoted string.
$str = 'This will not expand: \n a newline';
echo $str . PHP_EOL;
$x=100;
$str = 'Value of x = $x';
echo $str;  

//Output: 
// This will not expand: \n a newline
// Value of x = $x


// 2. Double-Quoted Strings
// A sequence of characters enclosed in double-quotes (" ") is another string representation.
$str = "this is a simple string";

echo "<br>";
echo "<br>";
// Double-quoted strings allow for variable interpolation, which means that variables within the string are replaced with their values. 
// Additionally, double-quoted strings support special escape sequences such as \n (newline), \t (tab), \r (carriage return), and more.
$name = "John";
echo "Hello, my name is $name";
echo "This is a new line:\nAnd this is after the newline";

// Output:
// Hello, my name is John
// This is a new line:
// And this is after the newline



// 3. Heredoc Syntax
// Heredoc syntax is useful for defining large blocks of text. 
// It behaves like a double-quoted string, allowing for variable interpolation and escape sequences. 
// A heredoc string begins with <<< followed by an identifier (often EOD, but it can be any valid identifier), and ends with the same identifier on a new line.
// The closing identifier must be the only text on the line, and it must be followed by a semicolon (;).
$name = "John";
$heredocString = <<<EOD
Hello, my name is $name.
This is a heredoc string.
It supports variable interpolation and special characters like newline (\n).
EOD;
echo $heredocString;

// Output:
// Hello, my name is John.
// This is a heredoc string.
// It supports variable interpolation and special characters like newline (\n).



// 4. Nowdoc Syntax
// Nowdoc syntax is similar to heredoc syntax, but it behaves like a single-quoted string.
// A nowdoc string begins with <<<' followed by an identifier (often EOD, but it can be any valid identifier), and ends with the same identifier on a new line.
// The closing identifier must be the only text on the line, and it must be followed by a semicolon (;).
$name = "John";
$nowdocString = <<<'EOD'
Hello, my name is $name.
This is a nowdoc string.
It does not support variable interpolation or special characters like newline (\n).
EOD;
echo $nowdocString;

// Output:
// Hello, my name is John.
// This is a nowdoc string.
// It does not support variable interpolation or special characters like newline (\n).

// Note:
// 1. Single-quoted strings are the simplest way to create strings in PHP. They do not support variable interpolation or escape sequences.
// 2. Double-quoted strings support variable interpolation and escape sequences.
// 3. Heredoc syntax is useful for defining large blocks of text that require variable interpolation and escape sequences.
// 4. Nowdoc syntax is similar to heredoc syntax but does not support variable interpolation or escape sequences.


?>