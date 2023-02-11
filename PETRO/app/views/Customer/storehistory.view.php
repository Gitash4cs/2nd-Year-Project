<?php
    $flag='';
    if(empty($data['error'])){
        $flag=true;
    }
    else{
        $flag=false;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Pump History</title>

   <!-- custom css file link  -->

   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/pumphistory.css" text="text/css">

</head>
<body>
<div class="navbar">
<a href="<?php echo ROOT ?>/Customer/Home" class="">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="images/pro.png" width="40px" height="40px"></a> 

</div>

<div class="row">
  <div class="side">


    <a class="active" href="<?php echo ROOT ?>/Customer/Pendingstore"> <i class="fa fa-car"></i> Pending Orders</a>
   <a href="<?php echo ROOT ?>/Customer/Storehistory"><i class="fa fa-user icon"></i> View Store History</a>
  <a href="<?php echo ROOT ?>/Customer/Complaint" class=""><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>
 
  </div>
  
   <div class="main">

     
<h1> Store History </h1><br>   




<div class="table" >
		<table class="table1">
		  <thead>
			<tr>
			  <th scope="col">Order ID</th>
			  <th scope="col">Product Name</th>
			  <th scope="col">Quantity</th>
			   <th scope="col">Price</th>
			  <th scope="col">payment Method</th>
			  <th scope="col">Ordered Date</th>
			  <th scope="col">Collected Date</th>
			   
			  
			</tr>
		  </thead>
		  <tbody>
		     

				
	
				
    
				
			
		  
		  </tbody>
		</table>
        <br><br><br><br><br><br><br><br><br>
	</div>   
<br><br><br><br><br><br><br><br><br>


</div>


</div>



<footer class="footer">
<div class="footer-left">

				

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Contact Us</a>
				
					<a href="#">About Us</a>
				
					<a href="#">Profile</a>
					
		
				</p>

				<p class="footer-company-name">Petro © 2022</p>
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