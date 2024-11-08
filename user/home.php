<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home page</title>
	<link rel="stylesheet" href="home.css">
</head>

<body onLoad="showSlides()">
<header class="header">
    <a href="#"><img src="images/download.webp" height="50" width="200" alt=""></a>
      
</header>

	<script>
		let slideIndex = 0;  
		showSlides(); 
		
		function showSlides() 
		{   
		 let i;  
		 let slides = document.getElementsByClassName("mySlides"); 
		 for (i = 0; i < slides.length; i++)   
		 { 
		 slides[i].style.display = "none"; 
		 }   
		 slideIndex++;  
		 if (slideIndex > slides.length)  
		 {slideIndex = 1} 
		 slides[slideIndex-1].style.display = "block";  
		 setTimeout(showSlides, 2000); //Change image every 2 seconds 
		}
	</script>
	<div class="slider-frame">
	<div class="slideshow-container">
	<div class="mySlides fade">
		<img src="images/landscape-1453744524-hbz-beauty-school-brush-cleaner.jpg" width="100%">
		
	</div>
	</div>
	
	<div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/landscape-1488986634-purple-lipstick.jpg" width="100%">
            
        </div>
        </div>
	
		<div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/landscape-1478538890-hbz-madam-president-opi-nail-polish-index.jpg" width="100%" >
            
        </div>
        </div>
	</div>
	<br>
	
	<div class="session">
		<h2>Click here to login</h2>
	</div>
	
	<br>
	<input class="button" type="submit" value="click here" onclick="myFunction()"/>
	
	  <!-- <form action="script.php" method="post">
        <input type="submit" value="Submit">
    </form>-->
	
 <script>
  function myFunction() {
    window.location.href="login.php";
  }
 </script>
       

        
        
	
	
</body>
</html>
