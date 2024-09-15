
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
</head>
<body>
    <h1>Create User</h1>
    <form action="create.php" method="post">
        First name: <input type="text" name="firstname"><br>
        Last name: <input type="text" name="lastname"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit">
    </form>

</body>
</html>

<?php
// $id = $firstname = $lastname = $email = '';
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo '<a href="./read.php">User List</a> ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>