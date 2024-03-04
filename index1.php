<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Application</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div class="sidebar">
    <div class="logo">
        <a href="index.php">
            <img src="logo.png" alt="Company Logo" style="height:150px;">
        </a>
    </div><br><br><br>
        <ul>
            
            <li><a href="employees.php" style="font-size=20px;">Employees</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="index.php">Dashboard</a></li>

        </ul>
    </div>
    <div class="content" style="text-align:center;">
    <h2>Admins Dashboard</h2>
    </div>
    
    <section class="dashboard">
    


        <div class="widget">
            <img src="icon1.png" alt="Company Logo" style="height:150px;">
           
            <?php
                $db = new mysqli('localhost', 'root', '', 'admin_dashboard');
                if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                }

                $serviceCountQuery = "SELECT COUNT(*) as service_count FROM services";
                $serviceCountResult = $db->query($serviceCountQuery);
                $serviceCountRow = $serviceCountResult->fetch_assoc();
                echo "<p>Total Service Types: " . $serviceCountRow['service_count'] . "</p>";

                $db->close();
                ?>        </div><br><br>
        <div class="widget">
            <img src="icon2.png" alt="Company Logo" style="height:150px;">
       
            <?php
                $db = new mysqli('localhost', 'root', '', 'admin_dashboard');
                if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                }

                $employeeCountQuery = "SELECT COUNT(*) as employee_count FROM employee";
                $employeeCountResult = $db->query($employeeCountQuery);
                $employeeCountRow = $employeeCountResult->fetch_assoc();
                echo "<p>Total Employees: " . $employeeCountRow['employee_count'] . "</p>";

                $db->close();
                ?>        </div>
               
    </section>
</body>
</html>
