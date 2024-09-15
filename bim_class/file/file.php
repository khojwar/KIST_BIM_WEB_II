<?php

$filename = "hello.txt";

if (!file_exists($filename)){
    // die("The file $filename doesnot exist");
    echo "file doesnot exist so we create file.";
    $f = fopen($filename, 'w');
    fwrite($f, "hello hi");
    // echo "hello";
}

$f = fopen($filename, 'r');
if ($f) {
    if (is_writable($filename)) {
        $content = fread($f, filesize($filename));
        fclose($f);
        echo nl2br($content);
    }
}






?>