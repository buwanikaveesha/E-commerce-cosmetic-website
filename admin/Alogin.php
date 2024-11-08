<!doctype html>
<?php
	session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<div class="container">
		<div class=" box form-box">

		<?php

include("config.php");

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $result = mysqli_query($con, "SELECT * FROM admin WHERE Username='$username' AND Password='$password'") or die("Select Error");
  $row = mysqli_fetch_assoc($result);

  if (is_array($row) && !empty($row)) {
    $_SESSION['valid'] = $row['Email'];
    $_SESSION['username'] = $row['Username'];
    $_SESSION['id'] = $row['Id'];

    header("Location:http://localhost/WAD_website/admin/index.php"); // Redirect to the desired page after successful login
    exit(); // Terminate the script after the redirection
  } else {
    echo "<div class='message'>
          <p>Wrong Username or Password</p>
          </div> <br>";
    echo "<a href='Alogin.php'><button class='btn'>Go Back</button></a>";
  }
} // Close the if(isset($_POST['submit'])) block

?>
			<header>Admin Login</header>
			<form action="" method="post">
				<div class="field input">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" required>
				</div>
				
				<div class="field input">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" required>
				</div>
				
				<div class="field">
        
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
				
				<div class="links">
                    Create another Admin account <a href="Aregister.php">Register</a>
                </div>
			</form>
		</div>
		<? fclose() ?>
	</div>
</body>
</html>