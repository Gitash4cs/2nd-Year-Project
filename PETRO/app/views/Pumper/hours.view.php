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
   
    <h2 class="middle2"> Working Report</h2><br>
        <table class="table_center">
        <thead>
        <tr>
            <th>N0:</th>
            <th>Date</th>
            <th>Login Time</th>
            <th>Logout Time</th>
            <th>Working Hours</th>
        </tr>
        </thead>
        <tbody>
    <?php
        if (mysqli_num_rows($data['result'])> 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
                $seconds=($row['working_hours'])%60;
                $minutes=($row['working_hours'])/60%60;
                $hours =(int)(($row['working_hours'])/3600);
            echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['Date']."</td>
            <td>".$row['Login_Time']."</td>
            <td>".$row['Logout_TIME']."</td>
            <td>".$hours."h:".$minutes."min:".$seconds."s". "</td>
            </tr>";
            }
        }
        else{
            echo $data['error'];
        }
    ?>
    </tbody>
    </table>
    <?php
         $minutes=($data['total'])/60%60;
         $hours =(int)(($data['total'])/3600);

    ?>
    <br>
    <h2 class="middle">Total working hours : <?php echo "$hours","h:","$minutes","min" ?></h2>
    </div>

    <div class="pre">
        <form action="<?php echo ROOT ?>/Pumper/Working_hours/previous" method="post">
            <label class="pre1">PREVIOUS WORKING REPORT:</label>
            <input class="box" type="date" id="date" name="date" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             <button class="btn">GENERATE REPORT</button>
        </form>

    </div>
   
    <div class="same1">
        <a href="<?php echo ROOT ?>/Pumper/Profile/" class="back">Back</a>
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