<?php
// Database connection parameters
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'admin_dashboard';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve customer information for bookings after a certain date
 // Replace this with your desired date
$sql = "SELECT customer.* 
        FROM customer
        JOIN service_bookings ON customer.customer_name = service_bookings.customer_name";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Customer ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No customers found who booked after $booking_date";
}

$conn->close();
?>
