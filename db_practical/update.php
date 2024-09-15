



<?php

// update the given data in the database

include 'connect.php';

// define variables and set to empty values
$id = $first_name = $last_name = $email = $enrollment_date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $enrollment_date = $_POST['enrollment_date'];

    // update query
    $sql = "UPDATE `student_table` SET first_name='$first_name', last_name='$last_name', email='$email', enrollment_date='$enrollment_date' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>