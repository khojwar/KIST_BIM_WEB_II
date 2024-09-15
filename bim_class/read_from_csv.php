<?php
// 2d array 
$data = [
    ['name', 'price', 'quantity'],
    ['apple', 1.99, 10],
    ['banana', 0.99, 5],
    ['cherry', 2.99, 3],
    ['date kdfjlkdj', 3.99, 2],
    ['elderberry, hello', 4.99, 1]
]; 

$f = fopen('stock.csv', 'w');

foreach ($data as $row) {
    fputcsv($f, $row, $seperator = ';', $enclosure = '"', $escape_char = '\\');
}

fclose($f);






$f = fopen('stock.csv', 'r');

$row = fgetcsv($f, 0, ';', '"', '\\');
while ($row !== false) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}
?>
