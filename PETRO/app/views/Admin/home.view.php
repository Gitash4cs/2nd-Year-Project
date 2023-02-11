<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/home.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
            <li><a href="<?php echo ROOT ?>/Admin/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item"></span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Add D_Manager</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Add C_Manager</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">View D_Manager</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">View C_Manager</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">View Customer</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">View Complain</span>
                    </a></li>



                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Admin</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/manager.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Admin/Distribution/';">Distribution Manager</button>
                </div>
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/manager1.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Admin/Customer_manager/';">Staff Manager</button>
                </div>
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/file.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Admin/View_cus/';">View Staff Manager</button>
                </div>

            </div>

            <div class="users">
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/search.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Admin/View_dis/';">View Distribution manager Profiles</button>
                </div>
                <div class="card">
                    <img  src="<?php echo ROOT ?>/image/Manager/programmer.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Admin/P/';">View Customer</button>
                </div>
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/notepad.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Pumper/P/';">View Complain</button>
                </div>
            </div>


    </div>

</body>

</html>