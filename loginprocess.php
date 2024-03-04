<?php
session_start();
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'admin_dashboard'; 


$pdo = new mysqli($host, $username, $password, $database);


if ($pdo->connect_error) {
    die("Connection failed: " . $pdo->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    
    $query = "SELECT * FROM admins WHERE username = ? AND password = ? AND role = ?";
    $stmt = $pdo->prepare($query);

    
    $stmt->bind_param("sss", $username, $password, $role);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

   
    $user = $result->fetch_assoc();

    if ($user) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["role"] = $user["role"];

        if ($role === "employee") {
            header("Location:emp.php");
            exit();
        } elseif ($role === "user") {
            header("Location: log.php");
            exit();
        }
    } elseif ($role === "admin") {
        header("Location: view_admins.php");
        exit();
    }
    } else {
        echo "<script>alert('Please try again!'); </script>";
    }
        header("Location: login.php?error=1");
        exit();
    

?>
