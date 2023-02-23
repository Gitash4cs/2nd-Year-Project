

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/shop.css" text="text/css">

   <!-- custom css file link  -->






</head>
<body>
<div class="navbar">
<a href="<?php echo ROOT ?>/Customer/Home" class="">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="active">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
 

	  <a href="<?php echo ROOT ?>/Customer/Cart"><i class="fa badge" style="font-size:18px" value="cart">&#xf07a;</i>

  
     <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/pro.png" width="40px" height="40px"></a> 
	 

</div>

<div class="row">
  <div class="side">


    <a href="<?php echo ROOT ?>/Customer/Pendingstore"> <i class="fa fa-car"></i> Pending Orders</a>
   <a href="<?php echo ROOT ?>/Customer/Storehistory"><i class="fa fa-user icon"></i> View Store History</a>
  <a href="<?php echo ROOT ?>/Customer/Complaint" class=""><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>

  
  
    
  </div>
  
  <div class="main">
   

<div class="container">


  

<div class="products">
<br>
   <h1 class="heading">Petro Store</h1><br>
   

   <div class="box-container">
   

   <?php
   if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
				?>
    
	<form action="<?php echo ROOT ?>/Customer/Shop/add " class="box" method="POST">
         <img src="<?php echo ROOT ?>/image/<?php echo $row['image']; ?>" alt="">
         <div class="name"><?php echo $row['name']; ?></div>
         <div class="price">Rs.<?php echo $row['price']; ?></div>
         <input type="number" min="1" value="1"name="product_quantity">
		  <input type="hidden" name="p_id" value="<?php echo $row['p_id']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
		  <input type="hidden" name="cdate" value="<?php echo date("Y/m/d") ?>" class="box" readonly >
		  	    <input type="hidden" name="ndate" value="<?php echo "$tomorrow" ?>" class="box" readonly><br>
         <input type="submit" value="add to cart" name="add_to_cart" class="btn" >
		
      </form>
	  <?php
      };
   };
   ?>
   
</div>

   </div>

</div>
<br><br><br>
<div class="pagination">
  <a href="">&laquo;</a>
  <a href="#" class="active">1</a>
  <a class="" href="#">2</a>
  <a href="#">3</a>
 
  <a href="#">&raquo;</a>
</div>

<br><br><br>
</div>
</div>
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