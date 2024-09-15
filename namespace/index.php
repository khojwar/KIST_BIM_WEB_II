<?php
// File: index.php
require 'Library/Book.php';
require 'App/Library.php';

use Library\Book;
use App\Library;

$book = new Book();
echo "The title of the book is: \"" . $book->getTitle() . "\"\n";
echo "<br>";

$appLibrary = new Library();
$appLibrary->listBooks();
?>
