<?php

require './header.php';

$errors = [];
$inputs = [];

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {
    // show the form
    require './get.php';
} elseif ($request_method === 'POST') {
    // handle the form submission
    require './ost.php';
    // show the form if the error exists
    if (count($errors) > 0) {
        require './get.php';
    }
}

require './footer.php';
