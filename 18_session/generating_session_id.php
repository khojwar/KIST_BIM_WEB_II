<?php
// Start the session
session_start();

// Regenerate session ID to prevent fixation attacks
if (!isset($_SESSION['initiated'])) {
    session_regenerate_id(true);
    $_SESSION['initiated'] = true;


}

echo $_SESSION['initiated'];
?>
