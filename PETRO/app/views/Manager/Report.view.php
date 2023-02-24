<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Update Fuel Availability</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/report.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
            <li><a href="<?php echo ROOT ?>/Manager/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item"></span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Update">
                        <i class="fas fa-gas-pump"></i>
                        <span class="nav-item">Update Fuel</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/View_history">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Analize</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Add_report">
                        <i class="fas fa-notes-medical"></i>
                        <span class="nav-item">Daily Report</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Report_history">
                        <i class="fas fa-history"></i>
                        <span class="nav-item">Report History</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/View_order">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="nav-item">View Orders</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/View_pumper">
                        <i class="fas fa-male"></i>
                        <span class="nav-item">View Pumper</span>
                    </a></li>


                <li><a href="<?php echo ROOT ?>/Manager/Home" class="logout">
                        <i class="fas fa-arrow-left"></i>
                        <span class="nav-item">Back</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Add Daily Report</h1>
            </div><br><br>
            <div class="wrapper">
                <div class="form-container">
                    <h1>Daily Report</h1>
                    <!--img src="<?php echo ROOT ?>/image/Manager/home-button.png" class="image2"-->
                    <br>
                    <h3>Date : <?php echo ($data['date']) ;?></h3>
                    <br>
                    <h3>Octane 92</h3>
                    <br>
                    <p>Reduced amount according to the physical count : <?php echo ($data['reduced92']) ;?> L</p>
                    <p>Reduced amount according to the system count : <?php echo ($data['complete92']) ;?> L</p>
                    <p>Difference of physical count & system count : <?php echo ($data['diff92']) ;?> L</p>
                    <br>
                    <h3>Octane 95</h3>
                    <br>
                    <p>Reduced amount according to the physical count : <?php echo ($data['reduced95']) ;?> L</p>
                    <p>Reduced amount according to the system count : <?php echo ($data['complete95']) ;?> L</p>
                    <p>Difference of physical count & system count : <?php echo ($data['diff95']) ;?> L</p>
                    <br>
                    <h3>Super Diesel</h3>
                    <br>
                    <p>Reduced amount according to the physical count : <?php echo ($data['reducedSdl']) ;?> L</p>
                    <p>Reduced amount according to the system count : <?php echo ($data['completeSdl']) ;?> L</p>
                    <p>Difference of physical count & system count : <?php echo ($data['diffSdl']) ;?> L</p>
                    <br>
                    <h3>Auto Diesel</h3>
                    <br>
                    <p>Reduced amount according to the physical count : <?php echo ($data['reducedAdl']) ;?> L</p>
                    <p>Reduced amount according to the system count : <?php echo ($data['completeAdl']) ;?> L</p>
                    <p>Difference of physical count & system count : <?php echo ($data['diffAdl']) ;?> L</p>
                    <br>
                    <br>
                    <p>Check and created by ...........................</p>
                    <p>Signature .......................</p>
                </div>
            </div><br><br>
                    <div class="btn">
                                <div class="btn-layer"></div>
                                    <button class="btn"> <a href="<?php echo ROOT ?>/Manager/Report/download">Download</a></button>
                                </div>
                        </div>
                        