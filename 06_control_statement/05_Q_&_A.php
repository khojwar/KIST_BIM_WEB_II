<?php
// Q1. Write a PHP script to check if a given number is positive, negative, or zero using an if statement.
$number = 5;

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}



// Q2. Write a PHP script to check if a given number is even or odd using an if else statement.
$number = 5;

if ($number % 2 == 0) {
    echo "The number is even.";
} else {
    echo "The number is odd.";
}

// Q3. Write a PHP script to check if a given number is divisible by 3 or not using an if else statement.
$number = 6;

if ($number % 3 == 0) {
    echo "The number is divisible by 3.";
} else {
    echo "The number is not divisible by 3.";
}

// Q4. Write a PHP script to check if a given number is a multiple of 5 using an if else statement.
$number = 10;

if ($number % 5 == 0) {
    echo "The number is a multiple of 5.";
} else {
    echo "The number is not a multiple of 5.";
}

// Q5. Write a PHP script to check if a given number is a multiple of 3 and 5 using an if else statement.
$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "The number is a multiple of 3 and 5.";
} else {
    echo "The number is not a multiple of 3 and 5.";
}


// Q6. Write a PHP script to find the largest of three numbers using nested if statements.

$a = 10;
$b = 20;
$c = 15;

if ($a >= $b) {
    if ($a >= $c) {
        echo "$a is the largest.";
    } else {
        echo "$c is the largest.";
    }
} else {
    if ($b >= $c) {
        echo "$b is the largest.";
    } else {
        echo "$c is the largest.";
    }
}


// Q7. Write a PHP script to check if a given year is a leap year or not using an if else statement.

$year = 2020;

if ($year % 4 == 0) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
    } else {
        echo "$year is a leap year.";
    }
} else {
    echo "$year is not a leap year.";
}

// Q8. Write a PHP script to check if a given character is a vowel or consonant using an if else statement.

$char = 'a';

if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
    echo "$char is a vowel.";
} else {
    echo "$char is a consonant.";
}


// Q9. Write a PHP script to check if a given character is an alphabet or not using an if else statement.

$char = 'a';

if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
    echo "$char is an alphabet.";
} else {
    echo "$char is not an alphabet.";
}

// Q10. Write a PHP script to check if a given character is a lowercase or uppercase alphabet using an if else statement.

$char = 'A';

if ($char >= 'a' && $char <= 'z') {
    echo "$char is a lowercase alphabet.";
} elseif ($char >= 'A' && $char <= 'Z') {
    echo "$char is an uppercase alphabet.";
} else {
    echo "$char is not an alphabet.";
}

// Q11. Write a PHP script to check if a given character is a digit or not using an if else statement.

$char = '5';

if ($char >= '0' && $char <= '9') {
    echo "$char is a digit.";
} else {
    echo "$char is not a digit.";
}

// Q12. Write a PHP script to check if a given character is an alphanumeric character or not using an if else statement.

$char = '5';

if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z') || ($char >= '0' && $char <= '9')) {
    echo "$char is an alphanumeric character.";
} else {
    echo "$char is not an alphanumeric character.";
}

// Q13. Write a PHP script to check if a given character is a special character or not using an if else statement.

$char = '@';

if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z') || ($char >= '0' && $char <= '9')) {
    echo "$char is not a special character.";
} else {
    echo "$char is a special character.";
}

// Q14. Write a PHP script to check if a given number is a prime number or not using an if else statement.

$number = 7;

$is_prime = true;

if ($number <= 1) {
    $is_prime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}

if ($is_prime) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}

// Q15. Write a PHP script to check if a given number is a perfect number or not using an if else statement.

$number = 28;

$sum = 0;

for ($i = 1; $i <= $number / 2; $i++) {
    if ($number % $i == 0) {
        $sum += $i;
    }
}

if ($sum == $number) {
    echo "$number is a perfect number.";
} else {
    echo "$number is not a perfect number.";
}

// Q16. Write a PHP script to check if a given number is an Armstrong number or not using an if else statement. (Armstrong number is a number that is equal to the sum of cubes of its digits. eg. 153 = 1^3 + 5^3 + 3^3)

$number = 153;

$sum = 0;

$temp = $number;

while ($temp != 0) {
    $remainder = $temp % 10;
    $sum += $remainder ** 3;
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

// Q17. Write a PHP script to check if a given number is a palindrome number or not using an if else statement.

$number = 121;

$reverse = 0;

$temp = $number;

while ($temp != 0) {
    $remainder = $temp % 10;
    $reverse = $reverse * 10 + $remainder;
    $temp = (int)($temp / 10);
}

if ($reverse == $number) {
    echo "$number is a palindrome number.";
} else {
    echo "$number is not a palindrome number.";
}

// Q18. Write a PHP script to check if a given number is a strong number or not using an if else statement.

$number = 145;

$sum = 0;

$temp = $number;

while ($temp != 0) {
    $factorial = 1;
    $remainder = $temp % 10;
    for ($i = 1; $i <= $remainder; $i++) {
        $factorial *= $i;
    }
    $sum += $factorial;
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is a strong number.";
} else {
    echo "$number is not a strong number.";
}


// Q20. Write a PHP script to check if a given number is a harshad number or not using an if else statement. A Harshad number (also called Niven number) is an integer that is divisible by the sum of its digits. eg. 18 = 1 + 8 = 9, 18 is divisible by 9.

$number = 18;

$sum = 0;

$temp = $number;

while ($temp != 0) {
    $remainder = $temp % 10;
    $sum += $remainder;
    $temp = (int)($temp / 10);
}

if ($number % $sum == 0) {
    echo "$number is a harshad number.";
} else {
    echo "$number is not a harshad number.";
}

// Q21. Write a PHP script to check if a given number is a pronic number or not using an if else statement. A pronic number is a number which is the product of two consecutive integers. eg. 6 = 2 * 3. 6 is a pronic number. 12 = 3 * 4. 12 is a pronic number.

$number = 6;

$is_pronic = false;

for ($i = 1; $i <= $number; $i++) {
    if ($i * ($i + 1) == $number) {
        $is_pronic = true;
        break;
    }
}

if ($is_pronic) {
    echo "$number is a pronic number.";
} else {
    echo "$number is not a pronic number.";
}

// Q22. Write a PHP script to check if a given number is a neon number or not using an if else statement. A neon number is a number where the sum of digits of the square of the number is equal to the number itself. eg. 9 is a neon number. 9 * 9 = 81, 8 + 1 = 9.

$number = 9;

$sum = 0;

$square = $number * $number;

while ($square != 0) {
    $remainder = $square % 10;
    $sum += $remainder;
    $square = (int)($square / 10);
}

if ($sum == $number) {
    echo "$number is a neon number.";
} else {
    echo "$number is not a neon number.";
}

// Q23. Write a PHP script to check if a given number is a narcissistic number or not using an if else statement. a narcissistic number is a number that is the sum of its own digits each raised to the power of the number of digits. eg. 153 = 1^3 + 5^3 + 3^3.

$number = 153;

$sum = 0;

$temp = $number;

$length = strlen($number);

while ($temp != 0) {
    $remainder = $temp % 10;
    $sum += $remainder ** $length;
    $temp = (int)($temp / 10);
}

if ($sum == $number) {
    echo "$number is a narcissistic number.";
} else {
    echo "$number is not a narcissistic number.";
}

// Q24. Write a PHP script to check if a given number is a perfect square or not using an if else statement. a perfect square is a number that is the square of an integer. eg. 16 = 4 * 4.

$number = 16;

$is_perfect_square = false;

for ($i = 1; $i * $i <= $number; $i++) {
    if ($i * $i == $number) {
        $is_perfect_square = true;
        break;
    }
}

if ($is_perfect_square) {
    echo "$number is a perfect square.";
} else {
    echo "$number is not a perfect square.";
}

// Q25. Write a PHP script to check if a given number is a Fibonacci number or not using an if else statement. 

$number = 13;

function isPerfectSquare($number)
{
    $root = sqrt($number);
    return ($root * $root == $number);
}

function isFibonacci($number)
{
    return isPerfectSquare(5 * $number * $number + 4) || isPerfectSquare(5 * $number * $number - 4);
}

if (isFibonacci($number)) {
    echo "$number is a Fibonacci number.";
} else {
    echo "$number is not a Fibonacci number.";
}

// Q26. Write a PHP script to check if a given number is a happy prime number or not using an if else statement. A happy prime number is a number that is both happy and prime. A happy number is a number which eventually reaches 1 when replaced by the sum of the square of each digit. A prime number is a number that is greater than 1 and divided by 1 and itself only.

$number = 7;

function isHappyNumber($number)
{
    $sum = 0;
    while ($number > 0) {
        $remainder = $number % 10;
        $sum += $remainder * $remainder;
        $number = (int)($number / 10);
    }
    return $sum;
}

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$result = $number;

while ($result != 1 && $result != 4) {
    $result = isHappyNumber($result);
}

if ($result == 1 && isPrime($number)) {
    echo "$number is a happy prime number.";
} else {
    echo "$number is not a happy prime number.";
}

//  switch case
// Q27. Write a PHP script to print the name of the day based on the number (1-7) using a switch statement.

$day = 3;

switch ($day) {
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tuesday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "Thursday";
        break;
    case 6:
        echo "Friday";
        break;
    case 7:
        echo "Saturday";
        break;
    default:
        echo "Invalid day number.";
}


// Q28. Write a PHP script to print the name of the month based on the number (1-12) using a switch statement.

$month = 5;

switch ($month) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month number.";
}

// Q29. Write a PHP script to print the name of the color based on the code (R, G, B) using a switch statement.

$color = 'R';

switch ($color) {
    case 'R':
        echo "Red";
        break;
    case 'G':
        echo "Green";
        break;
    case 'B':
        echo "Blue";
        break;
    default:
        echo "Invalid color code.";
}

// Q30. Write a PHP script to print the name of the grade based on the marks (0-100) using a switch statement.

$marks = 85;

switch (true) {
    case $marks >= 90:
        echo "A+ grade";
        break;
    case $marks >= 85:
        echo "A grade";
        break;
    case $marks >= 80:
        echo "B grade";
        break;
    case $marks >= 75:
        echo "C grade";
        break;
    case $marks >= 60:
        echo "D grade";
        break;
    default:
        echo "Fail";
}

// Q31. Write a PHP script to print the first 10 natural numbers using a for loop.

for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

// Q32. Write a PHP script to print the first 10 even numbers using a for loop.

for ($i = 2; $i <= 20; $i += 2) {
    echo "$i ";
}

// Q33. Write a PHP script to print the first 10 odd numbers using a for loop.

for ($i = 1; $i <= 19; $i += 2) {
    echo "$i ";
}

// Q34. Write a PHP script to print the first 10 natural numbers in reverse order using a for loop.

for ($i = 10; $i >= 1; $i--) {
    echo "$i ";
}

// Q35. Write a PHP script to print the first 10 even numbers in reverse order using a for loop.

for ($i = 20; $i >= 2; $i -= 2) {
    echo "$i ";
}

// Q36. Write a PHP script to print the first 10 odd numbers in reverse order using a for loop.

for ($i = 19; $i >= 1; $i -= 2) {
    echo "$i ";
}

// Q37. Write a PHP script to print the sum of the first 10 natural numbers using a for loop.

$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "The sum of the first 10 natural numbers is $sum.";

// Q38. Write a PHP script to iterate through an associative array and print the key-value pairs using a foreach loop.

$colors = array("red" => "#ff0000", "green" => "#00ff00", "blue" => "#0000ff");

foreach ($colors as $key => $value) {
    echo "Key: $key, Value: $value<br>";
}

// Q39. Write a PHP script to iterate through an indexed array and print the values using a foreach loop.

$colors = array("red", "green", "blue");

foreach ($colors as $value) {
    echo "$value<br>";
}

// Q40. Write a PHP script to print numbers from 1 to 5 using a while loop.

$i = 1;

while ($i <= 5) {
    echo "$i ";
    $i++;
}

// Q41. Write a PHP script to print numbers from 1 to 5 using a do-while loop.

$i = 1;

do {
    echo "$i ";
    $i++;
} while ($i <= 5);

// Q42. Write a PHP script to print numbers from 1 to 10, but break the loop when the number is 5.

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "$i ";
}

// Q43. Write a PHP script to print numbers from 1 to 10, but skip the number 5.

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo "$i ";
}

// Ternary Operator
// Q44. Write a PHP script to check if a given number is positive, negative, or zero using a ternary operator.

$number = 5;

$status = ($number > 0) ? "positive" : (($number < 0) ? "negative" : "zero");

echo "The number is $status.";

// Q45. Write a PHP script to check if a given number is even or odd using a ternary operator.

$number = 5;

$parity = ($number % 2 == 0) ? "even" : "odd";








?>
