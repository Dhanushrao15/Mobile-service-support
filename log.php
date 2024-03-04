
<!DOCTYPE html>
<style>
   #login_img{
    margin-top:100px;
    border-radius:50%;
    border:1px solid orange;
    width:50%;
    box-shadow: 0px -25px 20px -20px rgba(0, 0, 0, 0.45), 0px 25px 20px -20px rgba(0, 0, 0, 0.45);
   }


</style>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="stylees.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>

    <div class="content" style="animation: scroll-left 20s linear infinite;">
    <!-- <h2>Login</h2> -->
    <marquee style=" padding-right: 100%;direction:right;"> <h2> In-time Services Technology</h2>  </marquee>
    </div>
   

    <div class="container" >
  <div class="row">
    <div class="col-6">
    <img src="logo.png" id="login_img">
    </div>
    <div class="col-6" style="margin-top:60px;">
    <div class="container">
    <form action="process_booking.php" method="POST">
    <?php

session_start();
if (isset($_SESSION['user_id']) && $_SESSION['role'] === 'user') {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'admin_dashboard';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT username FROM admins WHERE id = $user_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row["username"];
        echo "Welcome, $username";
    } else {
        echo "User not found.";
    }

    $conn->close();
} else {
    echo "Access denied.";
}
?><br><br>

      
           <label for="service_type">Service Type:</label>
           <select id="service_type" name="service_type" required>
               <option value="Repair">Repair</option>
               <option value="Maintenance">Maintenance</option>
               <option value="Installation">Installation</option>
           </select><br><br>
           <input type="submit" value="Book Service">
       </form>
      
   </div>
    </div>
   
  </div>
</div>
</body>
</html>




