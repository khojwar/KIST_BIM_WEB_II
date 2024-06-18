<?php

// Variable Scope

// ----------------------------------------------------------------------------------------------------------------------------
// local variable
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
// function myFunction() {
//     $localVar = "I'm a local variable";
//     echo $localVar; // This will work
// }

// myFunction();
// echo $localVar; // This will not work, as $localVar is undefined outside the function


// ----------------------------------------------------------------------------------------------------------------------------
// global variable
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

// example 1:
// $globalVar = "I'm a global variable";

// function myFunction2() {
//     echo $globalVar; // This will not work
// }

// myFunction2();

// echo $globalVar; // This will work



// example 2:
$globalVar = "I'm a global variable";

function myFunction2() {
    global $globalVar;
    echo "$globalVar </br>"; // This will work
}

myFunction2();

echo $globalVar; // This will work

// output will be: I'm a global variableI'm a global variable   // because we are calling the function and then echo the global variable  // so it will print the global variable 2 times







// ----------------------------------------------------------------------------------------------------------------------------
//static variable

// function myFunction3() {
//     static $staticVar = 0;
//     echo $staticVar;
//     $staticVar++;
// }

// myFunction3(); // Outputs: 0

// myFunction3(); // Outputs: 1

// myFunction3(); // Outputs: 2

// The static variable is not destroyed when the function is completed. It is destroyed when the script finishes running.

// The static variable is still accessible from outside the function, but it can only be modified by the function.

// The static variable is shared between all calls to the function.

// The static variable is initialized only once, when the function is first called.


// function static_var()
// {
//     static $num1 = 3;
//     $num2 = 6;
//     $num1++;
//     $num2++;
//     echo "Static variable is: $num1, ";
//     echo "Local variable is: $num2\n";
// }

// static_var(); // Static variable is: 4, Local variable is: 7
// static_var(); // Static variable is: 5, Local variable is: 7


?>