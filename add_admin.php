<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
    <h2>Add admin</h2><br>
    </div>
</div><br>
    <form method="POST" action="process_admin.php">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <label>Role:</label>
        <select name="role" id="role">
            <option value="employee">Employee</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <button type="submit" name="add_admin">Add Admin</button>
    
    </form>
</div>
</body>
</html>
