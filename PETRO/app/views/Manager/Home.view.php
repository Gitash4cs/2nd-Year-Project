<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Manager Home</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/home.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/profile.jpg">
                        <span class="nav-item">Achala</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Home">
                        <i class="fas fa-gas-pump"></i>
                        <span class="nav-item">Fuel</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Product">
                        <i class="fas fa-oil-can"></i>
                        <span class="nav-item">Lubricants</span>
                    </a></li>


                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>


        <section class="main">
            <div class="main-top">
                <h1>Manager</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/gas-pump.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Manager/Update';">Update Fuel Availability</button>
                </div>
                <div class="card">
                    <img  src="<?php echo ROOT ?>/image/Manager/growth.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Manager/View_history';">View & Analize Fuel Stock History</button>
                </div>
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/notepad.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Manager/Add_report';">Add Daily Report</button>
                </div>
            </div>


            <div class="users">
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/search.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Manager/Report_history';">View Report History</button>
                </div>
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/checkout.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Manager/View_order';">View Orders</button>
                </div>
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/worker.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Manager/View_pumper';">View Pumpers</button>
                </div>

            </div>
    </div>

</body>

</html>

