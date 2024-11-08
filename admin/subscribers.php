
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wad_website";

// Create connection
$conn = mysqli_connect("localhost","root","","wad_website") or die("Couldn't connect") or die("Couldn't connect");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if email is set
    if (isset($_POST['email'])) {
        // Sanitize the email input
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        // Insert email into the database
        $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Thank you for subscribing!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<html>
<head>
  <title>Subscribe to our Newsletter</title>
  <link rel="stylesheet" type="text/css" href="subscriber.css">
  
</head>
<body>


<div class="container">
  <h2>Subscribe to our Newsletter</h2>
  <form action="subscribers.php" method="POST" onsubmit="redirectToIndex()">
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="submit" value="Subscribe">
    <br><br>
    <button onclick="redirectToIndex()" style="padding: 10px 20px; background-color: #4CAF50; color: white;width:100%; border: none; cursor: pointer;">Go to Index Page</button>


  </form>
</div>
  
<script>
  function redirectToIndex() {
    window.location.href = "index.php";
    return false; // Prevent the form from being submitted through regular HTML form submission
  }
</script>
   
<script>
  function redirectToIndex() {
    window.location.href = "index.php";
  }
</script>


 
</body>
</html>

