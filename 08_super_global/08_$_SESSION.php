<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Handling with PHP</title>
</head>
<body>
    <?php
    // Start the session
    session_start();
    
    // Set session variable
    $_SESSION['username'] = "Tika Ram Khojwar";
    
    // Display the session variable
    echo "<p>Session username: " . htmlspecialchars($_SESSION['username']) . "</p>";
    ?>
</body>
</html>
