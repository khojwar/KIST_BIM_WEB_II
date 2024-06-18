<?php

// Syntax:
// function functionname(){  
//     //code to be executed  
//     }  

// Example:

// function sayHello(){  
// echo "Hello PHP Function";  
// }  
// sayHello();//calling function  
 

// ---------------------------------------------------------------------
// Function parameter or argument
// Syntax:

// function function_name($first_parameter, $second_parameter) {
//     // executable code;
// }

// Example:

function sayHello($name,$age){  
echo "Hello $name, you are $age years old<br/>";  
} 

sayHello("Sonoo",27);  
sayHello("Vimal",29);  
sayHello("John",23);  


// ---------------------------------------------------------------------
// Default Arguments

// example:
function greet($name = "World") {
    echo "Hello, $name!";
}

greet(); // Outputs: Hello, World!
greet("Bob"); // Outputs: Hello, Bob!



// ---------------------------------------------------------------------

// Returning Values

// example:

function add($a, $b) {
    return $a + $b;
}

$result = add(2, 3);
echo $result; // Outputs: 5



// ---------------------------------------------------------------------
// Returning Multiple Values

// example:

function divide($a, $b) {
    $quotient = $a / $b;
    $remainder = $a % $b;
    return array($quotient, $remainder);
}

list($quotient, $remainder) = divide(10, 3);
echo "Quotient: $quotient, Remainder: $remainder"; // Outputs: Quotient: 3.3333333333333, Remainder: 1


// ---------------------------------------------------------------------

// 
 
// pass by value
function valGeek($num) {
    $num += 2;
    return $num;
}
 
// pass by reference
function refGeek(&$num) {
    $num += 10;
    return $num;
}
 
$n = 10;
 
valGeek($n);
echo "The original value is still $n \n";
 
refGeek($n);
echo "The original value changes to $n";
 


// ---------------------------------------------------------------------

// Variable Length Argument Function (... operator or variadic argument) 

// example:

function sum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $n) {
        $sum += $n;
    }
    return $sum;
}

echo sum(1, 2, 3, 4); // Outputs: 10
echo sum(1, 2, 3, 4, 5); // Outputs: 15



// The variadic argument must be the last argument:
function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;


// ---------------------------------------------------------------------
// Anonymous Function

// syntax:

// $var=function ($arg1, $arg2) { return $val; };

// example 1:

$greet = function($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');

// Output: Hello World


// example 2:
$add = function ($a, $b) {
    return "a:$a b:$b addition: " . $a+$b; 
 };
 echo $add(5,10);

// Output: a:5 b:10 addition: 15


// example 3:

$greet = function($name) {
    echo "Hello, $name!";
};

$greet("Tika Ram"); // Outputs: Hello, Tika Ram!


// ---------------------------------------------------------------------

// passing function as argument

// example:


function execute($callback) {
    $callback();
}

execute(function() {
    echo "This is a callback!";
}); // Outputs: This is a callback!




// ---------------------------------------------------------------------
// recursive function

// example:
echo "<br>";
function display($number) {    
    if($number<=5){    
     echo "$number <br/>";    
     display($number+1);    
    }  
}    
    
display(1);    // Outputs: 1 2 3 4 5






?>