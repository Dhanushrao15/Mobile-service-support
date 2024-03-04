<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Admins</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="grid container">
    <div class="sidebar">
    <div class="logo">
        <a href="index.php">
            <img src="logo.png" alt="Company Logo" style="height:150px;">
        </a>
    </div><br><br><br>
        <ul>
            
            <li><a href="employees.php">Employees</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="index1.php">Dashboard</a></li>

        </ul>
    </div>
    <div class="content">
    <h2>Admins List</h2>
    </div>
</div>
   <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT id, username, email, password, role FROM admins";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
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
            echo "No admins found.";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
