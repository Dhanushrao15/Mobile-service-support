<?php
include('db.php');

if (isset($_POST['add_admin'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $role=$_POST['role'];
   

    $sql = "INSERT INTO admins (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_admins.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
