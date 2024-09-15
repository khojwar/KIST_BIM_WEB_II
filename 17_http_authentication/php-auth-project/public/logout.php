<?php
session_start();
session_destroy();

// Ask the browser to forget the credentials
header('HTTP/1.0 401 Unauthorized');
echo 'Logged out. <a href="index.php">Login again</a>';
exit;
?>
