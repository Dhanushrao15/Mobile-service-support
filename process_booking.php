<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'admin_dashboard';


$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function assignRandomEmployee() {
    global $conn;
    $sql = "SELECT id FROM employee ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row['id'];
    } else {
        return null; 
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $serviceType = $_POST['service_type'];
    $assignedEmployeeId = assignRandomEmployee();

    if ($assignedEmployeeId !== null) {
        $sql = "INSERT INTO service_bookings ( service_type, assigned_employee_id) VALUES ( ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $serviceType, $assignedEmployeeId);

        if ($stmt->execute()) {
            
            header('Location: service_booking.php');
        } else {
            echo "Error creating service booking.";
        }
    } else {
        echo "No employees available for assignment.";
    }
}


$conn->close();
?>
