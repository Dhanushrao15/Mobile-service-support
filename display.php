<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'admin_dashboard';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT service_type_name, subcategory_id, category_id FROM mobile_service_types";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Services</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- <div class="grid container">
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
    </div> -->
<div class="content">
    <h2>Service Report</h2>
    </div>
    <table>
        <tr>
            <th>Service Type </th>
            <th>Subcategory</th>
            <th>Category</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['service_type_name']; ?></td>
                <td><?php echo $row['subcategory_id']; ?></td>
                <td><?php echo $row['category_id']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php
mysqli_close($conn);
?>
