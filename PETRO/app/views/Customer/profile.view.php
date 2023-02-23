<!-- // (change162) -->




  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title> profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

   
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/profile.css" text="text/css">
   
    
</head>
<body>
<div class="navbar">
<a href="<?php echo ROOT ?>/Customer/Home" class="active">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
   


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

 <BR><BR><BR> 
   








<div class="card-container">
	
	<img class="round" src="<?php echo ROOT ?>/image/bp.jpg" width="150px" height="150px" alt="user" />
	<h1><?php echo  $data['fname'] ?></h1>
	
	<h3><?php echo $data['email']; ?></h3>
	<h3><?php echo $data['NIC']; ?></h3>
	<h3><?php echo $data['phone']; ?></h3>

	<div class="skills">

		<ul>
		
		<li> <a href="mv.php" class="v"><b>Vehicles</b></a></li><br>
			<li>  <a href="<?php echo ROOT ?>/Customer/Updatevehicle1" class="vehicle"> <?php echo $data['vno']; ?> </a></li>
			<li>  <a href="<?php echo ROOT ?>/Customer/Updatevehicle2" class="vehicle"> <?php echo $data['vno1']; ?> </a></li>
			<li>  <a href="<?php echo ROOT ?>/Customer/Updatevehicle3" class="vehicle"> <?php echo $data['vno2']; ?> </a></li>

			<?php 
		
		$url="addvehicle.php";
		$url2="addvehicle2.php";
		$url3="addvehicle3.php";

		if ($data['vno'] == "")
{
  echo ' <a href='.$url.' target="_blank" class="add">Add Vehicle 1</a>'; 
}
		if ($data['vno1'] == "")
{
  echo ' <a href='.$url2.' target="_blank" class="add">+ Add Vehicle 2</a><br><br>'; 
}


		if ($data['vno2'] == "")
{
  echo ' <a href='.$url3.' target="_blank" class="add">+ Add Vehicle 3</a>'; 
}

?><br>

<li> <a href="mv.php" class="v"><b>Machine</b></a></li><br>
			<li>  <a href="updatevehicle.php" class="vehicle"> <?php echo $data['sNo']; ?> </a></li>

			<?php 

$url="addmachine.php";
if ($data['sNo'] == "")
{
echo ' <a href='.$url.' target="_blank" class="add">+Add a Machine</a>'; 
}
?>
		
		</ul>

	
	</div>
	<br>
	<label for="balance"><h4> Balance</h4> </label>
    <input type="text" name="balance" value="" class="box2" readonly ><br>

	<label for="balance"><h4> Petro Points</h4> </label>
    <input type="text" name="balance" value="" class="box2" readonly ><br><br>

	

	<a href="mv.php" class="edit"><b>Edit </b></a>
	<a href="mv.php" class="delete"><b>Delete </b></a>
</div>

<br><br><br><br><br><br><br><br><br>

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