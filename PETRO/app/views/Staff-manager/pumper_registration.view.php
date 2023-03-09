<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/pumper_registration.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>


<div class="container">
        <nav>
            <ul>
            <li><a href="<?php echo ROOT ?>/Staff-manager/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item"></span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-gas-pump"></i>
                        <span class="nav-item">View Pumper</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">View Customer</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-notes-medical"></i>
                        <span class="nav-item">View Complain</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-history"></i>
                        <span class="nav-item">Assign Pumper</span>
                    </a></li>



                    <li><a href="<?php echo ROOT ?>/Staff-manager/Home" class="logout">
                        <i class="fas fa-arrow-left"></i>
                        <span class="nav-item">Back</span>
                    </a></li>
            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Register Pumper</h1>
            </div><br><br>
            <div class="wrapper">
                <div class="form-container">

                    <div class="form-inner">
                    <img src="<?php echo ROOT ?>/image/Manager/report.png" alt="">
        <form method="post" action="<?php echo ROOT ?>/Staff-manager/Pumper_registration/pumperRegistration">

            
            <!-- print error massage -->
            <?php
            if(isset($data['error'])){   
                echo '<span class="errorMsg"> : '.$data['error'].'</span>';
            };
                        ?> 
            <div class="field">
                        <input type="text" name = "id" required placeholder="Enter Pumper's ID">
            </div>
            <div class="field">
                        <input type="text" name = "firstName" required placeholder="Enter Pumper's First Name">
                        </div>
            <div class="field">
                        <input type="text" name = "lastName" required placeholder="Enter Pumper's Last Name">
                        </div>
            <div class="field">
                        <input type="text" name = "nic" required placeholder="Enter Pumper's NIC">
                        </div>
            <div class="field">
                        <input type="text" name = "phoneNumber" required placeholder="Enter Pumper's Phone Number">
                        </div>
            <div class="field">
                        <select class="profile-gender" name="gender" >
                            <option value="">--Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
            <div class="field">
                        <input type="text" name = "email" required placeholder="Enter Pumper's Email">
                        </div>
            <div class="field">
                        <input type="password" name = "password" required placeholder="Enter Pumper's password">
                        </div>
            <div class="field">
                        <input type="password" name = "cpassword" required placeholder="Confirm Pumper's password">
                        </div><br>
            <div class="btn">
                                <div class="btn-layer"></div>  
            <input type="submit" name="submit" value="Register Now" >
            </div>


        </form>
    </div>
</body>
</html>