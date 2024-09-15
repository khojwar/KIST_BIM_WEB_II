<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
</head>
<body style="background-color: <?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : '#ffffff' ?>;">

<h2>Select Your Theme</h2>
<form method="post" action="">
    <label>
        <input type="radio" name="theme" value="light" 
        <?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] == '#ffffff') ? 'checked' : ''; ?>>
        Light Mode
    </label>
    <br>
    <label>
        <input type="radio" name="theme" value="dark"
        <?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] == '#000000') ? 'checked' : ''; ?>>
        Dark Mode
    </label>
    <br><br>
    <input type="submit" name="set_theme" value="Save Preference">
    <input type="submit" name="reset_theme" value="Reset Preference">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['set_theme'])) {
        $theme = $_POST['theme'];
        
        // NOTE: If you want to see this output, you might want to temporarily comment out the header() and exit() lines, or move the echo statement somewhere that won't be skipped by the redirection.
        // // Print the selected theme
        // echo "Selected theme: " . $theme . "<br>";
        
        if ($theme == 'light') {
            setcookie('theme', '#ffffff', time() + (86400 * 30), "/"); // 30 days
        } elseif ($theme == 'dark') {
            setcookie('theme', '#000000', time() + (86400 * 30), "/"); // 30 days
        }
        
        // Reload the page to apply the theme
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['reset_theme'])) {
        // Delete the theme cookie
        setcookie('theme', '', time() - 3600, "/");
        
        // Reload the page to reset the theme
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>
