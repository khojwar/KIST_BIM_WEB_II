<?php
// Multidimentional Array
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

// display above code in table format
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Physics</th><th>Maths</th><th>Chemistry</th></tr>";
foreach ($marks as $key => $value) {
    echo "<tr><td>$key</td>";
    foreach ($value as $key2 => $value2) {
        echo "<td>$value2</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Output:
// Name	Physics	Maths	Chemistry
// mohammad	35	30	39
// qadir	30	32	29
// zara	31	22	39


// Accessing multidimentional array values
echo "Marks for mohammad in physics : ";
echo $marks['mohammad']['physics'] . "<br>";

echo "Marks for qadir in maths : ";
echo $marks['qadir']['maths'] . "<br>";

echo "Marks for zara in chemistry : ";
echo $marks['zara']['chemistry'] . "<br>";

// Output:
// Marks for mohammad in physics : 35
// Marks for qadir in maths : 32
// Marks for zara in chemistry : 39


// Accessing multidimentional array values using for loop
echo "<br> <h3>Accessing multidimentional array values using for loop</h3> <br>";
$keys = array_keys($marks);
for ($i = 0; $i < count($marks); $i++) {
    echo "<p><b>$keys[$i]</b></p>";
    echo "<ul>";
    foreach ($marks[$keys[$i]] as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";
}

// Output:
// mohammad
// physics: 35
// maths: 30
// chemistry: 39
// qadir
// physics: 30
// maths: 32
// chemistry: 29
// zara
// physics: 31
// maths: 22
// chemistry: 39


// Accessing multidimentional array values using  foreach loop
echo "<br> <h3>Accessing multidimentional array values using foreach loop</h3> <br>";
foreach ($marks as $key => $value) {
    echo "<p><b>$key</b></p>";
    echo "<ul>";
    foreach ($value as $key2 => $value2) {
        echo "<li>" . $key2 . ": " . $value2 . "</li>";
    }
    echo "</ul>";
}

// Output:
// mohammad
// physics: 35
// maths: 30
// chemistry: 39
// qadir
// physics: 30
// maths: 32
// chemistry: 29
// zara
// physics: 31
// maths: 22
// chemistry: 39









?>