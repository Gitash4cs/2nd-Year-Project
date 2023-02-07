<?php
    $v1=$data['basic'];
    $v2=$data['HRA'];
    $v3=$data['DA'];
    $v4=$data['PF'];
    $v5=$data['HRA_s'];
    $v6=$data['DA_s'];
    $v7=$data['PF_s'];
    $v8=$data['GS'];
    $v9=$data['basic_s'];
    $V10 = $data['OT_SALARY'];
    $V11 = $data['total'];
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
    <br><br>
    <h1 class="hello">ANALYZING  PAYMENT SHEET </h1>
    <br><br><br>
    <div class="row">
  <div class="column" >
    <div class="inline">
        <div class="work1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <script>
            window.onload=function(){
            var x1 =" <?php echo "$v1" ; ?>";
            var x2 =" <?php echo "$v2" ; ?>";
            var x3 =" <?php echo "$v3" ; ?>";
            var x4 =" <?php echo "$v4" ; ?>";

            var xValues = ["BASIC", "HOME RENTAL ALLOWANCES", "DAILY ALLOWANCES", "PROVIDENT FUND"];
            var yValues = [ x1, x2,x3,x4,0];
            var barColors = ["#3498db", "#3498db","#3498db","#3498db","#3498db"];

            var chart2=new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "PERCENTAGES OF PAYMENT"
                }
            }
            });
        }
        chart2.render();
        </script>
        <div class="pre">
        <form action="<?php echo ROOT ?>/Pumper/Working_salary/previous" method="post">
            <label class="pre1">PREVIOUS SALARY REPORT:</label>
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
        
        </div>

        
        <div class="column">
        
        <h4 class="middle">MONTHLY PAYMENT SHEET</h4>
    
    
 

        <div class="container">

  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Job Id</div>
      <div class="col col-2">Rs</div>
   
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">BASIC SALARY:</div>
     
      <div class="col col-4" data-label="Payment Status"><?php echo $v9?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Home Rental Allowance:</div>
    
      <div class="col col-4" data-label="Payment Status"><?php echo $v5?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Daily Allowances:</div>
  
      <div class="col col-4" data-label="Payment Status"><?php echo $v6?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Gross Salary:</div>
 
      <div class="col col-4" data-label="Payment Status"><?php echo $v8?></div>
    </li>

    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Provident Fund:</div>
 
      <div class="col col-4" data-label="Payment Status"><?php echo $v7?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">OT HOURS:</div>
 
      <div class="col col-4" data-label="Payment Status"><?php echo $V10?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">TOTAL:</div>
 
      <div class="col col-4" data-label="Payment Status"><?php echo $V11?></div>
    </li>
  </ul>
</div>

        <table id="display">



        </table>




        </div>
    </div>
    </div>
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