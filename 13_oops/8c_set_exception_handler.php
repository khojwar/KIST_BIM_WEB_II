<?php

/*
In practice, it’s very difficult to catch every possible exception. If an exception is uncaught, you’ll see the exception message on the page.

PHP allows you to catch the uncaught exceptions by registering a global exception handler.

The global exception handler allows you to show a user-friendly message to the users while logging the important information into a log file for troubleshooting later.

To register a global exception handler, you use the set_exception_handler() function.

The set_exception_handler() function accepts a callable where you can place the code to handle the uncaught exceptions. For example:

*/


// set_exception_handler(function ($ex) {
// 	// handle the uncaught exception
// });



// To use a global function, you can pass the function name to the set_exception_handler() function like this:

// set_exception_handler('handle_exceptions');



// In case you want to use a method of an object, you need to pass an array with the first element is the object and the second element is the method name. For example:
class ExceptionHandler
{
    public function handle(Exception $ex)
    {
        // code to handle the exception
    }
}

$handler = new ExceptionHandler();

set_exception_handler([$handler, 'handle']);








// Example: Registering a global exception handler

set_exception_handler(function (Exception $ex) {
    // Set default timezone
    date_default_timezone_set('America/Los_Angeles');

    // Get the current date & time
    $time = date('F j, Y, g:i a e O');

    // Format the exception message
    $message = "[{$time}] {$ex->getMessage()}\n";

    // Append to the error log
    error_log($message, 3, 'logs/errors.log');

    // Show a user-friendly message
    echo 'Whoops, looks like something went wrong!';
});



function add($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new InvalidArgumentException('Both arguments must be numeric or numeric strings');
    }

    return $a + $b;
}

echo add('Hi', 'there');

// Output:
// Whoops, looks like something went wrong!

// logs/errors.log
// This file will be created automatically when an exception is logged. Make sure the logs directory is writable by the web server.



?>