<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Manager Home</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/style.css" text="text/css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- to get calander move icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-gas-pump'></i>
            <span class="text">PETRO</span>
        </a>
        <ul class="side-menu top">
            <li >
                <a href="<?php echo ROOT ?>/Staff-manager/Home">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Assign_pumpper">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Assign Pumper</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Complain">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">View & Responds to complaint</span>
                </a>
            </li>
            <li >
                <a href="<?php echo ROOT ?>/Staff-manager/view_pumper">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">View Pumpers</span>
                </a>
            </li>
            <li class="active">
                <a href="<?php echo ROOT ?>/Staff-manager/Pumper_registration">
                    <i class='bx bxs-group'></i>
                    <span class="text">Add Pumpers</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/view_customer">
                    <i class='bx bxs-group'></i>
                    <span class="text">View Customer</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Salary_Rate">
                    <i class='bx bxs-group'></i>
                    <span class="text">Salary Percentage </span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Profile">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Logout" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <h3><?php echo $_SESSION['manager_name']," ",$_SESSION['manager_name_Last']?></h3>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="<?php echo ROOT ?>/image/proIcon.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Pumper Registration </h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>

            

            <!-- print error massage -->
            <?php
                if(isset($data['error'])){   
                    echo '<span class="errorMsg"> : '.$data['error'].'</span>';
                };
            ?> 
            <div class="table-data">
                <div class="todo">
                    <div class="form-inner">
                    <form action="<?php echo ROOT ?>/Staff-manager/Pumper_registration/pumperRegistration" method="post">
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
                        <div>
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

                <div class="order">
                </div>

            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="<?php echo ROOT ?>/JS/Staff-manager/script.js"></script>
    <script src="<?php echo ROOT ?>/JS/Staff-manager/calender.js"></script>
</body>




</html>