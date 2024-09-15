<?php
// $id = $firstname = $lastname = $email = '';
include 'db.php';

$sql = "SELECT id, firstname, lastname, email FROM users";

$result = $conn->query($sql);

?>

<body>
    <div><a href="create.php" style="
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    background-color: #007bff;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    border: 1px solid #007bff;
    transition: background-color 0.3s ease;
">
    Create User
</a></div>

    
    <h1>User list</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row["firstname"]}</td>
                            <td>{$row["lastname"]}</td>
                            <td>{$row["email"]}</td>
                            <td>
                                <a href='update.php?id={$row['id']}'>Update</a>
                                <a href='delete.php?id={$row['id']}'>Delete</a>
                        </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>