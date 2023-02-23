

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>update profile</title>

   <!-- custom css file link  -->

   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/profileedit.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">

	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

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

     
   
<div class="form-container">


   

<form action="<?php echo ROOT?>/Customer/Profileedit/add" method="POST">
    
   
      <div class="container">
	  
	 <h2> Update Profile </h2>
	
	     
       <br>
     
       
		
            <input type="text" name="fname" value="<?php echo $data['fname']; ?>" class="box">
			<br>

      <input type="text" name="lname" value="<?php echo $data['lname']; ?>" class="box">
			<br>
         
            <input type="email" name="email" value="<?php echo $data['email']; ?>" class="box" readonly >
			<br>
			
            <input type="text" name="NIC" value="<?php echo $data['NIC']; ?>" class="box" readonly>
            
     
            <input type="hidden" name="old_pass" value="<?php echo $data['password']; ?>" readonly><br>
			
		
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
			<br>
           
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
			<br>
          
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div><br>
		   <input type="submit" value="update profile" name="update_profile" class="btn"><br><br>
		<a href="profile.php" class="back">Back</a>
     
	  
	    </div>  
     
    
   </form>
   
   
   
   
   
   
  
   
   

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