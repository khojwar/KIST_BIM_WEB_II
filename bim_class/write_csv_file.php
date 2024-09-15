<?php

// $data = [
//     ['name', 'price', 'quantity'],
//     ['ap,ple', 1.99, 10],
//     ['banana', 0.99, 5],
//     ['cherry', 2.99, 3],
//     ['date   apple', 3.99, 2],
//     ['elderberry, hello', 4.99, 1]
// ];

// $f = fopen("stock.csv", 'w');

// foreach ($data as $row) {
//     fputcsv($f, $row, $seperator = ',', $enclosure = '"', $escape_char = '\\');
// }

// fclose($f);


// read csv file
$f = fopen('stock.csv', 'r');
$data = [];

$row = fgetcsv($f, 0, ',', '"', '\\');

while ($row !== false) {
    $data[] = $row;
    echo '<pre>';
    // print_r($row);
    print_r($data);
    echo '</pre>';
}  



?>