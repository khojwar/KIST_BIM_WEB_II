
<form action="" method="post" style="text-align: center; width: 100%;">
        
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name" required><br><br>
    
    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="enrollment_date">Enrollment Date:</label><br>
    <input type="date" id="enrollment_date" name="enrollment_date" required><br><br>
    
    <input type="submit" value="Submit">
</form>



<?php
include 'connect.php';

// define variables and set to empty values
$id = $first_name = $last_name = $email = $enrollment_date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $enrollment_date = $_POST['enrollment_date'];

    // insert query
    $sql = "INSERT INTO `student_table`(id, first_name, last_name, email, enrollment_date) VALUES ('','$first_name','$last_name','$email','$enrollment_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
