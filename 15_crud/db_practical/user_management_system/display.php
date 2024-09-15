<?php

require 'db.php';

$sql = "SELECT * FROM users";

$result = $con->query($sql);
?>

<table style="border: 1px solid;">
  <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>Action</th>
  </tr>
  <tr>
    <?php
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "    
    <td>{$row['firstname']}</td>
    <td>{$row['lastname']}</td>
    <td>{$row['email']}</td>

  </tr>";
    }
}


  ?>
</table>






