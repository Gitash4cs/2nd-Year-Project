<!-- // (change162) -->




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Update Vehicle</title>

   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/addvehicle.css" text="text/css">
   
   

</head>
<body>
<div class="navbar">
<a href="<?php echo ROOT ?>/Customer/Home" class="active">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/pro.png" width="40px" height="40px"></a> 

</div>

<div class="row">
  <div class="side">
  
  <a href="<?php echo ROOT ?>/Customer/Mv"> <i class="fa fa-car"></i> Place an Order</a>
    <a href="<?php echo ROOT ?>/Customer/Pendingpetrol"> <i class="fa fa-car"></i> Pending Orders</a>
   <a href="<?php echo ROOT ?>/Customer/Pumphistory"><i class="fa fa-user icon"></i> View Pumped History</a>
  <a href="<?php echo ROOT ?>/Customer/Complaint" class=""><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>
 
  </div>
  
   <div class="main">
   <br><br><br><br>

     
   
<div class="form-container">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
	  
   ?>
   

   <form action="" method="post" enctype="multipart/form-data">
    
   
      <div class="container">
	  
	 <h2> Add Vehicle </h2>
	     
       <br>
       <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
       
		
            <input type="text" name="update_vno" value="<?php echo $fetch['vno']; ?>" class="box">
			<br>
         	   <select name="update_vtype" class="box" id="vno1" value="<?php echo $fetch['vtype']; ?>"  >
                                   
                                    <option value="car">Car</option>
                                    <option value="van">Van</option>
                                </select>
        
			<br>
			  <select name="update_ftype" class="box" id="vno1" value="<?php echo $fetch['ftype']; ?>"  >
                                   
                                    <option value="92-Octane">92 Petrol</option>
                                    <option value="95-Octane">95 Petrol</option>
									  <option value="Super-Diesel">Super Diesel</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
			 
			  <br>
			
            <input type="number" name="update_capacity1" value="<?php echo $fetch['capacity1']; ?>" class="box" >
            
     
         </div><br>
		   <input type="submit" value="Add Vehicle" name="Add vehicle" class="btn"><br><br>
		<a href="profile.php">Back</a>
     
	  
	    </div>  
     
    
   </form>
   
   
   
   
   
   
  
   <br><br><br><br> 
   

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