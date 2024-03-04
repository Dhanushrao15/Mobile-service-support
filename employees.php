<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Employee Dashboard</h1>
    </header>

    <section class="employee-list">
        <h2>Employee List</h2>
        <ul>
        <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
</table>
           
            <?php
            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'admin_dashboard';
            
            $conn = mysqli_connect($hostname, $username, $password, $database);
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
         
            $sql = "SELECT id, username,email, password,role  FROM admins";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    // echo "<li><strong>ID:</strong> " . $row["id"] . " - <strong>Name:</strong> " . $row["name"]  . "</li>";
                    echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                 echo "<td>";
                echo "<a href='edit_admin.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='delete_admin.php?id=" . $row['id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";  
                }

            } else {
                echo "0 results";
            }
            mysqli_close($conn);            $db = null;
            ?>
        </ul>
    </section>
</body>
</html>
