<!-- 
*** Steps for Implementing Flash Messages: ***
1. Start a Session:
Ensure that a session is started on the pages where you want to use flash messages.

2. Set a Flash Message:
Store the flash message in the session.

3. Display and Clear the Flash Message:
Display the flash message if it exists and then clear it from the session. 
-->



<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Example form handling logic
    if (!empty($_POST["name"]) && !empty($_POST["email"])) {
        // Set flash message
        $_SESSION['flash_message'] = "Subscription successful!";
    } else {
        // Set flash message
        $_SESSION['flash_message'] = "Please fill in all required fields.";
    }

    // Redirect to the same page to prevent form resubmission
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subscription Form</title>
    <style>
        .flash-message {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            color: #333;
        }
    </style>
</head>
<body>

<h2>Subscription Form</h2>

<?php
if (isset($_SESSION['flash_message'])) {
    echo "<div class='flash-message'>{$_SESSION['flash_message']}</div>";
    // Clear the flash message
    unset($_SESSION['flash_message']);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    <input type="submit" name="submit" value="Subscribe">
</form>

</body>
</html>
