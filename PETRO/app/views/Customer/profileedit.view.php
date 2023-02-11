

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

  <a class="active" href="<?php echo ROOT ?>/Customer/Mv"> <i class="fa fa-user icon"></i> View Profile</a>
  <a href="<?php echo ROOT ?>/Customer/Mv"> <i class="fa fa-car"></i> Place an Order</a>
    <a href="<?php echo ROOT ?>/Customer/Pendingpetrol"> <i class="fa fa-car"></i> Pending Orders</a>
   <a href="<?php echo ROOT ?>/Customer/Pumphistory"><i class="fa fa-user icon"></i> View Pumped History</a>
  <a href="<?php echo ROOT ?>/Customer/Complaint" class=""><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>
 
  </div>
  
   <div class="main">

     
   
<div class="form-container">


   

   <form action="" method="post" enctype="multipart/form-data">
    
   
      <div class="container">
	  
	 <h2> Update Profile </h2>
	
	     
       <br>
     
       
		
            <input type="text" name="update_name" value="<?php echo $data['name']; ?>" class="box">
			<br>
         
            <input type="email" name="update_email" value="<?php echo $data['email']; ?>" class="box" readonly >
			<br>
			
            <input type="text" name="update_NIC" value="<?php echo $data['NIC']; ?>" class="box" readonly>
            
     
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

</body>
</html>