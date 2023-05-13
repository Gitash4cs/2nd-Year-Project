<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Manager Home</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/salary_rate.css" text="text/css" />
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
            <li >
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
            <li class="active">
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
                    <h1>Salary Percentage</h1>
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


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Current Rates</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <!-- print error massage -->
                    <?php
                        if(isset($data['error'])){
                            echo '<span class="errorMsg">' .$data['error'].'</span>';
                        };
                        if(isset($data['success'])){ 
                            echo '<span class="successMsg">' .$data['success'].'</span>';
                        };
                    ?>
                    <table>
                        <tr><td> Basic Salary</td> <td>-</td> <td>Rs.<?php echo $data['Basic_salary']?>/=</td></tr>
                        <tr><td> Home Rental Allowances Rate</td> <td>-</td> <td><?php echo $data['HRA']?>%</td></tr>
                        <tr><td> Daily Allowances Rate</td> <td>-</td> <td><?php echo $data['Daily_allowances']?>%</td></tr>
                        <tr><td> Provident Fund Rate</td> <td>-</td> <td><?php echo $data['provident_fund']?>%</td></tr>
                        <tr><td> Over Time (per hour)</td> <td>-</td> <td>Rs.<?php echo $data['OT']?>/=</td></tr>

                    </table>
                    
                </div>
                <div class="order">
                    <div class="head">
                        <h3>Edit Salary Percentage</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <div class="form-inner">
                    <form class="form-container" action="<?php echo ROOT ?>/Staff-manager/Salary_Rate/editRates" method="post">
                        <div class="field">
                        <span class="form-tag">Update Basic Salary : </span>
                        <input type="text" name = "Basic" required placeholder="Enter New Basic Salary " require>
                        </div>
                        <div class="field">
                        <span class="form-tag">Update HRA Rate : </span>
                        <input type="text" name = "HRA" required placeholder="Enter New HRA Rate" require>
                        </div>
                        <div class="field">
                        <span class="form-tag">Update Daily_allowances Rate : </span>
                        <input type="text" name = "Daily_allowances" required placeholder="Enter New Daily_allowances Rate" require>
                        </div>
                        <div class="field">
                        <span class="form-tag">Update Provident_fund Rate : </span>
                        <input type="text" name = "Provident_fund" required placeholder="Enter New Provident_fund Rate" require>
                        </div>
                        <div class="field">
                        <span class="form-tag">OT Salary Rate (per hour) : </span>
                        <input type="text" name = "OT" required placeholder="Enter New OT rate" require>
                        </div>
                        <br><br>
                        <div class="btn">
                        <div class="btn-layer"></div>
                            <input type="submit" name="submit" value="Register Now" >
                        </div>
                    </form>
                </div>
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