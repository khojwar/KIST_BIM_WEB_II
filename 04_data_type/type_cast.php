<!-- implicit -->
<?php
$x = 5;     // An integer)
$y = 4;     // An integer)
$a=$x/$y;   // a float value

echo $a;    // 1.25
?>



<!-- EXplicit -->
<?php
$x = 5.35;
$y = (int) $x;  // casted  $x to integer
var_dump($y)  // output 5
?>


