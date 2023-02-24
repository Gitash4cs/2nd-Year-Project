<?php
    $flag='';
    if(empty($data['error'])){
        $flag=true;
    }
    else{
        $data['total']= NULL;
        $flag=false;
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
if($flag==true){
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
        <input class="box2" type="date" id="date" name="date" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      
     
         <button class="btn">GENERATE REPORT</button>
    </form>

</div>





  </div>
</div>






</body>

</html>