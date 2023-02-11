
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/mv.css" text="text/css">

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

	  


<h1> Vehicles </h1><br>
<div class="row2">

  <div class="column">

  <?php 
  if($data['vno']!=""){?>
  
     <a href="<?php echo ROOT ?>/Customer/Ordervehicle1" class="card">    <input type="hidden" name="vno" id="vno" value="<?php echo $data['vno']; ?>"  readonly > <b><?php echo $data['vno'] ?></b><br><img src="<?php echo ROOT ?>/image/car23.png" width="150px" height="150px"></a> <?php } ?><br><br>
   
  
  
  
 
  </div>
   <div class="column">
    <?php 
  if($data['vno1']!=""){?>
   
	      <a href="<?php echo ROOT ?>/Customer/Ordervehicle2" class="card"><b><?php echo $data['vno1'] ?></b><br><img src="<?php echo ROOT ?>/image/car23.png"  width="150px" height="150px"></a> <?php } ?><br><br>
		     <?php 
  if($data['vno2']!=""){?>
  </div>
   <div class="column">
 
  <a href="<?php echo ROOT ?>/Customer/Ordervehicle3" class="card"><b><?php echo $data['vno2'] ?></b><br><img src="<?php echo ROOT ?>/image/car23.png"  width="150px" height="150px"></a><?php } ?>
      
    </div>
  </div>

  <div class="column">
  <h1> Machine </h1>
	     <?php 
  if($data['sNo']!=""){?>
        <a href="<?php echo ROOT ?>/Customer/Ordermachine" class="card"><b><?php echo $data['sNo']?></b><br><br><img src="<?php echo ROOT ?>/image/m.png" width="150px" height="150px"></a><?php } ?>
      
   
  </div>
  

  
</div>


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