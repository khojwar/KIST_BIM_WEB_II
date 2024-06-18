<?php

// break statement
// syntax:
// while(expr){
//     if (condition){
//        break;
//     }
//  }


// Example:
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }



// continue statement
// syntax:
// while(expr){
//     if (condition){
//        continue;
//     }
//  }

// Example:
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }

?>