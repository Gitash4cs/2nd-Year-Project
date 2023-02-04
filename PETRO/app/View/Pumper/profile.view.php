



  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title> profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

   
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Pumper/profile.css" text="text/css">
   
    
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


  
   <div class="main">

  <h1 class="userprofile"> PUMPER  PROFILE </h1>   
   

   
   


</div>
<br><br>



<div class="card-container">
	
	<img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
	<h2><?php echo  $data['First_name'] ?></h2>
	<h3><?php echo $data['pumper_id']; ?></h3><br>
	<h4><?php echo $data['Email']; ?></h4>
	<h4><?php echo $data['contact']; ?></h4>
	<div class="buttons">
	<a href="<?php echo ROOT ?>/Pumper/Change_password" class="edit"><b>Change Password</b></a>
	</div>
	<div class="skills">

		<ul>
		&nbsp&nbsp   &nbsp&nbsp   
			<li> <a href="<?php echo ROOT ?>/Pumper/Working_salary" class="card"><b>Salary Report</b></a></li>
			<li> <a href="<?php echo ROOT ?>/Pumper/Working_hours" class="card"><b>Working Report</b></a></li>
			<li> <a href="<?php echo ROOT ?>/Pumper/Working" class="card"><b>Pumped History</b></a></li>
		
		</ul>
	</div>
</div>


<br><br><br><br>



<div class="same1">
    <a href="<?php echo ROOT ?>/Pumper/User/" class="back">Back</a>
</div>

<br><br>

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