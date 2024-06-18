<?php
$file = fopen("example.txt", "r");
if ($file) {
    var_dump($file);
    fclose($file);
} else {
    echo "Failed to open file.";
}
?>