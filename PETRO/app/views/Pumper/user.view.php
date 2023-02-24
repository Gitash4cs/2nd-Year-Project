
<?php
if(empty($data['err'])){
    $data['err']=null;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/main1.css" />
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
        


            <h1 class="available">&nbsp&nbsp&nbsp&nbsp&nbsp Order Validation
          </h1>
          <div class="photo">
        
          
       
         

            <br><br><br><br>
            <div class="main2">
                <form action="<?php echo ROOT ?>/Pumper/User/order_verify" method="post"><br>
                   
                    <label class="main4">Enter the Order Number:</label>
                    <input class="textarea" type="text" id="order_id" name="order_id" required><br><br><br>
                    
                    <button type="submit" name="submit" class="btn">Confirm</button>
                    <br><br>
         
                </form>
            </div>



<br><br><br>

            <h1 class="available"> Fuel Availability </h1>
<br><br>

   
    <br>
    <div id="pricing-table">
    <div class="plan plan">
        <div class="header">92-Octane</div>
        <div class="price">Rs.<?php echo $data['price_92'] ?></div>  
        <div class="monthly">per liter</div>      
        <ul>
         
            <li><b>Available</b> <?php echo $data['remain_92'] ?>L</li>
      
        </ul>
        <br><br>
        
    </div >
    <div class="plan plan">
        <div class="header">95-Octane</div>
        <div class="price">Rs.<?php echo $data['price_95'] ?></div>
        <div class="monthly">per liter</div>  
        <ul>
          
            <li><b>Available</b> <?php echo $data['remain_95'] ?> L</li>
        
        </ul>
        <br><br>
       
    </div>
    <div class="plan plan">
        <div class="header">Auto-Diesel</div>
        <div class="price">Rs.<?php echo $data['price_auto'] ?></div>
        <div class="monthly">per liter</div>
        <ul>
           
            <li><b>Available</b> <?php echo $data['remain_auto'] ?> L</li>
     
        </ul><br><br>
            
    </div>
    <div class="plan plan">
        <div class="header">Super-Diesel</div>
        <div class="price"><?php echo $data['price_super'] ?></div>
        <div class="monthly">per liter</div>
        <ul>
        
            <li><b>Available</b> <?php echo $data['remain_super'] ?>L</li>
      
        </ul>
        <br><br>
             
    </div>  
</div>



  </div>
</div>






</body>

</html>