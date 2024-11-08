
<?php
session_start();
include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="about.css">

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head> 
<body>
    <section id="header">
        <a href="#"><img src="images/download.webp" height="50" width="200" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#product1">Products</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="about.php">About</a></li>
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

    <section id="hero">
        <h4>offer!!!</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/f6.png" alt="">
            <h6>Support</h6>
        </div>
        
         
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <div class="pro-container">
            <div class="pro">
               <img src="images/6896.jpg" alt=""> 
               <div class="des">
                    <span>Face cream</span>
                    <h5>Lotus fragrance</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
               </div>
               <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
            </div>
            <div class="pro">
                <img src="images/15JAZZYJHUMAR-02SwatchW_1e2f80c5-2712-45a6-91f6-cc6a8d923c5c_800x.webp" alt=""> 
                <div class="des">
                     <span>Lip stick </span>
                     <h5>Nude colour</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$50</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/eyeshadow.webp" alt=""> 
                <div class="des">
                     <span>eyeshadow</span>
                     <h5>Highliter</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$65</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/41SK0KGhMIL.jpg" alt=""> 
                <div class="des">
                     <span>Foundation</span>
                     <h5>Light colour</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$80</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/inglot-playinn-makeup-brush-202.jpg" alt=""> 
                <div class="des">
                     <span>Makeup brush</span>
                     <h5>Small Duo Fibre Face Brush</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$78</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/Lengthening-Mascara-600x600.webp" alt=""> 
                <div class="des">
                     <span>Maskara</span>
                     <h5>Black colour</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$30</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/3348901571432_1.webp" alt=""> 
                <div class="des">
                     <span>Perfume</span>
                     <h5>Rose fragrance</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$30</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/nivea-protect-care-48h-anti-perspirant-deodorant-roll-on-50ml.webp" alt=""> 
                <div class="des">
                     <span>Deodorant</span>
                     <h5>Nivea protect care</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$40</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
        </div>
        
    </section>
	

    <section id="banner" class="section-m1">
        <h4>Limited offers</h4>
        <h2>Up to <span>70% off</span> - All old stock products</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <div class="pro-container">
            <div class="pro">
               <img src="images/viana-Primer.webp" alt=""> 
               <div class="des">
                    <span>COLOR,FACE,PRIMER</span>
                    <h5>Viana Makeup Primer</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$42</h4>
               </div>
               <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
            </div>
            <div class="pro">
                <img src="images/viana-Highlighter.webp" alt=""> 
                <div class="des">
                     <span>BLUSHER,COLOR,FACE,HD,HIGHLIGHTER </span>
                     <h5>Shimmer Highliter Powder</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$50</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/vina-Blusher-300x300.webp" alt=""> 
                <div class="des">
                     <span>BLUSHER,COLOR,FACE</span>
                     <h5>Viana Blusher</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$65</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/Mattifying-Liquid-Foundation-300x300.webp" alt=""> 
                <div class="des">
                     <span>COLOR,FACE,FOUNDATION</span>
                     <h5>Viana Mattifying Liquid Foundation</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$80</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/stick foundation.webp" alt=""> 
                <div class="des">
                     <span>COLOR,CONCEALER,FACE,FOUNDATION</span>
                     <h5>Viana Stick Foundation Palette</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$78</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/dark circle eraser.webp" alt=""> 
                <div class="des">
                     <span>EYE,EYE CARE,FACE MOISTURIZER,NIGHT CARE</span>
                     <h5>Viana Youth Dark Circle Eraser</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$28</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/Matte-Touch-600x600.jpg"> 
                <div class="des">
                     <span>HIGHLY PIGMENTED,COMFORTABLE,MATTE FINISH LIPSTICK</span>
                     <h5>Viana Matte Touch Lipstick</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$22</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
             <div class="pro">
                <img src="images/cream.webp" alt=""> 
                <div class="des">
                     <span>ERASE DARK SPOTS,IMPROVE RADIANCE & GLOW</span>
                     <h5>Viana Fairness Night Cream</h5>
                     <div class="star">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </div>
                     <h4>$35</h4>
                </div>
                <a href="#"><ion-icon name="cart" class="cart"></ion-icon></a>
             </div>
        </div>
        
    </section>

    <section id="newsletter" class="section-p1" class="section-m1">
        <div class="newstext">
            <h4>Sign up for newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
      
	
	<br>
	<a href="subscribers.php"><input class="button1" type="submit" value="Subscribe"/></a>
	
 <!-- <script>
  function myFunction() {
    window.location.href="subscriber.php";
  }
  </script> -->
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