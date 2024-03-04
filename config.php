<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'admin_dashboard';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

$host = 'localhost';
$dbname = 'admins';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// list_categories.php: List categories
require_once 'db.php';

$query = "SELECT * FROM admins";
$stmt = $pdo->query($query);

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td><a href='edit_category.php?id={$row['id']}'>Edit</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No categories found</td></tr>";
}
?>
