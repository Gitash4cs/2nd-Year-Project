<?php
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
        


      
        <div class="work">
        <h2 class="middle">Fuel Pump History table</h2>
            <table class="table_center">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Date & Time</th>
                <th>Vehicle_No</th>
                <th>Fuel Type</th>
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
                <td>".$row['vehicle_no']."</td>
                <td>".$row['Fuel_Type']."</td>
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
     
    <br>


  </div>
</div>






</body>

</html>