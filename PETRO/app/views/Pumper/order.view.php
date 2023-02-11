<?php
    if($data['loading']=='1'){
        $data['pumped_liters']=null;
        $data['remaining_liters']=null;
        $data['price']=null;
        $data['balance']=null;
    }
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/order.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <script>
        function validateForm() {
        var x = document.forms["myForm"]["pumped"].value;
            if (x == "" || x == null) {
                alert("Amount of the pumped liters must be filled out");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
    <body>
    <div class="navbar">
  <a href="home.php" class="">Home</a>
  <a href="#">Contact Us</a>
  <a href="#">About Us</a>


</div>
        <div class="inline">
        <div class="header"><b>Order Details</b></div></div><div class="header1"><span class="tab"></span></div><br>
        <div class="table1">
        <div class="main1">
        <table id='display'>


        <div class="container">

  <ul class="responsive-table">

    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Order ID</div>
    
      <div class="col col-4" data-label="Payment Status"><?php echo($_SESSION['order_id'])?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Vehicle No</div>

      <div class="col col-4" data-label="Payment Status"><?php echo $data["vehicle_no"] ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Vehicle Type</div>
   
      <div class="col col-4" data-label="Payment Status"><?php echo $data["class"] ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Fuel Type</div>
   
      <div class="col col-4" data-label="Payment Status"><?php echo $data["Fuel_Type"] ?></div>
    </li>
    
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Amount</div>

      <div class="col col-4" data-label="Payment Status"><?php echo $data["Amount"] ," Liters","<br>"; ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Payment</div>
    
      <div class="col col-4" data-label="Payment Status">RS.<?php echo $data["payment"] ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">PETRO Points</div>
    
      <div class="col col-4" data-label="Payment Status"><?php echo $data["points"]?></div>
    </li>
  </ul>
</div>

        
    
   
        </table>
        </div>
        <div class="main2">
          <br>
            <form name="myForm" action="<?php echo ROOT ?>/Pumper/Order/order_complete" onsubmit="return validateForm()" method="post" required >
            &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp  <label>Enter Liters:</label>&nbsp;&nbsp;&nbsp;
                <input class="textarea" type="number" name="pumped" />
                &nbsp&nbsp   <button type="submit" name="OK" id="ok" class="btn">Complete</button><br><br>
            </form>
          

            

        <div class="container">

<ul class="responsive-table">


  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Pumped Liters</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['pumped_liters']?></div>
  </li>

  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Remaining Liters</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['remaining_liters']?></div>
  </li>

  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Price</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['price']?></div>
  </li>

  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Account Balance</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['balance']?></div>
  </li>
</ul>
</div>





        
            <br><br><div class="but-2">
              </div>
            </div>
        </div>
        <div class="footer1">
            <label class="error"><?php echo $data['err'] ?></label>
        </div>
        <div class="same1">
        <a href="<?php echo ROOT ?>/Pumper/User/" class="back">Back</a></button>
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