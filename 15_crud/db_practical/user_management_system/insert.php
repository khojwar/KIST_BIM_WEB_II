<form action="insert.php" method="post">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Submit">
</form>


<?php

include 'db.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`) VALUES ('$firstname','$lastname','$email')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>