<html>
    <head>
    <link rel="stylesheet" href="style.css">

    </head>
</html>
<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM admins WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];

    } else {
        echo "Admin not found.";
        exit; 
    }
} else {
    echo "Invalid request.";
    exit; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_admin'])) {
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newpassword = $_POST['password'];



    $updateSql = "UPDATE admins SET username = '$newUsername', email = '$newEmail', password = '$newpassword' WHERE id = $id";

    if (mysqli_query($conn, $updateSql)) {
        header("Location: view_admins.php");
        exit; 
    } else {
        echo "Error updating admin: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
</head>
<body>
<div class="grid container">
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
    </div>
    
    <div class="content">
    <h2>Edit Admin</h2><br>
    </div>
    
</div><br>
    
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $email; ?>" required><br><br>
        <button type="submit" name="update_admin">Update Admin</button>
    </form>
</body>
</html>
