<?php
session_start();

if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "user") {
    header("Location: login.php"); 
    exit();
}

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'admin_dashboard'; 


$pdo = new mysqli($host, $username, $password, $database);


if ($pdo->connect_error) {
    die("Connection failed: " . $pdo->connect_error);
}





?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
            <li><a href="index.php">Dashboard</a></li>

        </ul>
    </div>
    <div class="content">
    <h2>Employee List</h2><br>
    </div>
</div>
   <br> 
   
    <main>
        
        
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
           
            $query = "SELECT * FROM admins WHERE id = ?";
$stmt = $pdo->prepare($query);

if ($stmt) {
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();

    $employee_result = $stmt->get_result();

    if ($employee_result) {
        while ($row = $employee_result->fetch_assoc()) {
            
            echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td><a href='view_admins.php?id={$row['id']}'>View</a></td>";
                echo "</tr>";
        }
    } else {
        echo "Error: Unable to fetch employee data.";
    }
} else {
    echo "Error: Database query error.";
}

            ?>
        </table>
 
        </main>
        </body>
        </html>