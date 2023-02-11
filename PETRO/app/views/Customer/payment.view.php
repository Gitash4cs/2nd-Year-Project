

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
<link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/payment.css" text="text/css">
</head>
<body>
<div class="navbar">
  <a href="<?php echo ROOT ?>/Customer/Home" class="active">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/pro.png" width="40px" height="40px"></a> 

</div>
<br><br><br>

   

    <div class="container">
       <form action=" " method="POST">

	   
   <?php
   
   $tomorrow = date("Y/m/d", time() + 86400);
   
if($data['ftype']=='95-Octane')
	$price=$data['amount']*300;
else if($data['ftype']=='92-Octane')
	$price=$data['amount']*350;
else if($data['ftype']=='Super-Diesel')
	$price=$data['amount']*300;
else
	$price=$data['amount']*100;
 
 if($data['balance']>0){
	 	$price=$price-$balance;
		$n_balance=0;
 }
	 
	 
   ?>
   


	   <input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="box1" readonly>
                
                <input type="hidden" name="email" value="<?php echo $data['email']; ?>" class="box1" readonly>
       
            <input type="hidden" name="Oid" value="<?php echo $data['Oid']; ?>" class="box" readonly>
			
     
            <input type="hidden" name="vno" value="<?php echo $data['VMno']; ?>" class="box" readonly>
		
            <input type="hidden" name="vtype" value="<?php echo $data['vtype']; ?>" class="box" readonly >
       
       <input type="hidden" name="ftype" value="<?php echo $data['ftype']; ?>" class="box" readonly>
	
	    <input type="hidden" name="amount" value="<?php echo $data['amount']; ?>" class="box" readonly>

			 
	   	   <input type="hidden" name="n_balance" value="<?php echo "$n_balance" ?>" class="box" readonly>
			
			 <input type="hidden" name="price" value="<?php echo "$price" ?>" class="box" readonly>
	   
	     
	   	 <input type="hidden" name="pmethod" value="<?php echo $data['pmethod']; ?>" class="box" readonly>
	
	      <input type="hidden" name="cdate" value="<?php echo date("Y/m/d") ?>" class="box" readonly >
		
		    <input type="hidden" name="ndate" value="<?php echo "$tomorrow" ?>" class="box" readonly>
          <input type="hidden" name="status" value="0"  class="box" readonly><br>



      
  
            <h2 class="pay">Payment</h2>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
             <input type="radio" id="html" name="fav_language" value="HTML"> <i class="fa fa-cc-visa" style="color:navy;"></i>
              <input type="radio" id="html" name="fav_language" value="HTML"><i class="fa fa-cc-amex" style="color:blue;"></i>
              <input type="radio" id="html" name="fav_language" value="HTML"><i class="fa fa-cc-mastercard" style="color:red;"></i>
              <input type="radio" id="html" name="fav_language" value="HTML"><i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="22/03">
      
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              
 
      
        <input type="submit" value="Continue to checkout" class="btn" name="pay">
      </form>
 </div>
 <br><br><br><br>


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