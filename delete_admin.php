<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteSql = "DELETE FROM admins WHERE id = $id";

    if (mysqli_query($conn, $deleteSql)) {
        header("Location: view_admins.php");
        exit; 
    } else {
        echo "Error deleting admin: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
    exit; 
}

mysqli_close($conn);
?>
