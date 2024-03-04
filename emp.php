<?php
session_start();


if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "employee") {
  
    header("Location: login.php");
    exit();
}


$mysqli = new mysqli("localhost", "root", "", "admin_dashboard");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$user_id=$_SESSION['user_id'];

$sql = "SELECT sb.assigned_employee_id, sb.service_type, c.customer_name
        FROM service_bookings sb
        JOIN customer c ON sb.customer_name = c.customer_name
        WHERE sb.assigned_employee_id = $user_id"; 



$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
    {

        $employeeData = [];

        while ($row = $result->fetch_assoc()) {
            $employeeData[] = $row;
        }
       
        // while($row = $result->fetch_assoc())
        // {
        //     echo  $row["assigned_employee_id"];
        //     echo  $row["assigned_employee_id"];

        // }
    } 
    else {
        echo "0 results";
    }

  


?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>

    <link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
      
<div class="sidebar">
    <div class="logo">
        <a href="index.php">
            <img src="logo.png" alt="Company Logo" style="height:150px;">
        </a>
    </div><br><br><br>
        <ul>
            
            <li><a href="emp.php" style="font-size=20px;">Employees</a></li>
            <!-- <li><a href="users.php">Users</a></li> -->
            <li><a href="services.php">Services</a></li>
            <!-- <li><a href="login.php">Dashboard</a></li> -->

        </ul>
    </div>
    <div class="content" style="text-align:center;">
    <h2>Employee Details</h2>
    </div>
    <div class="container">
        <!-- <h1 class="welcome-message">Welcome, Employee <?php echo $_SESSION["user_id"]; ?></h1> -->
        
       
        <?php
        
        foreach ($employeeData as $employee): ?>
            <div sclass="employee-info">
                <p class="info-label">Employee ID:</p>
                <p><?php echo $employee["assigned_employee_id"]; ?></p><br>
                <p class="info-label">Service Type:</p>
                <p><?php echo $employee["service_type"]; ?></p><br>
                <p class="info-label">Customer Name:</p>
                <p><?php echo $employee["customer_name"]; ?></p><br>
            </div>
        <?php endforeach; ?>

      
    </div>
</body>
</html>
