<?php
header('WWW-Authenticate: Basic realm="My Realm"');
header('HTTP/1.0 401 Unauthorized');
echo 'You have been logged out.';

// Optionally, add a logout link or button
// echo '<p><a href="HTTP_Authentication_forcing_a_new_name_or_password.php">Log In</a></p>';
exit;
?>
