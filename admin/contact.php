
<?php

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'wad_website';

// Create a database connection
$conn = mysqli_connect("localhost","root","","wad_website");

// Check if the connection was successful
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize and validate the form data here

    // Construct the SQL INSERT query
    $insert_query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
  
    // Execute the INSERT query
    if (mysqli_query($conn, $insert_query)) {
        // Insert successful, do something (e.g., redirect to a thank you page)
        header("Location: contact.php");
        exit;
    } else {
        // Insert failed, handle the error (e.g., display an error message)
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="contact.css">

</head>
<body>



    <section id="header">
        <a href="#"><img src="images/download.webp" height="50" width="200" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="index.php#product1">Products</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="Admin-Cart/products.php" id="cart"><ion-icon name="cart"></ion-icon></a></li>
                <a href="#" id="close">
                    <!--
                    <i class="far fa-times"></i>
                    -->
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </a>
            </ul>
        </div>
        <div id="mobile">
            
            <a href="cart.html" id="cart"><ion-icon class="icon" name="cart"></ion-icon></a>
            <i id="bar" class="fas fa-outdent"></i>
            
        </div>
    </section>

    <section class="contract">
    <div class="content">
        <br>
        <h2>Contact Us</h2>
            <p>Contact our customer support team for assistance. We appreciate your feedback and aim to enhance your beauty journey. Reach out today to share your questions, comments, or suggestions.!</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"> <ion-icon name="location"></ion-icon></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>No:01,<br>St road,<br>Colombo,<br>199852</p>
                        </div>
                    </div>
                <div class="box">
                    <div class="icon"><ion-icon name="call"></ion-icon></div>
                        <div class="text">
                            
                            <h3>Phone</h3>
                            <p>0740672710</p>
                        </div>
                    </div>
                <div class="box">
                    <div class="icon"><ion-icon name="mail"></ion-icon></div>
                        <div class="text">
                            
                            <h3>Email</h3>
                            <p>buwani@gmail.com</p>
                        </div>
                </div>
            </div>
        
        
        
            <div class="contactForm">
    <form method="POST" action="">
        <h2>Send Message</h2>
        <div class="inputBox">
            <input type="text" name="name" required>
            <span>Full Name</span>
        </div>
        
        <div class="inputBox">
            <input type="email" name="email" required>
            <span>Email</span>
        </div>
        
        <div class="inputBox">
            <textarea name="message" required></textarea>
            <span>Type your Message...</span>
        </div>
        <div class="inputBox">
            <input type="submit" id="btn" name="btn" value="Send">
        </div>
    </form>
</div>
                    
                    </div>
    </section>
<br><br><br>
    <footer class="section-p1">
        <div class="col">
            <img  class="logo" src="images/download.webp" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong>No 01/St road, Colombo</p>
            <p><strong>Phone: </strong>+94740672710</p>
            <p><strong>Hours: </strong>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order Conditions</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="images/app.jpg" alt="">
                <img src="images/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="images/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>&copy; 2023, Beauty Bliss- Cosmetic Website </p>
        </div>
    </footer>

    <script src="script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>