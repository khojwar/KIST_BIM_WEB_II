<?php
// Syntax 
// fread ( resource $stream , int $length ) : string|false


$filename = './public/population.txt';
$f = fopen($filename, 'r');

if ($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);
    echo nl2br($contents);  // nl2br() function inserts HTML line breaks (<br>) before all newlines in a string
}

// Output:
// 1 New York New York 8,253,213
// 2 Los Angeles California 3,970,219
// 3 Chicago Illinois 2,677,643
// 4 Houston Texas 2,316,120





?>