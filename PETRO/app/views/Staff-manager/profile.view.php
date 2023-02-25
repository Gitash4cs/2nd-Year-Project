
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/profile.css" text="text/css">
</head>
<body>
    <header>
        <img class="logo" src="<?php echo ROOT ?>/image/petro1.png" alt="logo">
        <Nav>
            <ul class="nav_link">
                <li><a href="#">HOME</a></li>
                <li><a href="#">AVAILABILITY</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </Nav>
        <a href="<?php echo ROOT ?>/Staff-manager/Logout" class="cnt"><button>LOGOUT</button></a>
    </header>
    <!-- if found a given user id -->
    
    <?php if(!empty($data)): ?> 

        <div class="profile-container">
            <div class = "img-container">
                <?php echo "<img src='http://localhost/PETRO/public/image/noprofile.png' style ='width:180px; height:180px; object-fit:cover;''>" ?>
                <div class="profile-btn">
                    <a href="<?php echo ROOT ?>/Staff-manager/Edit_profile">
                        <button >Edit</button>
                    </a>
                    <a href="../logout.php">
                        <button >Logout</button>
                    </a>
                </div>
                
            </div>
            <div class = "table-content">
                <table>
                    <h1><span><?php echo $data["first_name"]. " ".$data["last_name"]?><span></h1>
                    <tr><th>ID </th><td><?php echo $data["id" ]?></td></tr>
                    <tr><th>First name</th><td><?php echo $data["first_name"]?></td></tr>
                    <tr><th>Last name</th><td><?php echo $data["last_name"]?></td></tr>
                    <tr><th>Email</th><td><?php echo $data["email" ]?></td></tr>
                    <tr><th>NIC</th><td><?php echo $data["nic" ]?></td></tr>
                    <tr><th>Phone Number</th><td><?php echo $data["phone_no"]?></td></tr>
                    <tr><th>Gender</th><td><?php echo $data["gender"]?></td></tr>

                </table>
                <div>
                    <a href="<?php echo ROOT ?>/Staff-manager/Home" class="back-button">
                        <lable>back</lable>
                    </a>
                </div>
            </div>
        </div>

    <?php else: ?>

        <div> That profile was not found</div>

    <?php endif; ?>

</body>
</html>