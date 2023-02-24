

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/home.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
 <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/home.css" text="text/css">



</head>
<body>


<div class="navbar">
  <a href="<?php echo ROOT ?>/Customer/Home" class="active">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Mv" class="">Place an Order</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/xx.png" width="40px" height="40px"></a> 

</div>



  
  <div class="main">
 

<div class="img">
<img src="<?php echo ROOT ?>/image/pet3.jpg" class="mainimg">
   
   	<h1 class="ml122">PETRO</h1><br>
	<h1 class="ml12">A new production</h1>


	
	</div>
    <br><br>





    <h1 class="available"> Fuel Availability </h1>
<br><br>

   
    <br>
    <div id="pricing-table">
    <div class="plan plan">
        <div class="header">92-Octane</div>
        <div class="price">Rs.400</div>  
        <div class="monthly">per liter</div>      
        <ul>
         
            <li><b>Available</b> 7000L</li>
      
        </ul>
        <br><br>
        <a class="signup" href="<?php echo ROOT ?>/Customer/Mv">Place Order</a>         
    </div >
    <div class="plan plan">
        <div class="header">95-Octane</div>
        <div class="price">Rs.420</div>
        <div class="monthly">per liter</div>  
        <ul>
          
            <li><b>Available</b> 10000L</li>
        
        </ul>
        <br><br>
        <a class="signup" href="<?php echo ROOT ?>/Customer/Mv">Place Order</a>            
    </div>
    <div class="plan plan">
        <div class="header">Auto-Diesel</div>
        <div class="price">Rs.400</div>
        <div class="monthly">per liter</div>
        <ul>
           
            <li><b>Available</b> 11000</li>
     
        </ul><br><br>
        <a class="signup" href="<?php echo ROOT ?>/Customer/Mv">Place Order</a>        
    </div>
    <div class="plan plan">
        <div class="header">Super-Diesel</div>
        <div class="price">Rs 450</div>
        <div class="monthly">per liter</div>
        <ul>
        
            <li><b>Available</b> 5000L</li>
      
        </ul>
        <br><br>
        <a class="signup" href="<?php echo ROOT ?>/Customer/Mv">Place order</a>        
    </div>  
</div>





<br><br><br>




<div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1>PETRO Fuel.</h1>
                    <p>This is how the image looks like before applying a duotone effect.</p>
                </div>

                <img src="<?php echo ROOT ?>/image/f11.jpg" alt="Original" width="200px">
            </div>
        </div>

        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1>PETRO Store</h1>
                    <p>This is how the image looks like after applying a duotone effect.</p>
                </div>

                <img src="<?php echo ROOT ?>/image/eo2.jpeg" alt="Duotone">
            </div>
        </div>

        <div class="handle"></div>
    </div>




	<br><br>




    

</div>



</div>



<div class="container">





  

<div class="products">

   <h1 class="heading">Latest Products</h1>

   <div class="box-container">
    
   <?php
   if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
				?>

   <form method="post" class="box" action="">
         <img src="<?php echo ROOT ?>/image/<?php echo $row['image']; ?>" alt="">
         <div class="name"><?php echo $row['name']; ?></div>
         <div class="price">Rs.<?php echo $row['price']; ?></div>
         
         <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
    
      </form>
      <?php
      };
   };
   ?>

 
      <a href="#" class="btn">Shop Now!</a>

   </div>

</div>
</div>







<figure class="snip">
  <figcaption>
    <blockquote>
      <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
    </blockquote>

    <h2><a href="<?php echo ROOT ?>/Customer/Complaint" class="comp">Complaint</a></h2>
  </figcaption>
</figure>
<figure class="snip1">
  <figcaption>
    <blockquote>
      <h3> PETRO believes that Sri Lanka<br> deserves a world-class petroleum <br>industry, and 
is building a healthy <br>and competitive fuel network that<br> will both boost the nation’s economy, <br>and care for its environment</h3>
    </blockquote>
    <h3>A.R.Perera</h3>
    <h4>Owner</h4>
  </figcaption>
</figure>
<figure class="snip">
  <figcaption>
    <blockquote>
      <p>The only skills I have the patience to learn are those that have no real application in life. </p>
    </blockquote>
 
    <h2><a href="<?php echo ROOT ?>/Customer/Rating" class="comp">Feedback</a></h2>
  </figcaption>
</figure>



<br><br>




<footer class="footer">
<div class="footer-left">

				<p class="footer-links">
					<a href="#" class="link-1">Home</a><br>
					
					<a href="#">Contact Us</a><br>
				
					<a href="#">Profile</a><br>
				
					<a href="<?php echo ROOT ?>/Home/Login">Logout</a>
					
		
				</p>

			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>222/A,Colombo 07</span></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>0717787990</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">petro@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="about">
					<span>About the company</span>
					
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				
				</div>

			</div>

		</footer>











    
<script>
var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });
  
  
  
  
  
  document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});







var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  </script>


</body>
</html>