<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Update Fuel Availability</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/add_report.css" />
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

                    <div class="form-inner">
                    <img src="<?php echo ROOT ?>/image/Manager/report.png" alt="">
                    <form action="<?php echo ROOT ?>/Manager/Add_report/Add_report" method="POST">
                        <div class="field">
                            <input type="date" name="date" placeholder="Date">
                        </div>
                        <div class="field">
                                    <input type="number" placeholder="Reduced Octane 92 Amount" name="reduced92" required>
                        </div>
                        <div class="field">
                                    <input type="number" placeholder="Reduced Octane 95 Amount" name="reduced95" required>
                        </div>
                        <div class="field">
                                    <input type="number" placeholder="Reduced Super Diesel Amount" name="reducedsdl" required>
                        </div>
                        <div class="field">
                                    <input type="number" placeholder="Reduced Auto Diesel Amount" name="reducedadl" required>
                        </div>
                        <br>
                        <div class="btn">
                                <div class="btn-layer"></div>
                                    <input type="submit" value="Submit">
                                </div>
                        </div>
                    </form>
                    </div>
                </div>

            </div>




    </div>

</body>

</html>