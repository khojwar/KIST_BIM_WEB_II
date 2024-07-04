<?php

// **************** PHP Array Functions ***********************
// PHP provides various array functions to access and manipulate the elements of array. 

// array_column()
// array_column() extracts the values from a single column of a multi-dimensional array and returns an array containing those values.

// $people = array(
// array("name" => "John", "age" => 30),
// array("name" => "Alice", "age" => 25),
// array("name" => "Bob", "age" => 35)
// );
// $names = array_column($people, "age");
// echo "Names: ";
// foreach ($names as $name) {
// echo $name . " ";
// }



// ***************** array_chunk() function ***********************
// PHP array_chunk() function splits array into chunks. 
// By using array_chunk() method, you can divide array into many parts.

$salary = array("Sonoo" => "550000", "Vimal" => "250000", "Ratan" => "200000");
$chunks = array_chunk($salary, 2);

print_r($chunks);






?>