<?php
/*
Introduction to the Exception class
When encountering a situation from which you cannot recover, you can throw an exception.

An exception is an instance of the Exception class. Like other PHP objects, you use the new keyword to create an instance of the Exception class.

An Exception object has two main properties: a message and a numeric code. The message describes the exception. The numeric code is optional, which specifies the context for a specific exception.

When you create a new exception, you provide the mesage the optional numeric code. For example:
*/

// $exception = new Exception('Invalid username or password', 100);





// The Exception object has the getMessage() and getCode() that returns the message and numeric code:

// $exception = new Exception('Invalid username or password', 100);

// $message =  $exception->getMessage();
// $code =  $exception->getCode();





// In practice, you rarely assign an exception to a variable. Instead, you raise (or throw) the Exception object using the throw statement:

// throw new Exception('Invalid username or password', 100);

/*
The throw statement accepts an instance of the Exception class or the subclass of the Exception class. In fact, it accepts any object that implements the Throwable interface. Note that the Exception class also implements the Throwable interface.

When PHP encounters a throw statement, it immediately halts the code execution. Therefore, the code after the throw statement won’t execute.

*/



// Example: Throwing an exception
// The following example defines a function called divide() that uses the the throw statement:

function divide($x, $y)
{
    if (!is_numeric($x) || !is_numeric($y)) {
        throw new InvalidArgumentException('Both arguments must be numbers or numeric strings');
    }

    if ($y == 0) {
        throw new Exception('Division by zero, y cannot be zero');
    }
    return $x / $y;
}


/*
How the define() function works.

First, throw the InvalidArgumentException exception if $x and $y are not numbers or numeric strings.
Second, throw the division by zero exception if $y is zero.
Third, return the division of $x and $y.

*/

// Call the divide() function
try {
    $result = divide(10, 0);
    echo $result;
} catch (InvalidArgumentException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// Output
// Caught exception: Division by zero, y cannot be zero



