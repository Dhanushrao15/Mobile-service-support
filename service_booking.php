<html>
    <head>
    <link rel="stylesheet" type="text/css" href="stylees.css">
<style>
    /* #sidebar_service_booking{
float:left;
margin-top:50px;
/* padding:10px; */

    
    img{
float:left;
width:10%;
margin-top:70px;
margin-left:70px;
    }
</style>
    </head>
<body>
<div class="content" style="background-color:white;">
    <h2>Service List</h2>
    </div>
    <div id="sidebar_service_booking">
       <img src="logo.png">
    </div>
<table>
        <tr>
            <th>Service Type</th>
            <th>Assigned Employee Id</th>
        </tr>
<?php
session_start();

if (isset($_SESSION['user_id']) && $_SESSION['role'] === 'user') {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'admin_dashboard';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM service_bookings WHERE customer_id = $user_id";

    $result = $conn->query($sql);
// echo ($result->num_rows);
// die;

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo"<td>". "Service Type:". $row["service_type"] ."</td>";
            echo"<td>" ."Assigned Employee Id:". $row["assigned_employee_id"] ."</td>";
            echo "</tr>";
           echo "<br>";
            
        }
        // $row = $result->fetch_assoc();
        // $service_type = $row["service_type"];
        // $assigned_employee_id= $row["assigned_employee_id"];
        // echo "Service Type: $service_type<br>";
        // echo "Assigned Employee Id: $assigned_employee_id";
    } else {
        echo "No bookings found for this user.";
    }

    $conn->close();
} else {
    echo "Access denied.";
}
?>
</body>
</html>
