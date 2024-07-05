<?php

// syntax:
// tmpfile ( ) : resource|false


// example 1
$f = tmpfile();

if (false !== $f) {
    // write some text to the file
    fputs($f, 'The current time is ' . strftime('%c'));
}

echo 'The current time is ' . strftime('%c');

exit(1);


// output: The current time is Thu Jul  1 14:00:00 2021

?>