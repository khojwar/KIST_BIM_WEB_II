<?php
/*
To read some characters from a file, you specify the number of bytes to read. 
The following example uses the fread() function to read up to 100 bytes from the population.txt file:
*/
$filename = './public/population.txt';
$f = fopen($filename, 'r');
if ($f) {
    $contents = fread($f, 100);
    fclose($f);
    echo nl2br($contents);
}