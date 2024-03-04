<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'admin_dashboard';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_id = $_POST["category"];
    $subcategory_id = $_POST["subcategory"];
    $service_type = $_POST["service_type"];
    

    $sql = "INSERT INTO mobile_service_types (service_type_name, subcategory_id,category_id ) VALUES ('$service_type', '$subcategory_id ','$category_id')";
// var_dump($sql);
// die;
    if (mysqli_query($conn, $sql)) {
        header("Location: display.php");
    } else {
        header("Location: categories.php");
    }

    mysqli_close($conn);
}



?>



