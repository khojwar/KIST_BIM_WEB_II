<?php

require './a/a.php';
require './b/a.php';

use MyProject\MyClass;
use MyProject1\MyClass as bcalss;

$object = new MyClass();
$object->myFunction();

echo "<br>";

$ob = new bcalss();
$ob->myFunction();