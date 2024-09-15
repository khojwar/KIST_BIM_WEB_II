<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Create User</h2>
        <form method="post" action="create.php">
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" id="firstname"><br>
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" id="lastname"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
