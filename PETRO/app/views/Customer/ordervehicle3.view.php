

<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/home.css">
 <link rel="stylesheet" href="css/orderv.css">
    
 <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/ordervehicle.css" text="text/css">
    
 <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
<style>


</style>
</head>
<body>


<div class="navbar">
<a href="<?php echo ROOT ?>/Customer/Home" class="active">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="images/pro.png" width="40px" height="40px"></a> 

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

  


                    <form action="<?php echo ROOT ?>/Customer/Ordervehicle3/add " method="POST">
                           
                               <h1> Order Fuel </h1>
							   
							   
			                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="box1" readonly > <br>
								 <input type="text" name="vno" value="<?php echo $data['vno2']; ?>" class="box" readonly>
                             
			<br>
                                 <input type="text" name="vtype" value="<?php echo $data['vtype2']; ?>" class="box" readonly>
                            <br>
						
                                <?php 
  if($data['ftype2']=="92-Octane"){?>
   
                                <select name="ftype" class="box" required>
                                    <option value="<?php echo $data['ftype2']; ?>"><?php echo $data['ftype2']; ?></option>
                                 
                                    <option value="95-Octane">95-Octane</option>
								
                                </select>
								<?php } ?>
								
								
								               <?php 
  if($data['ftype2']=="95-Octane"){?>
   
                                <select name="ftype" class="box" required>
                                    <option value="<?php echo $data['ftype2']; ?>"><?php echo $data['ftype2']; ?></option>
                                 
                                    <option value="92-Octane">92-Octane</option>
								
                                </select>
								<?php } ?>
								
								
															               <?php 
  if($data['ftype2']=="Super-Diesel"){?>
   
                                <select name="ftype" class="box" required>
                                    <option value="<?php echo $data['ftype2']; ?>"><?php echo $data['ftype2']; ?></option>
                                 
                                    <option value="Diesel">Diesel</option>
								
                                </select>
								<?php } ?>
								
															               <?php 
  if($data['ftype2']=="Diesel"){?>
   
                                <select name="ftype" class="box" required>
                                    <option value="<?php echo $data['ftype2']; ?>"><?php echo $data['ftype2']; ?></option>
                                 
                                    <option value="Super-Diesel">Super-Diesel</option>
								
                                </select>
								<?php } ?>
								<br>
							
								   <input type="number" name="amount" placeholder="Fuel amount" class="box" min="1"  required>
								
                           <br>
						    <input type="hidden" name="balance" value="<?php echo $data['balance']; ?>" class="box" readonly > 
						         
                                <select name="pmethod" class="box" required>
                                    <option value="">--Payment Method--</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Card">Card</option>
							
                                </select>
								
                      <br><br><br>
                                <button type="submit" name="submit" class="btn" required>Place Order</button>
								<br><br>
								
                          
                        </form>

                   
                </div>
       

    
  </div>
</div>


<footer class="footer">
<div class="footer-left">

				<h3>Company<span>logo</span></h3>

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