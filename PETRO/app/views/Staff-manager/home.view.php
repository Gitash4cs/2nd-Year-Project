<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Manager</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/home.css" text="text/css">
</head>
<body>
    <header>
        <img class="logo" src="<?php echo ROOT ?>/image/petro1.png" alt="logo">
        <Nav>
            <ul class="nav_link">
                <li><a href="home.php">HOME</a></li>
                <li><a href="#">AVAILABILITY</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </Nav>
        <a href="<?php echo ROOT ?>/staff-manger/logout" class="cnt"><button>LOGOUT</button></a>
    </header>
    
    <div class="container">
        <div class = "content">
            <h3> Hi, <span>Staff Manager</span></h3>
            <h1>Welcome<span> <?php echo $_SESSION['manager_name'] ?></span></h1>
            
            <p>This is an Staff Manger Page</p>
            <a href = "<?php echo ROOT ?>/Staff-manager/Profile" class="btn">My Profile</a>
            <a href = "<?php echo ROOT ?>/Staff-manager/view_pumper" class="btn">View Pumpers</a>
            <a href = "<?php echo ROOT ?>/Staff-manager/view_customer" class="btn">View Customer</a>
            <a href = "<?php echo ROOT ?>/Staff-manager/Complain" class="btn">Complaint</a>
            <a href = "assign_pumpper.php" class="btn">Assign Pumper</a>
        </div>
    </div>



</body>
</html>