<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Booking</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 100px;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
   
}

h1 {
    text-align: center;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

   </style>
     <header>
    <h1>Service Booking</h1>
    </header>
    
</head>

<body>
   
    <div class="container">
       
        <form action="process_booking.php" method="POST">
            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" required><br>
            <label for="service_type">Service Type:</label>
            <select id="service_type" name="service_type" required>
                <option value="Repair">Repair</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Installation">Installation</option>
            </select><br>
            <input type="submit" value="Book Service">
        </form>
       
    </div>
</body>
</html>
