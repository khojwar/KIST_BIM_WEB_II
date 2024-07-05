<!-- File handling in PHP involves reading from and writing to files on the server. -->


<?php
// Writing to a File:
$file = fopen("example.txt", "w") or die("Unable to open file!");
$text = "Hello, world!\n";
fwrite($file, $text);
fclose($file);


// Reading from a File:
$file = fopen("example.txt", "r") or die("Unable to open file!");
while (!feof($file)) {
  echo fgets($file) . "<br>";
}
fclose($file);

?>


