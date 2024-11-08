<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>
	<!-- <link rel="stylesheet" href="about.css"> -->
	<link rel="stylesheet" href="style.css">
	
</head>
<style>
	@charset "utf-8";
/* CSS Document */
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Spartan", sans-serif;
}

html {
  scroll-behavior: smooth;
} 

.container1
{
	width: 80%;
	display: black;
	margin: auto;
	padding-top: 150px;
}

.content-section1
{
	float: left;
	width: 55%;
}

.image-section1
{
	float: right;
	width: 40%;
}

.image-section1 .img1
{
	width: 100%;
	height: auto;
}

.title1
{
	text-transform: uppercase;
	font-size: 24px;
}

.content-section1 .content1 h3
{
	margin-top: 20px;
	color: #5d5d5d;
	font-size: 21px;
}

.content-section1 .content1 p 
{
	margin-top: 10px;
	font-family: sans-serif;
	font-size: 18px;
	line-height: 1.5;
}

.content-section1 .social1
{
	margin: 40px 40px;
}

.content-section1 .social1 ion-icon
{
	color: #a52a2a;
	font-size: 30px;
	padding: 0px 10px;
}

.content-section1 .social1 ion-icon:hover
{
	color: #3d3d3d;
}

@media screen and (max-width: 768px)
{
	.container1
{
	width: 80%;	
	display: black;
	margin: auto;
	padding-top: 50px;
}
	.content-section1
{
	float: none;
	width: auto;
	display: block;
	margin: auto;
}
	.image-section1 .img1
{
	
	width: 100%;
	height: auto;
	display: block;
	margin: 0 auto;
}
	.image-section1
{
	float: none;
	width: 100%;
	display: block;
	margin: 0 auto;
}
	.content-section1 .title1
{
	text-align: center;
	font-size: 18px;
		
}
}

</style>

<body>
	<section id="header">
        <a href="#"><img src="images/download.webp" height="50" width="200" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="index.php#product1">Products</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="user-Cart/products.php" id="cart"><ion-icon name="cart"></ion-icon></a></li>
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
<section style="margin-bottom: 30%;">
	<div class="container1">
		<div class="title1">
				<h1>About Us</h1>
					</div>
		<div class="image-section1">
			<img class="img1" src="images/element5-digital-ceWgSMd8rvQ-unsplash.jpg" alt="img1">
		</div>
		<div class="content-section1">
						<div class="content1">
						<h3>Welcome to our cosmetic website.</h3>
							<p>We are your one-stop destination for all things beauty, offering an extensive range of high-quality cosmetics that cater to every skin type, complexion, and style. Our carefully curated collection showcases the latest trends, timeless classics, and must-have essentials, ensuring that you can effortlessly enhance your natural beauty and express your unique personality. From luxurious skincare products that nourish and rejuvenate, to vibrant and pigmented makeup that empowers you to unleash your creativity, we have everything you need to elevate your beauty routine. We pride ourselves on delivering exceptional customer service and a seamless online shopping experience, making it easy for you to discover new favorites and feel confident in your purchase.</p>
						</div>
							<div class="social1">
								<span class="icon">
                           			<ion-icon name="logo-facebook"></ion-icon>
                       			</span>
								
								<span class="icon">
                           			<ion-icon name="logo-twitter"></ion-icon>
                       			</span>
								
								<span class="icon">
                           			<ion-icon name="logo-instagram"></ion-icon>
                       			</span>
								
							</div>	
		</div>
	</div>
</section>
	
		
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
