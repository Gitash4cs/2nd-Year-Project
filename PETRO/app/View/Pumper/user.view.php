<?php
if(empty($data['err'])){
    $data['err']=null;
}
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/main1.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <body>
    <div class="navbar">
  <a href="home.php" class="">Home</a>
  <a href="#">Contact Us</a>
  <a href="#">About Us</a>
  <div class="right1">
  <a href="<?php echo ROOT ?>/Pumper/Profile/logout">Logout</a>
  </div>



</div>

<br>
          <h1 class="available"> Order Validation
          </h1>
          <div class="photo">
          <a href="<?php echo ROOT ?>/Pumper/Profile/"> <img class="round"  src="https://randomuser.me/api/portraits/women/79.jpg"  /></a>
          </div>
         

            <br><br><br><br>
            <div class="main2">
                <form action="<?php echo ROOT ?>/Pumper/User/order_verify" method="post"><br>
                   
                    <label class="main4">Enter the Order Number:</label>
                    <input class="textarea" type="text" id="order_id" name="order_id" required><br><br><br>
                    
                    <button type="submit" name="submit" class="btn">Confirm</button>
                    <br><br>
         
                </form>
            </div>
<br>




<br><br>

	
<h1 class="available"> Fuel Availability </h1>
<br><br>

   
    <br>

    <div class="columns6">
  <ul class="price2">
    <li class="header"><h3>92-Octane</h3></li>
    <li class><h2>Rs.370</h2></li>
    <li class="grey"><h2>10500 L</h2></li>

  </ul>
</div>

<div class="columns6">
  <ul class="price2">
    <li class="header"><h3>95-Octane</h3></li>
    <li class><h2>Rs.390</h2></li>
    <li class="grey"><h2>11000 L</h2></li>

 
  </ul>
</div>

<div class="columns6">
  <ul class="price2">
    <li class="header"><h3>Super-Diesel</h3></li>
    <li class><h2>Rs.420</h2></li>
    <li class="grey"><h2>9900 L</h2></li>
 

  </ul>
</div>

<div class="columns6">
  <ul class="price2">
    <li class="header"><h3>Auto-Diesel</h3></li>
    <li class><h2>Rs.400</h2></li>
    <li class="grey"><h2>10000 L</h2></li>


  </ul>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


            <footer class="footer">
<div class="footer-left">

				<p class="footer-links">
					<a href="#" class="link-1">Home</a><br>
					
					<a href="#">Contact Us</a><br>
				
					<a href="#">Profile</a><br>
				
					<a href="logout.php">Logout</a>
					
		
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
         
    </body>
</html>