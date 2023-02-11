<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/Edit_profile.css" text="text/css">
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
        <a href="#" class="cnt"><button>CONTACT</button></a>
    </header>

    <!-- if found a given user id -->
    <?php if(!empty($data)): ?>
        <div class="profile-container">
            <div class = "img-container">
                <img src="http://localhost/PETRO/public/image/noprofile.png" class="pro-img" style ="width:180px; height:180px; object-fit:cover;">
                <div class="upload-btn-wrapper">
                    <button class="file-btn">Change profile Picture</button>
                    <input onchange="display_image(this.files[0])"  type="file" name="myfile" />
                </div>
                
            </div>
            <div class = "table-content">
                <form action="<?php echo ROOT ?>/Staff-manager/Edit_profile/submit_edit" method="post">
                    <table>
                        <h1>Edit Profile
                        <!-- print error massage -->
                        <?php
                        if(isset($data['error'])){   
                            echo '<span class="errorMsg"> : '.$data['error'].'</span>';
                        };
                        ?> </h1>
                        <tr><th>First name</th>
                            <td><input value="<?php echo $data['first_name']?>" type="text" class="form-control" name="firstName" placeholder="Change First name"></td></tr>
                        <tr><th>Last name</th>
                            <td><input value="<?php echo $data["last_name"]?>" type="text" class="form-control" name="lastName" placeholder="Change Last name"></td></tr>
                        <tr><th>Phone Number</th>
                            <td><input value="<?php echo $data["phone_no"]?>" type="text" class="form-control" name="phoneNumber" placeholder="Change Phone number"></td></tr>
                        <tr><th>NIC</th>
                            <td><input value="<?php echo $data["nic" ]?>" type="text" class="form-control" name="nic" placeholder="Change NIC"></td></tr>
                        <tr><th>Gender</th>
                            <td><select class="profile-gender" name="gender" selected value="<?php echo $data["gender"]?>">
                                <option value="">--Select Gender--</option>
                                <option selected value="<?php echo $data["gender"]?>"><?php echo $data["gender"]?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select></td></tr>
                        <tr><th>Password</th>
                            <td><input type="password" class="form-control" name="password" placeholder="Change password (Leave empty to keep old password)"></td></tr>
                        <tr><th>retype Password</th>
                            <td><input type="password" class="form-control" name="retype_password" placeholder="Retype new password"></td></tr>
                    </table>
                    <div>
                        <a href="<?php echo ROOT ?>/Staff-manager/Profile" class="back-button">
                            <lable>back</lable>
                        </a>
                        <input type="submit" name="submit" value="Save" class="save-btn">
                    </div>
                </form>
            </div>
        </div>

    <?php else: ?>

        <div> That profile was not found</div>

    <?php endif; ?>  

</body>
</html>