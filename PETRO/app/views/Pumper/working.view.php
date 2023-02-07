<?php
    $flag='';
    if(empty($data['error'])){
        $flag=true;
    }
    else{
        $flag=false;
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/working.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <body>
    <div class="navbar">
  <a href="home.php" class="">Home</a>
  <a href="#">Contact Us</a>
  <a href="#">About Us</a>
  

</div>
    <div class="header">
        
    </div>
    <div class="work">
    <h2 class="middle">Fuel Pump History table</h2>
        <table class="table_center">
        <thead>
        <tr>
            <th>Order ID</th>
            <th>Date & Time</th>
            <th>Fuel Type</th>
            <th>Category</th>
            <th>No of Liters</th>
            <th>Payment</th>
            <th>Account Balance</th>
        </tr>
        </thead>
        <tbody>
            
    <?php
    if($flag==true){
        if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
            echo "<tr>
            <td>".$row['order_id']."</td>
            <td>".$row['time']."</td>
            <td>".$row['Fuel_Type']."</td>
            <td>".$row['class']."</td>
            <td>".$row['pumped_liters']."</td>
            <td>".$row['pay']."</td>
            <td>".$row['balance']."</td>
            </tr>";
            }
        }
    }
    else{
         echo $data['error'];
    }
    ?>

    </tbody>
    </table>
    </div>
    <br>
    <div class="same1">
        <a href="<?php echo ROOT ?>/Pumper/Profile/" class="btn">Back</a>
    </div>
<br><br><br>

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