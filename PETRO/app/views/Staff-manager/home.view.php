<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Manager Home</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/home.css" text="text/css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="<?php echo ROOT ?>/Staff-manager/Profile" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/profile.jpg">
                        <span class="nav-item"><?php echo $_SESSION['manager_name'] ?></span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Staff-manager/home">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>


                <li><a href="<?php echo ROOT ?>/Home/Login" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>


        <section class="main">
        <div class="main-top">
                <h1>Staff Manager</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/assign.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/Assign_pumpper';">Assign Pumpers</button>
                </div>
                <div class="card">
                    <img  src="<?php echo ROOT ?>/image/Manager/man.png">

                    <div class="per">

                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/Complain';">View & Respond to Complaints</button>
                </div>
            </div>

            <div class="users">

                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/workers.png">
                    <div class="per">
                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/view_pumper';">View & Add Pumpers</button>
                </div>

                <div class="card">
                    <img src="<?php echo ROOT ?>/image/Manager/target.png">
                    <div class="per">
                    </div>
                    <button onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/view_customer';">View Customer</button>
                </div>
            </div>
        </div>
    </div>



</body>
</html>