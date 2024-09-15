
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get" class="mt-4">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your email" >
    <input type="number" name="mobile" placeholder="Enter your mobile number" >
    <input type="submit" value="Submit">
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

<?php
include 'connect.php';

$name = $email = $number = '';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $number = $_GET['mobile'];
}

if (empty($name) || empty($email) || empty($number)) {
    echo 'Please fill all the fields';
    exit();
}


// $sql = "INSERT INTO student_table (id, name, email, mobile) VALUES ('', '$name', '$email', '$number')";

// if (mysqli_query($conn, $sql)) {
//     echo 'New record created successfully';
// } else {
//     echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
// }


$sql = "select * from student_table";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {     // mysqli_num_rows() is a function that returns the number of rows in a result set
    // echo mysqli_num_rows($result) . ' data found in table<br>';
    while ($row = mysqli_fetch_assoc($result)) {        // mysqli_fetch_assoc() is a function that fetches a result row as an associative array
        // print_r($row);
        // echo '<br>';
        // echo 'ID: ' . $row['id'] . ' Name: ' . $row['name'] . ' Email: ' . $row['email'] . ' Mobile: ' . $row['mobile'] . '<br>';
?>
    <tr>
    
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
    </tr>

<?php
    }
} else {
    echo 'No data found in table';
}

?>

</tbody>
</table>