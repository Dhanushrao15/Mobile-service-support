<?php
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'admin_dashboard';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: admin_dashboard.php'); 
} else {
    echo "Invalid username or password. <a href='login.php'>Try again</a>";
}

mysqli_close($conn);
?>
