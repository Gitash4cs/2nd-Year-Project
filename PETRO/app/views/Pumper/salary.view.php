<?php
  if(!empty($data['basic'])){
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
  
  }
  else{
    $v1=NULL;
    $v9=NULL;
    $v2=NULL;
    $v3=NULL;
    $v4=NULL;
    $v5=NULL;
    $v6=NULL;
    $v7=NULL;
    $v8=NULL;
    $V10=NULL;
    $V11=NULL;
  
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/working.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
            <li><a href="<?php echo ROOT ?>/Admin/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item">Pasindu</span><br>
                        <span class="nav-item"></span>
                    </a></li>

                 
           
                <li><a href="<?php echo ROOT ?>/Pumper/Working">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Working Report</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Pumper/Working_hours">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Working Hours</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Pumper/Working_salary">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Salary Report</span>
                    </a></li>
                    <li><a href="<?php echo ROOT ?>/Pumper/Change_password">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Change Password</span>
                    </a></li>



                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
        


        <div class="header">

</div>
<br><br>
<h1 class="hello">ANALYZING  PAYMENT SHEET </h1>
<br><br><br>
<div class="row">
<div class="column" >
    <br>
<div class="inline">
    
    <div class="work1">
    <br><br><br><br> <br><br>
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
        var barColors = ["#091d2a", "#091d2a","#091d2a","#091d2a","#091d2a"];

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
    <br><br><br>
    <div class="pre">
    <form action="<?php echo ROOT ?>/Pumper/Working_salary/previous" method="post">
        <label class="pre1">PREVIOUS SALARY REPORT:</label>
        <input type="month" id="bdaymonth" name="bdaymonth" class="box">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
         <button class="btn">GENERATE REPORT</button>
         <button class="btn"><a href="<?php echo ROOT ?>/Pumper/Working_salary/Download">Download</a></button>

    </form>

</div>
    
    </div>

    
    <div class="column">
    
    <h4 class="middle">MONTHLY PAYMENT SHEET</h4>




    <div class="container2">

<ul class="responsive-table">
<li class="table-header">


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




  </div>
</div>






</body>

</html>