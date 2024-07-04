<?php

// syntax
// try {
// 	// perform some task
// } catch (Exception $ex) {
// 	// jump to this part
// 	// if an exception occurred
// }


// Example (read data from a CSV file) without using try catch block

// $data = [];

// $f = fopen('data.csv', 'r');

// do {
// 	$row = fgetcsv($f);
// 	$data[] = $row;
// } while ($row);

// fclose($f);



// using try catch block

// $data = [];

// try {
// 	$f = fopen('data.csv', 'r');

// 	do {
// 		$row = fgetcsv($f);
// 		$data[] = $row;
// 	} while ($row);

// 	fclose($f);
// } catch (Exception $ex) {
// 	echo $ex->getMessage();
// }




// Multiple catch blocks
// A try...catch statement can have multiple catch blocks. Each catch block will handle a specific exception:

// try {
//     //code...
// } catch (Exception1 $ex1) {
//     // handle exception 1
// } catch (Exception2 $ex2) {
//     // handle exception 2
// } catch (Exception1 $ex3) {
//     // handle exception 3
// }
// ...


// If you have the same code that handles multiple types of exceptions, you can place multiple exceptions in one catch block and separate them by the pipe (|) character like this:

// try {
// 	//code...
// } catch (Exception1 | Exception2 $ex12) {
// 	// handle exception 1 & 2
// } catch (Exception3 $ex3) {
// 	// handle exception 3
// }


// As of PHP 8.0, the variable name for the caught exception is optional
// try {
// 	//code...

// } catch (Exception) {
// 	// handle exception
// }




// The finally is an optional block of the try…catch statement. The finally block always executes after the try or catch block.
// Syntax of finally block

// try {
// 	// do something
// } catch (Exception $e) {
// 	// code to handle exception
// } finally {
// 	// code to clean up the resource
// }



// The following defines the divide() function that returns the division of two numbers. If an error occurs, it returns null.

function divide($x, $y)
{
	try {
		$result = $x / $y;

		return $result;
	} catch (Exception $e) {
		return null;
	} finally {
		return null;
	}
}

// Call the divide() function
$result = divide(10, 2);
var_dump($result); // NULL

// Typically, the return statement immediately stops the execution and returns a value. However, it doesn’t work that way when it is used with the try...catch...finally statement.

// When you use the return statement with the try...catch...finally statement, the finally block still executes after the return statement.

// The result will be returned after the finally block is executed. Also, if the finally block has a return statement, the value from the finally block will be returned.



// When the file is not closed properply, it may be inaccessible later.

// To ensure that the file will be closed properly regardless of whatever exception occurs or not, you can close the file in the finally block like this:

$data = [];

try {
	$f = fopen('data.csv', 'r');

	while ($row = $fgetcsv($f)) {
		$data[] = $row;
	}
} catch (Exception $ex) {
	echo $ex->getMessage();
} finally {
	if ($f) {
		fclose($f);
	}
}








// The try…finally statement
// try {
// 	// do something
// } finally {
// 	// clean up
// }