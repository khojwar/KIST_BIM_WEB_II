<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Math</th>
            <th>Science</th>
            <th>English</th>
        </tr>
        <tr>
            <td>Alice</td>
            <td>90</td>
            <td>85</td>
            <td>88</td>
        </tr>
        <tr>
            <td>Bob</td>
            <td>78</td>
            <td>82</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Charlie</td>
            <td>85</td>
            <td>87</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Diana</td>
            <td>92</td>
            <td>90</td>
            <td>89</td>
        </tr>
    </table>


    <p>(a) Write the PHP code to access and print the values of the two-dimensional array $students using direct index access.</p>
    <p>(b) Write the PHP code to access and print the values of the two-dimensional array $students using a nested for loop.</p>
    <p>(c) Write the PHP code to access and print the values of the two-dimensional array $students using a nested foreach loop.</p>
    <p>(d) Additionally, modify the foreach loop code to print the keys along with the values. </p>
</body>
</html>



<?php

echo "<h2> Solution </h2> <br>";
echo "(a) Accessing and printing values using direct index access: <br>";

$students = array (
    array("Alice", 90, 85, 88),
    array("Bob", 78, 82, 80),
    array("Charlie", 85, 87, 90),
    array("Diana", 92, 90, 89)
);

echo $students[0][0].": Math: ".$students[0][1].", Science: ".$students[0][2].", English: ".$students[0][3].".<br>";
echo $students[1][0].": Math: ".$students[1][1].", Science: ".$students[1][2].", English: ".$students[1][3].".<br>";
echo $students[2][0].": Math: ".$students[2][1].", Science: ".$students[2][2].", English: ".$students[2][3].".<br>";
echo $students[3][0].": Math: ".$students[3][1].", Science: ".$students[3][2].", English: ".$students[3][3].".<br>";


echo "<br>(b) Accessing and printing values using a nested for loop: <br>";
$students = array (
    array("Alice", 90, 85, 88),
    array("Bob", 78, 82, 80),
    array("Charlie", 85, 87, 90),
    array("Diana", 92, 90, 89)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 4; $col++) {
        echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}



echo "<br>(c) Accessing and printing values using a nested foreach loop: <br>";

$students = array (
    array("Alice", 90, 85, 88),
    array("Bob", 78, 82, 80),
    array("Charlie", 85, 87, 90),
    array("Diana", 92, 90, 89)
);

foreach ($students as $student) {
    echo "<p><b>Row number</b></p>";
    echo "<ul>";
    foreach ($student as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}



echo "<br>(d) Modified foreach loop to print keys along with values: <br>";

$students = array (
    array("Alice", 90, 85, 88),
    array("Bob", 78, 82, 80),
    array("Charlie", 85, 87, 90),
    array("Diana", 92, 90, 89)
);

foreach ($students as $student) {
    echo "<p><b>Row number</b></p>";
    echo "<ul>";
    foreach ($student as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";
}







?>
