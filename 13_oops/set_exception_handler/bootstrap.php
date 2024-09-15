<?php
// Example: Registering a global exception handler

set_exception_handler(function (Exception $ex) {
	// set default timezone
	date_default_timezone_set('America/Los_Angeles');

	// get the current date & time
	$time = date('F j, Y, g:i a e O');

	// format the exception message
	$message = "[{$time}] {$ex->getMessage()}\n";

	// append to the error log
	error_log($message, 3, 'logs/errors.log');

	// show a user-friendly message
	echo 'Whoops, looks like something went wrong!';
});

