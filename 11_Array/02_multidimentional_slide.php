<?php

// ****************************** Slide Examples *****************************************************************

// Two dimentional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

// Accessing two dimentional array values
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// Output:
// Volvo: In stock: 22, sold: 18.
// BMW: In stock: 15, sold: 13.
// Saab: In stock: 5, sold: 2.
// Land Rover: In stock: 17, sold: 15.


// Accessing two dimentional array values using for loop
echo "<br> <h3>Accessing two dimentional array values using for loop</h3> <br>";
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}

// Output:
// Row number 0
// Volvo
// 22
// 18
// Row number 1
// BMW
// 15
// 13
// Row number 2
// Saab
// 5
// 2
// Row number 3
// Land Rover
// 17
// 15

// Accessing two dimentional array values using foreach loop
echo "<br> <h3>Accessing two dimentional array values using foreach loop</h3> <br>";
foreach ($cars as $car) {
    echo "<p><b>Row number</b></p>";
    echo "<ul>";
    foreach ($car as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}

// Output:
// Row number
// Volvo
// 22
// 18
// Row number
// BMW
// 15
// 13
// Row number
// Saab
// 5
// 2
// Row number
// Land Rover
// 17
// 15


// Accessing two dimentional array values using foreach loop
echo "<br> <h3>Accessing two dimentional array values using foreach loop</h3> <br>";
foreach ($cars as $car) {
    echo "<p><b>Row number</b></p>";
    echo "<ul>";
    foreach ($car as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";
}

// Output:
// Row number
// 0: Volvo
// 1: 22
// 2: 18
// Row number
// 0: BMW
// 1: 15
// 2: 13
// Row number
// 0: Saab
// 1: 5
// 2: 2
// Row number
// 0: Land Rover
// 1: 17
// 2: 15




// ****************************** Two dimensional associative array: *****************************************************************
//  Al associative array is similar to indexed array but instead of linear storage (indexed storage), every value can be assigned with a user-defined key of string type.

// Example 1
// Two dimentional associative array
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);

// Accessing two dimentional associative array values
echo "<br> <h3>Accessing two dimentional associative array values</h3> <br>";
echo "Marks for mohammad.<br>";
echo "Physics: " . $marks['mohammad']['physics'] . "<br>";
echo "Maths: " . $marks['mohammad']['maths'] . "<br>";
echo "Chemistry: " . $marks['mohammad']['chemistry'] . "<br>";

echo "Marks for qadir.<br>";
echo "Physics: " . $marks['qadir']['physics'] . "<br>";
echo "Maths: " . $marks['qadir']['maths'] . "<br>";
echo "Chemistry: " . $marks['qadir']['chemistry'] . "<br>";

echo "Marks for zara.<br>";
echo "Physics: " . $marks['zara']['physics'] . "<br>";
echo "Maths: " . $marks['zara']['maths'] . "<br>";
echo "Chemistry: " . $marks['zara']['chemistry'] . "<br>";

// Output:
// Marks for mohammad.
// Physics: 35
// Maths: 30
// Chemistry: 39
// Marks for qadir.
// Physics: 30
// Maths: 32
// Chemistry: 29
// Marks for zara.
// Physics: 31
// Maths: 22
// Chemistry: 39

// Accessing two dimentional associative array values using foreach loop    
echo "<br> <h3>Accessing two dimentional associative array values using foreach loop</h3> <br>";
foreach ($marks as $key => $value) {
    echo "<p><b>Row number</b></p>";
    echo "<ul>";
    foreach ($value as $key1 => $value1) {
        echo "<li>" . $key1 . ": " . $value1 . "</li>";
    }
    echo "</ul>";
}

// Output:
// Row number
// physics: 35
// maths: 30
// chemistry: 39
// Row number
// physics: 30
// maths: 32
// chemistry: 29
// Row number




// Example 2
// PHP program to creating two dimensional associative array 

$marks = array( 
      
    // Ankit will act as key 
    "Ankit" => array( 
          
        // Subject and marks are 
        // the key value pair 
        "C" => 95, 
        "DCO" => 85, 
        "FOL" => 74, 
    ), 
          
    // Ram will act as key 
    "Ram" => array( 
          
        // Subject and marks are 
        // the key value pair 
        "C" => 78, 
        "DCO" => 98, 
        "FOL" => 46, 
    ), 
      
    // Anoop will act as key 
    "Anoop" => array( 
          
        // Subject and marks are 
        // the key value pair 
        "C" => 88, 
        "DCO" => 46, 
        "FOL" => 99, 
    ), 
); 
  
echo "Display Marks: \n"; 
      
print_r($marks); 

// Output:
// Display Marks:
// Array
// (
//     [Ankit] => Array
//         (
//             [C] => 95
//             [DCO] => 85
//             [FOL] => 74
//         )
//     [Ram] => Array
//         (
//             [C] => 78
//             [DCO] => 98
//             [FOL] => 46
//         )
//     [Anoop] => Array
//         (
//             [C] => 88
//             [DCO] => 46
//             [FOL] => 99
//         )
// )

// Accessing two dimentional associative array values
echo "<br>";
echo "<br>";
echo "Accessing two dimentional associative array values: <br>";
echo "Ankit's marks in C: " . $marks['Ankit']['C'] . "\n";
echo "Ankit's marks in DCO: " . $marks['Ankit']['DCO'] . "\n";
echo "Ankit's marks in FOL: " . $marks['Ankit']['FOL'] . "\n";

echo "Ram's marks in C: " . $marks['Ram']['C'] . "\n";
echo "Ram's marks in DCO: " . $marks['Ram']['DCO'] . "\n";
echo "Ram's marks in FOL: " . $marks['Ram']['FOL'] . "\n";

echo "Anoop's marks in C: " . $marks['Anoop']['C'] . "\n";
echo "Anoop's marks in DCO: " . $marks['Anoop']['DCO'] . "\n";
echo "Anoop's marks in FOL: " . $marks['Anoop']['FOL'] . "\n";

// Output:
// Ankit's marks in C: 95
// Ankit's marks in DCO: 85
// Ankit's marks in FOL: 74
// Ram's marks in C: 78
// Ram's marks in DCO: 98
// Ram's marks in FOL: 46
// Anoop's marks in C: 88
// Anoop's marks in DCO: 46
// Anoop's marks in FOL: 99




// -------------------------- NOTE----------------------------------------------------------------------------------------------------------------------------------------------------------
// ------------------------Below code will give error -------------------------------------------------------------------
// The error occurs because the array marks is accessed with numerical indices, which is typical for a regular indexed array, not an associative array. 
// Associative arrays in PHP use keys instead of indices. 
// To access the values correctly, you need to adjust the code according to the structure of your associative array.


// // Accessing two dimentional associative array values using for loop
// echo "<br>";    
// echo "<br>";
// echo "Accessing two dimentional associative array values using for loop: <br>";
// for ($i = 0; $i < 3; $i++) {
//     echo "<p><b>Row number $i</b></p>";
//     echo "<ul>";
//     for ($j = 0; $j < 3; $j++) {
//         echo "<li>" . $marks[$i][$j] . "</li>";
//     }
//     echo "</ul>";
// }

// // Output:
// // Row number 0
// // Notice: Undefined offset: 0 in C:\xampp\htdocs\php_tutorial\11_Array\02_multidimentional_slide.php on line 191


// To access the values correctly using a nested foreach loop, your code should look like this:
// Accessing two dimentional associative array values using foreach loop
echo "<br>";
echo "<br>";
echo "Accessing two dimentional associative array values using foreach loop: <br>";
foreach ($marks as $key => $value) {
    echo "<p><b>Row number</b></p>";
    echo "<ul>";
    foreach ($value as $key1 => $value1) {
        echo "<li>" . $key1 . ": " . $value1 . "</li>";
    }
    echo "</ul>";
}

// Output:
// Row number
// C: 95
// DCO: 85
// FOL: 74
// Row number
// C: 78
// DCO: 98
// FOL: 46
// Row number
// C: 88
// DCO: 46
// FOL: 99


/*
This way, you correctly access the keys and values in the associative array. 
If you still need to use for loops, you'd have to use a combination of array_keys() and array_values() to handle the associative keys. 
Here's an example:
*/

echo "<br>";    
echo "<br>";
echo "Accessing two dimensional associative array values using for loop: <br>";
$students = array_keys($marks);     // ["Ankit", "Ram", "Anoop"]   --> keys of $marks array
$num_students = count($students);   // 3    --> count of $students array 

for ($i = 0; $i < $num_students; $i++) {
    $student = $students[$i];
    $subjects = array_keys($marks[$student]);
    $num_subjects = count($subjects);

    echo "<p><b>$student</b></p>";
    echo "<ul>";
    for ($j = 0; $j < $num_subjects; $j++) {
        $subject = $subjects[$j];
        $score = $marks[$student][$subject];
        echo "<li>$subject: $score</li>";
    }
    echo "</ul>";
}



// ****************************** Three dimensional array: *****************************************************************
// PHP program to creating three dimensional array 
  
// Create three nested array 
$myarray = array( 
    array( 
        array(1, 2), 
        array(3, 4), 
    ), 
    array( 
        array(5, 6), 
        array(7, 8), 
    ), 
); 
      
// Display the array information 
echo "<br>";
echo "<br>";
echo "Display three dimensional array: <br>";
print_r($myarray); 

// Output:
// Display three dimensional array:
// Array
// (
//     [0] => Array
//         (
//             [0] => Array
//                 (
//                     [0] => 1
//                     [1] => 2
//                 )
//             [1] => Array
//                 (
//                     [0] => 3
//                     [1] => 4
//                 )
//         )
//     [1] => Array
//         (
//             [0] => Array
//                 (
//                     [0] => 5
//                     [1] => 6
//                 )
//             [1] => Array
//                 (
//                     [0] => 7
//                     [1] => 8
//                 )
//         )
// )




// accessing three dimensional array values
echo "<br>";
echo "<br>";
echo "Accessing three dimensional array values: <br>";
echo $myarray[0][0][0] . "\n";
echo $myarray[0][0][1] . "\n";
echo $myarray[0][1][0] . "\n";
echo $myarray[0][1][1] . "\n";
echo $myarray[1][0][0] . "\n";
echo $myarray[1][0][1] . "\n";
echo $myarray[1][1][0] . "\n";
echo $myarray[1][1][1] . "\n";

// Output:
// 1
// 2
// 3
// 4
// 5
// 6
// 7
// 8

// accessing three dimensional array values using for loop
echo "<br>";
echo "<br>";
echo "Accessing three dimensional array values using for loop: <br>";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 2; $k++) {
            echo $myarray[$i][$j][$k] . "\n";
        }
    }
}

// Output:
// 1
// 2
// 3
// 4
// 5
// 6
// 7
// 8


// accessing three dimensional array values using foreach loop
echo "<br>";
echo "<br>";
echo "Accessing three dimensional array values using foreach loop: <br>";
foreach ($myarray as $array1) {
    foreach ($array1 as $array2) {
        foreach ($array2 as $value) {
            echo $value . "\n";
        }
    }
}

// Output:
// 1
// 2
// 3
// 4
// 5
// 6
// 7
// 8


?>