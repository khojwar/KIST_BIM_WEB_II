<?php

// -------------------------------------------------------------------------------
//              if Statement
// -------------------------------------------------------------------------------

// *********** Syntax **************
// if(condition){  
//     //code to be executed  
//     }  

// *********** Example **************
 
$num=12;  
if($num<100){  
echo "$num is less than 100";  
}  

// -------------------------------------------------------------------------------
//              if else Statement
// -------------------------------------------------------------------------------

// *********** Syntax **************
// if(condition){  
//     //code to be executed if true  
//     }else{  
//     //code to be executed if false  
//     }   

// *********** Example **************
$num=12;  
if($num%2==0){  
echo "$num is even number";  
}else{  
echo "$num is odd number";  
}  



// -------------------------------------------------------------------------------
//              if else if Statement
// -------------------------------------------------------------------------------

// *********** Syntax **************
// if (condition1){    
//     //code to be executed if condition1 is true    
//     } elseif (condition2){      
//     //code to be executed if condition2 is true    
//     } elseif (condition3){      
//     //code to be executed if condition3 is true    
//     ....  
//     }  else{    
//     //code to be executed if all given conditions are false    
//     }  

// *********** Example **************
 
    $marks=83;      
    if ($marks<60){    
        echo "fail";    
    }    
    else if ($marks>=60 && $marks<75) {    
        echo "D grade";    
    }    
    else if ($marks>=75 && $marks<80) {    
       echo "C grade";   
    }    
    else if ($marks>=80 && $marks<85) {    
        echo "B grade";   
    }    
    else if ($marks>=85 && $marks<90) {    
        echo "A grade";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    

  

// -------------------------------------------------------------------------------
//              PHP nested if Statement
// -------------------------------------------------------------------------------

// *********** Syntax **************
// if (condition) {    
//     //code to be executed if condition is true   
//     if (condition) {    
//     //code to be executed if condition is true    
//     }    
//     } 

 
// *********** Example **************
$age = 23;  
$nationality = "Nepali";  
//applying conditions on nationality and age  
if ($nationality == "Nepali")  
{  
    if ($age >= 18) {  
        echo "Eligible to give vote";  
    }  
    else {    
        echo "Not eligible to give vote";  
    }  
}  


// ternary operator
// Syntax:
// (condition) ? (value_if_true) : (value_if_false);


// Example:
$age = 20;

// Using ternary operator
$status = ($age >= 18) ? "adult" : "minor";

echo $status; // Outputs: adult





?>