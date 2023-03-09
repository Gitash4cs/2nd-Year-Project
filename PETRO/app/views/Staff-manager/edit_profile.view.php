<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/pumper_registration.css" />
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
                <h1>Edit Profile</h1>
            </div><br><br>
            <div class="wrapper">
                <div class="form-container">
                <div class="form-inner">
                
                <?php echo "<img src='http://localhost/PETRO/public/image/noprofile.png' style ='width:180px; height:180px; object-fit:cover;''>" ?>
            
                <form action="<?php echo ROOT ?>/Staff-manager/Edit_profile/submit_edit" method="post">
                    <div class="field">
                    <input value="<?php echo $data['first_name']?>" type="text" name="firstName" placeholder="Change First name">
                    </div>
                    <div class="field">
                    <input value="<?php echo $data["last_name"]?>" type="text" name="lastName" placeholder="Change Last name">
                    </div>
                    <div class="field">
                    <td><input value="<?php echo $data["phone_no"]?>" type="text" name="phoneNumber" placeholder="Change Phone number">
                    </div>
                    <div class="field">
                    <input value="<?php echo $data["nic" ]?>" type="text" name="nic" placeholder="Change NIC">
                    </div><br>
                    <div>
                    <select class="profile-gender" name="gender" selected value="<?php echo $data["gender"]?>">
                            <option value="">--Select Gender--</option>
                            <option selected value="<?php echo $data["gender"]?>"><?php echo $data["gender"]?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                    <div class="field">
                    <input type="password" class="form-control" name="password" placeholder="Change password (Leave empty to keep old password)">
                    </div>
                    <div class="field">
                    <input type="password" class="form-control" name="retype_password" placeholder="Retype new password">
                    </div><br>
                    <div class="btn">
                    <div class="btn-layer"></div>
                        <input type="submit" name="submit" value="Save" >
                    </div>
                </form>
            </div>
        </div>

    <?php else: ?>

        <div> That profile was not found</div>

    <?php endif; ?>  

</body>
</html>