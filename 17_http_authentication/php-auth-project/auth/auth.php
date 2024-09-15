<?php
session_start();

// Valid username and password pairs
$users = [
    'admin' => 'password',
    'user1' => 'secret',
    'tika' => 'tika123',
];

// Check if already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    return; // Already authenticated
}

// Check for credentials
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    // Send headers to request authentication
    header('WWW-Authenticate: Basic realm="My Protected Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authentication required';
    exit;
} else {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    // Check if credentials match
    if (isset($users[$username]) && $users[$username] === $password) {
        // Authentication successful
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
    } else {
        header('HTTP/1.0 401 Unauthorized');
        echo 'Invalid credentials';
        exit;
    }
}
?>
