<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mobile Service Support CRUD App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
           background-color:#333;
            color: white;
            padding: 5px;
            text-align: center;
        }

        nav {
            background-color: #444;
            text-align:left;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            margin: 0 10px;
        }

        nav a:hover {
            background-color: #555;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 30px;
            background-color:#1111;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* float:left; */
            margin-left:100px;
            margin-top:100px;
        }

        h1 {
            margin-top: 0;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .img{
         
            float:right;
           margin-top:100px;
           margin-right:100px;
           
        }
        .ul{
            float:left;
        }
footer {
    margin: 0;
    padding: 20px 0;
   
    color:black;
}

.parallax-container {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  background-attachment: fixed;

  background-image: url(back.png);
  background-position: center;
  background-size: 1100px;
  color: var(--color);
  row-gap: 2rem;   

  text-align: center;
}

.buffer {
  width: 100%;
  min-height: 60vh;
  background-color: var(--color);
}

.parallax-container2 {
  flex-direction: row;
  flex-wrap: wrap;

  padding: 6rem 0;
  background-image: url(back.png);
  gap: 1.6em;
}


</style>
<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>



    <header>
    <img src="logo.png" style="float:left;height:60px;width:60px;">
        <h1>INTIME SERVICES</h1>
    </header>
   
    <nav>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <!-- <a href="booking.php">Products</a>
        <a href="categories.php">Services</a>
        <a href="products.php">Support</a> -->
        <a href="index.php">About Us</a>
        <a href="index.php">Contact</a>
        <a href="login.php">Login</a>
    </nav>
    <section class="parallax-container">
    <div class="container">
        <h2>PREMIUM REPAIR SERVICES FOR IPHONE</h2>
        <p>It's a no-brainer that iPhones are pricey gadgets. The most haunting thing for an iPhone owner would be when their phone is damaged. Therefore, it becomes crucial for iPhone owners to get their damaged phones repaired by trusted iPhone repair service providers.

</p>

       </div>
    
       <!-- <img src="apple.jpeg" style="height:200px;width:400px;"> -->
       
    <!-- <div class="img">
    <img src="no.png" style="height:300px;width:300px;">
    </div> -->
    <section class="parallax-container parallax-container2">
    <div class="container">
        <h2>WHY INTIME</h2>
<p>Intime is India's most trusted gadget repair portal, which lets you place repair orders for your faulty smartphones and tablets. Be it a broken screen, faulty charging port, blurry camera, earpiece or loudspeaker issue, or anything else, we fix everything.
<br><br>We provide free pickup and drop service for almost 16,000 pin codes in India. Your device will be picked from your home/office, repaired to perfection and will be delivered back to you within 2-5 days depending on the location.

<br><br>All our repairs except some like liquid damage and diagnostic services come with No Fix No Fee policy, which means if we are not able to fix the problem in your device due to some reason, you would not be charged anything at all.<br><br> 


We also offer a Standby Mobile Facility so that you are never disconnected with your loved ones. You may request for a standby mobile at a nominal fee of 399 INR. In this case, your device will be picked for repair only after you receive a standby mobile.

Go ahead, place an order and let us repair your gadget to perfection.</p>
       </div>
           

    <div class="img">
    <img src="comp.png" style="height:400px;width:400px;">
    </div>
    <section id="about">
        <h2>About Us</h2>
        <p>We are a leading provider of mobile device Services.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: contact@intimeservices.com<br>
        Phone: +91 9353093217</p>
    </section><br>

    <footer>
        <p>&copy; 2023 Mobile Product Service</p>
    </footer>



</body>
</html>
