<?php

include 'connect.php';

// display the database records
$sql = "SELECT * FROM student_table";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style='width: 100%; text-align: center;'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Enrollment Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['enrollment_date'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}