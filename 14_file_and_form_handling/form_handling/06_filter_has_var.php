<!DOCTYPE html>
<html>
<head>
    <title>filter_has_var Example</title>
</head>
<body>

<form method="get" action="">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit GET">
</form>

<form method="post" action="">
    Email: <input type="text" name="email">
    <input type="submit" value="Submit POST">
</form>

<?php
if (filter_has_var(INPUT_GET, 'name')) {
    echo "GET: The 'name' variable exists and its value is: " . htmlspecialchars($_GET['name']) . "<br>";
} else {
    echo "GET: The 'name' variable does not exist.<br>";
}

if (filter_has_var(INPUT_POST, 'email')) {
    echo "POST: The 'email' variable exists and its value is: " . htmlspecialchars($_POST['email']) . "<br>";
} else {
    echo "POST: The 'email' variable does not exist.<br>";
}
?>

</body>
</html>
