<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/profile.css" />
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
    <!-- if found a given user id -->
    
    <?php if(!empty($data)): ?> 

     
               
                <section class="main">
            <div class="main-top">
                <h1>View Profile</h1>
            </div><br><br>
            <div class="wrapper">
                <div class="form-container">
                    <h1><span><?php echo $data["first_name"]. " ".$data["last_name"]?><span></h1>
                <div class="form-inner">
                    
                    <?php echo "<img src='http://localhost/PETRO/public/image/noprofile.png' style ='width:180px; height:180px; object-fit:cover;''>" ?>
           
                <table>
                    
                    <tr><th>ID </th><td><?php echo $data["id" ]?>  </td></tr>
                    <tr><th>First name</th><td><?php echo $data["first_name"]?>  </td></tr>
                    <tr><th>Last name</th><td><?php echo $data["last_name"]?>  </td></tr>
                    <tr><th>Email</th><td><?php echo $data["email" ]?> </td></tr>
                    <tr><th>NIC</th><td><?php echo $data["nic" ]?>  </td></tr>
                    <tr><th>Phone Number</th><td><?php echo $data["phone_no"]?>  </td></tr>
                    <tr><th>Gender</th><td><?php echo $data["gender"]?>  </td></tr>
                </table>
            </div>
            <a href="<?php echo ROOT ?>/Staff-manager/Edit_profile">
                        <button >Edit</button>
            </a>
        </div>

    <?php else: ?>

        <div> That profile was not found</div>

    <?php endif; ?>

</body>
</html>