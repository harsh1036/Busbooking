<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body{
                width:100%;
                height: 100vh;
                background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.9)),
                url(bg2.jpg);
                background-position: center;
                background-size: cover;
            }
            div{
                color: #fff;
            }
    </style>
</head>
<body>
    <section>
        <nav>
            <div class="logo2">
                <img src="../assets/images/logo2.jpg" alt="logo">
            </div> 
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../pages/aboutus.html">About Us</a></li>
                <li><a href="../pages/booking.php">Booking</a></li>
            <li><a href="../pages/login.html">Login</a></li>
            <li><a href="../pages/signup.html">Signup</a></li>
        </ul>
    </nav>
    <div class="container mt-5">
        <br><br><br>
        <h1 class="text-center">Bus Ticket Booking System</h1>
        <center>
        <form id="bookingForm" class="mt-4" method="POST" action="search_buses.php" >
            <div class="mb-3">
                <label for="origin" class="form-label">From:</label>
                <input type="text" id="origin" name="origin" required>
            </div>
            <div class="mb-3">
                <label for="destination" class="form-label">To:</label>
                <input type="text"  id="destination" name="destination" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" id="departure_date" name="departure_date" required>
            </div>
            
            
            <button name="submit" type="submit">Search</button>
        </form>
        </center>
        <div id="result" class="mt-4"></div>
    </div>
    
    </section></body></html>