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
    <marquee style=" padding-right: 100%;"> <h2> In-time Services Technology</h2>  </marquee>
    </div>
   

    <div class="container">
  <div class="row">
    <div class="col-6">
    <img src="logo.png" id="login_img">
    </div>
    <div class="col-6">
    <form action="loginprocess.php" method="POST">
       <h2>Login</h2><br>
            
       <label for="username">Username:</label>
       <input type="text" id="username" name="username"  required style="width:100%"> <br>
   
       <label for="password">Password:</label>
       <input type="password" id="password" name="password" required style="width:100%"><br>
    
       <label for="role">Role:</label>
       <select id="role" name="role">
           <option value="employee">Employee</option>
           <option value="user">User</option>
           <option value="admin">Admin</option>
       </select><br><br>
   
       <input type="submit" value="Login">
   
   
   </form>
    </div>
   
  </div>
</div>



</body>
</html>
