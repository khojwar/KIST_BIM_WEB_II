<?php
// The factorial of a non-negative integer n is the product of all positive integers less than or equal to n. It's denoted as n! and defined as:
// 0! = 1
// n! = n×(n−1)! for n > 0


function factorial($n) {
    // Base case: if $n is 0, return 1
    if ($n == 0) {
        return 1;
    } else {
        // Recursive case: $n * factorial($n - 1)
        return $n * factorial($n - 1);
    }
}

// Example usage:
$number = 5;
echo "Factorial of $number is " . factorial($number);

// Output: Factorial of 5 is 120


// ---------------------------------------------------------------------------------------------------------------------------- 

// Fibonacci series using recursive function

// The Fibonacci sequence is another classic example, where each number in the sequence is the sum of the two preceding ones, usually starting with 0 and 1.
// The Fibonacci sequence is defined as:
// F(0) = 0
// F(1) = 1
// F(n) = F(n−1)+F(n−2) for n > 1


// example 1:
// function fibonacci($n) {
//     // Base cases: if $n is 0 or 1, return $n
//     if ($n == 0) {
//         return 0;
//     } else if ($n == 1) {
//         return 1;
//     } else {
//         // Recursive case: fibonacci($n - 1) + fibonacci($n - 2)
//         return fibonacci($n - 1) + fibonacci($n - 2);
//     }
// }

// // Example usage:
// $number = 7;
// echo "Fibonacci of $number is " . fibonacci($number);

// // output: Fibonacci of 7 is 13



// example 2:

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function displayFibonacciSeries($count) {
    for ($i = 0; $i < $count; $i++) {
        echo fibonacci($i) . " ";
    }
}

// Example: Display first 10 Fibonacci numbers
$count = 10;
echo "Fibonacci series of $count numbers: ";
displayFibonacciSeries($count);




?>
