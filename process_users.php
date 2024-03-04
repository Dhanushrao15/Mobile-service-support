<?php
include('db.php');

if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $role=$_POST['role'];
   

    $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
var_dump($sql);
die;
    if (mysqli_query($conn, $sql)) {
        header("Location: user_dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
