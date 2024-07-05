<!-- Form handling in PHP involves capturing data sent through forms, processing it, and providing appropriate feedback. -->

<!DOCTYPE html>
<html>
<body>

<h2>PHP Form Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect and sanitize input data
  $name = sanitize_input($_POST["name"]);
  $email = sanitize_input($_POST["email"]);

  // Validate input
  if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
  } else {
    echo "Invalid input!";
  }
}

function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


