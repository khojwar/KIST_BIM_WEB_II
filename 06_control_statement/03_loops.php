<?php

// ----------------------------------While loop---------------------------------------------
// Syntax:
// while(condition){  
//     //code to be executed  
//     }  

// Example:
  
$n=1;    
while($n<=10){    
echo "$n<br/>";    
$n++;    
}    
 
// ---------------------------------- do While loop---------------------------------------------
// Syntax:
// do{  
//     //code to be executed  
//     }while(condition);  

// Example:

    
$n=1;    
do{    
echo "$n<br/>";    
$n++;    
}while($n<=10);    


// ---------------------------------- for loop---------------------------------------------
// Syntax:
// for(initialization; condition; increment/decrement){  
//     //code to be executed  
//     } 

// Example:
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }


// ---------------------------------- foreach loop---------------------------------------------
// Syntax:

// foreach ($array as $value) {  
//     //code to be executed  
// }  

// example:
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}


?>