
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (!empty($name) && !empty($email)) {
        $filename = 'form_data.txt';
        $file = fopen($filename, 'a'); // Open the file for appending

        if ($file) {
            $data = "Name: " . htmlspecialchars($name) . " | Email: " . htmlspecialchars($email) . "\n";
            fwrite($file, $data);
            fclose($file);
            echo "Data written to file successfully.";
        } else {
            echo "Error opening the file.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
