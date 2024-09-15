<?php
// Include the authentication logic
require_once '../auth/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protected Page</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>This is a protected page. Only authenticated users can see this.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
