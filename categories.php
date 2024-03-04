<!DOCTYPE html>
<html>
<head>
    <title>Book Mobile Service Type</title>
    <link rel="stylesheet" type="text/css" href="stylees.css">
</head>
<body>
<div class="content" style="text-align:center;">
    <h2>Book Service</h2>
    </div>
    <form action="create.php" method="POST">
        <label for="category">Category:</label>
        <select name="category" required>
            <option value="Select">Select</option>
        <option value="Apple">Apple</option>
        <option value="Oneplus">Oneplus</option>
</select>
        <?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'admin_dashboard';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
            }
            ?>
        </select><br><br>

        <label for="subcategory">Subcategory:</label>
        <select name="subcategory" required>
            <option value="Select">Select</option>
        <option value="iphone12">iphone 12</option>
        <option value="iphone13">iphone 13</option>
        <option value="iphone14">iphone 14</option>
        <option value="iphone15">iphone 15</option>
        <option value="Oneplus 8">Oneplus 8</option>
        <option value="Oneplus 9">Oneplus 9</option>
        <option value="Oneplus 10">Oneplus 10</option>
        <option value="Oneplus 11">Oneplus 11</option>

        <?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'admin_dashboard';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_POST['category_id']) {
    $category_id = $_POST['category_id'];

    $sql = "SELECT * FROM subcategories WHERE category_id = $category_id";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['subcategory_id'] . "'>" . $row['subcategory_name'] . "</option>";
    }
}
?>

        </select><br><br>

        <label for="service_type">Service Type:</label>
        <select name="service_type" required>
            <option value="Select">Select</option>
        <option value="Screen Replacement">Screen Replacement</option>
        <option value="Battery Replacement">Battery Replacement</option>
        <option value="Software Update">Software Update</option>
        </select><br><br>
        
        <input type="submit" value="Book Service Type">
    </form>

 
</body>
</html>
