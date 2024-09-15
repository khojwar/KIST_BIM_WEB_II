<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, firstname, lastname, email FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No user found with this ID";
        exit;
    }
}

$updated = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        $updated = true;

        // Clear the form data after successful update
        $row['firstname'] = '';
        $row['lastname'] = '';
        $row['email'] = '';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        First name: <input type="text" name="firstname" value="<?php echo $updated ? '' : $row['firstname']; ?>"><br>
        Last name: <input type="text" name="lastname" value="<?php echo $updated ? '' : $row['lastname']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $updated ? '' : $row['email']; ?>"><br>
        <input type="submit" value="Update">
    </form>
    
</body>
</html>
