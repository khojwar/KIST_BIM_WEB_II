<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get" class="mt-4">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your email" >
    <input type="number" name="mobile" placeholder="Enter your mobile number" >
    <input type="submit" value="Submit">
</form>


<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bim';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    echo "Not connected!!";
};

echo "connected";


$name = $_GET['name'];

$sql = "INSERT INTO student (id, name, email, mobile) VALUES ('', 'Diwas', 'diwas@gmail.com', '9877665544')";

if (mysqli_query($conn, $sql)) {  
    echo "inserted successfully";
}