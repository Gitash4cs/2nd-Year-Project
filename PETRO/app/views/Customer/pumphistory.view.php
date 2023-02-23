<?php
    // (change162)

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
  <a href="<?php echo ROOT ?>/Customer/Mv" class="">Place an Order</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/xx.png" width="40px" height="40px"></a> 

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

     
<h1> Pumping History </h1><br>   




<div class="table" >
		<table class="table1">
		  <thead>
			<tr>
			  <th scope="col">Order ID</th>
			  <th scope="col">Vehicle No</th>
			  <th scope="col">Vehicle Type</th>
			   <th scope="col">Fuel Type</th>
			  <th scope="col">Amount(l)</th>
			  <th scope="col">Price</th>
			    <th scope="col">Pumped Date</th>
			  <th scope="col">Pumped Time</th>
			  
			</tr>
		  </thead>
		  <tbody>
		     
			 
			 <?php
    

  
  
  

	
   
	if($flag==true){
        if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {

	  
				echo "<tr>
			<td>".$row['Oid']."</td>
            <td>".$row['VMno']."</td>
            <td>".$row['vtype']."</td>
            <td>".$row['ftype']."</td>
            <td>".$row['amount']."</td>
            <td>".$row['price']."</td>
            <td>".$row['cdate']."</td>
            <td>".$row['ndate']."</td>
			</tr>";
						
					
				
			}}}
			else{
				echo $data['error'];
		   }
		   ?>
				
	
				
    
				
			
		  
		  </tbody>
		</table>
	</div>   

   

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