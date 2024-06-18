<?php

/*
Q1. WAP to calculate Factorial without using recursive function.
Q2. WAP to calculate Factorial using recursive function.
Q3. WAP to calculate Fibonacci series using user defined function.
Q4. WAP to calculate Fibonacci series using recursive function.
Q5. WAP to calculate the number palindrome using user defined function.
Q6. Create a function called 'calculate' which calculates area, 
   perimeter & volume of a rectangle. Make your own assumptions 
   for the parameters. So, while calling the function as 
   calculate(10,20, 'area') it should return an output as 
   “The area of a rectangle is: 200” and so on for the rest. 

*/



// Q1. WAP to calculate Factorial without using recursive function.
function factorial($n) {
    if ($n == 0) {
        return "The factorial of 0 is: 1";
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return "The factorial of $n is: $result";
    }
}

// Example usage:
echo factorial(5);  // Output: "The factorial of 5 is: 120"

// Q2. WAP to calculate Factorial using recursive function.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example usage:
echo "The factorial of 5 is: " . factorial(5);  // Output: "The factorial of 5 is: 120"


// Q3. WAP to calculate Fibonacci series using user defined function.
function fibonacci($n) {
    $first = 0;
    $second = 1;
    $result = 0;
    for ($i = 2; $i < $n; $i++) {
        $result = $first + $second;
        $first = $second;
        $second = $result;
    }
    return "The $n th Fibonacci number is: $result";
}

// Example usage:
echo fibonacci(6);  // Output: "The 6th Fibonacci number is: 8"

// Q4. WAP to calculate Fibonacci series using recursive function.
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

// Example usage:
echo "The 6th Fibonacci number is: " . fibonacci(6);  // Output: "The 6th Fibonacci number is: 8"



// Q5. WAP to calculate the number palindrome using user defined function.
function isPalindrome($n) {
    $temp = $n;
    $new = 0;
    while (floor($temp)) {
        $d = $temp % 10;
        $new = $new * 10 + $d;
        $temp = $temp / 10;
    }
    if ($new == $n) {
        return "$n is a palindrome number.";
    } else {
        return "$n is not a palindrome number.";
    }
}

// Example usage:
echo isPalindrome(121);  // Output: "121 is a palindrome number."
echo isPalindrome(123);  // Output: "123 is not a palindrome number."


/* 
Q6. Create a function called 'calculate' which calculates area, 
   perimeter & volume of a rectangle. Make your own assumptions 
   for the parameters. So, while calling the function as 
   calculate(10,20, 'area') it should return an output as 
   “The area of a rectangle is: 200” and so on for the rest.  
      
*/
function calculate($l, $b, $act = "area", $h = 0)
{
    if ($act == "area") {
        echo "The area of rectangle is: "  . ($l * $b);
    } else if ($act == "perimeter") {
        echo "The perimeter of rectangle is: "  . (2 * ($l + $b));
    } else if ($act == "volume" && $h != 0) {
        echo "The volume of rectangle is: " . ($l * $b * $h);
    } else {
        echo "Your credentials did not match.";
    }
}
calculate(10, 20, 'area');










?>