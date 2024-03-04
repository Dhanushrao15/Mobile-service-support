<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Mobile Product Service</title>
   <style>
    body, h1, h2, h3, p, ul {
    margin: 0;
    padding: 5px;
    text-align: center;
    
   
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem;
}



.hero {
    text-align: center;
    padding: 2rem;
    background-image: url('hero-bg.jpg');
    background-size: cover;
    color:#333;
   
}

.product {
    border: 1px solid #ccc;
    padding: 1rem;
    margin: 1rem;
    text-align: center;

   
}

.product img {
    max-width: 100%;
    
}

.price {
    font-weight: bold;
    color: #333;
}

footer {
   
    color: black;
    text-align: center;
    padding: 1rem;
}

.content {
    text-align:center; 
    padding: 20px;
    background-color: #333;
    color:white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}



body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
   
    justify-content: space-between;
}

.card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    flex-basis: calc(33.33% - 20px);
    
}

.card h2 {
    font-size: 24px;
    margin: 0;
}

.card p {
    font-size: 16px;
    color: #666;
}

.card img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
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
  a:link, a:visited {
  background-color: grey;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: black;
}
   </style>

</head>
<body>
   

    <div class="content">
    <a href="login.php" target="_blank" style="float:right">Book Service</a>
    <h2>Mobile Product Service</h2><br>
   
    </div>
</div>
   <br> 
    
   <section class="parallax-container">
    <section id="home">
        <div class="hero">
            <h2>Welcome to our mobile product service</h2>
            <p>Discover the latest and greatest mobile device Services.</p>
            
        </div>
    </section>
    <section class="parallax-container parallax-container2">
    <section id="products">
        <h2>Our Services</h2><br>
        <h2>Apple</h2>
        <div class="container">
        <div class="card">
            <img src="iphone12.jpeg" alt="iPhone Service 1">
            <h3>Repair</h3>
            <p>We offer expert screen replacement services for your Apple iPhone.</p>
            <p>Price: 999</p>
           
        </div>

        <div class="card">
            <img src="iphone12.jpeg" alt="iPhone Service 2">
            <h3>Maintainence</h3>
            <p>Get a new battery for your iPhone and enjoy extended battery life.</p>
            <p>Price: 599</p>
           
        </div>
        
        <div class="card">
            <img src="iphone12.jpeg" alt="iPhone Service 3">
            <h3>Installation</h3>
            <p>Stay up to date with the latest iOS software updates and features.</p>
            <p>Price: 399</p>
         
        </div>
    </div>
    <section class="parallax-container parallax-container3">
    <h2>Oneplus</h2>
        <div class="container">
        <div class="card">
            <img src="oneplus.jpeg" alt="iPhone Service 1">
            <h3>Repair</h3>
            <p>We offer expert screen replacement services for your Apple iPhone.</p>
            <p>Price: 799</p>
           
        </div>
        
        <div class="card">
            <img src="oneplus.jpeg" alt="iPhone Service 2">
            <h3>Maintainence</h3>
            <p>Get a new battery for your iPhone and enjoy extended battery life.</p>
            <p>Price: 499</p>
           
        </div>

        <div class="card">
            <img src="oneplus.jpeg" alt="iPhone Service 3">
            <h3>Installation</h2>
            <p>Stay up to date with the latest iOS software updates and features.</p>
            <p>Price: 299</p>
          
        </div>
    </div>
    </section>
   
    <section id="about">
        <h2>About Us</h2>
        <p>We are a leading provider of mobile device Services.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: contact@intimeservices.com</p>
        <p>Phone: +91 9353093217</p>
    </section>

    <footer>
        <p>&copy; 2023 Mobile Product Service</p>
    </footer>
</body>
</html>
