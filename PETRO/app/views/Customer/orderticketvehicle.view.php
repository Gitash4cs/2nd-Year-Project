
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>update profile</title>
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/orderticket.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   

   <!-- custom css file link  -->

<style>

</style>
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
  if ($price <= $data['balance']){
    $n_balance=$data['balance'] - $price;
    $price=0;
    
  }
  else{
    $price=$price-$data['balance'];
		$n_balance=0;
  }
	 	
 }
	 
	 
   ?>
   

   <form action="<?php echo ROOT ?>/Customer/Orderticketvehicle/add " method="POST">

   
   
      <div class="container">
	         <h1> Order Ticket </h1>
            <div class="columns">
   <div class="column">


                <input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="box1" readonly><br>
                
                <input type="hidden" name="email" value="<?php echo $data['email']; ?>" class="box1" readonly><br>
             <label for="orderID"><b> Order ID:</b> </label>
            <input type="text" name="Oid" value="<?php echo $data['Oid']; ?>" class="box" readonly>
			<br>
          <label for="vno"> Vehicle No: </label>
            <input type="text" name="vno" value="<?php echo $data['VMno']; ?>" class="box" readonly>
			<br>
			 <label for="vtype"> Vehicle Type: </label>
            <input type="text" name="vtype" value="<?php echo $data['vtype']; ?>" class="box" readonly ><br>
           <label for="ftype"> Fuel Type :</label>  
       <input type="text" name="ftype" value="<?php echo $data['ftype']; ?>" class="box" readonly><br>
	    <label for="cusid"> Fuel Amount: </label>
	    <input type="text" name="amount" value="<?php echo $data['amount']; ?>" class="box" readonly><br>
</div>
<div class="column">
   <br>
			 <br>	    <label for="cusid"> Previous Balance: </label>
	    <input type="number" name="balance" value="<?php echo $data['balance']; ?>" class="box" readonly><br>
	   	   <input type="hidden" name="n_balance" value="<?php echo "$n_balance" ?>" class="box" readonly>
			    <label for="cusid"> Price: </label>
			 <input type="text" name="price" value="<?php echo "$price" ?>" class="box" readonly>
	   <br>
	     <label for="cusid"> New Balance: </label>
	   	 <input type="number" name="nbalance" value="<?php echo "$n_balance" ?>" class="box" readonly><br>
        <label for="cusid"> Payment Method: </label>
	   	 <input type="text" name="pmethod" value="<?php echo $data['pmethod']; ?>" class="box" readonly><br>
	    <label for="cusid"> Ordered Date: </label>
	      <input type="text" name="cdate" value="<?php echo date("Y/m/d") ?>" class="box" readonly ><br>
		   <label for="cusid"> Order Expire Date: </label>
		    <input type="text" name="ndate" value="<?php echo "$tomorrow" ?>" class="box" readonly><br>
          <input type="hidden" name="status" value="0"  class="box" readonly><br>
			
		
			
			  

	   
         </div>
         </div></div>
		 <br><br>
		   <input type="submit" value="Payment" name="Payment" class="btn"><br><br>
      <a href="home.html" class="delete-btn">go back</a>
	  
	      

    
   </form>

</div>
</div>

</body>
</html>