<?php

$con = new mysqli("localhost", "root", "", "testdb");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

echo "Connected successfully";