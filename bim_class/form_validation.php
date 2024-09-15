<?php
/* Form Validation */
$name = $email = $url = $gender = $country = $bio = $error = $success = "";
$nameErr = $emailErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function clean_input($field_data)
    {
        $field_data = trim($field_data); //remove white spaces between beg. and end. of a input
        $field_data = stripslashes($field_data); // this function removes backslashes
        $field_data = strip_tags($field_data); // this function strips/clears html, xml and php tags
        $field_data = htmlentities($field_data); //converts special characters to entities or simple text

        return $field_data;
    }

    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $url = clean_input($_POST['url']);
    $gender = clean_input($_POST['gender']);
    $country = clean_input($_POST['country']);
    $bio = clean_input($_POST['bio']);


    if (
        isset($name, $email, $gender, $country, $bio) && !empty($name) && !empty($email) && !empty($gender)
        && !empty($country) &&  !empty($bio)
    ) {
        if (!preg_match("/^[a-z A-Z]+$/", $name)) {
            $nameErr = "Only letters are allowed";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter a Valid Email";
        }

        $success = "** Congratulations! **";
    } else {
        $error = "** All the fields are compuslory! **";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">
        Name: <input type="text" name="name">
        <span style="color: red">
            <?php
            if ($nameErr) {
                echo $nameErr;
            }
            ?>
        </span>
        <br><br>
        Email: <input type="email" name="email">
        <span style="color: red">
            <?php
            if ($emailErr) {
                echo $emailErr;
            }
            ?>
        </span>
        <br><br>
        URL: <input type="url" name="url"> <br><br>
        Male <input type="radio" name="gender" checked>
        Female <input type="radio" name="gender"> <br><br>
        <select name="country">
            <option value=""> -- Select Country --</option>
            <option value="nepal">Nepal</option>
            <option value="india">India</option>
            <option value="usa">America</option>
            <option value="germany">Germany</option>
            <option value="spain">Spain</option>
        </select> <br> <br>
        <textarea name="bio" id="" cols="30" rows="10" placeholder="Any Question ?"
            style="resize: none;"></textarea><br><br>
        <input type="submit" name="form_submit" value="Submit">
        <input type="reset" name="form_submit" value="Reset"><br><br>
        <span style="color: red">
            <?php
            if ($error) {
                echo $error;
            }

            ?>
        </span>
        <span style="color: blue">
            <?php
            if (isset($success) && empty($nameErr) && empty($emailErr)) {
                echo $success;
            }
            ?>
        </span>

    </form>
</body>

</html>