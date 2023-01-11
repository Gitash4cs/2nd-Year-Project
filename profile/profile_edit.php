<?php

    @include '../config.php';
    session_start();
    //if user not logged in then redirect to the loggin page
    if(!is_logged_in()){
        redirect('../login_form.php');
    }

    $mng_id =  $_SESSION['manager_ID'];
    //database query for get record of given manager ID
    $select = "SELECT * FROM manager WHERE id = '$mng_id'" ;
    //Retrieving the records by given database query
    $retrive = mysqli_query($conn, $select);
    //Fetch rows from a result of given retrive record
    $row = mysqli_fetch_row($retrive);

    $img_path = get_image($row[0]);
    

        
    //if submit the form
    if(isset($_POST['submit'])){

        //get user data and asign in to variables (escape special character)
       
        $fName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $nic = mysqli_real_escape_string($conn, $_POST['nic']);
        $phoneNo = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        
        
        //get hash value of the passwords
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
        $cpass = mysqli_real_escape_string($conn, $_POST['retype_password']);

        
        //check both password are match
        if($pass != $cpass){
            $error = 'Password not matched';
        }else{
            //update user record given data to the data base table
            if(!empty($_POST['password'])){
                $insert = "Update manager set first_name = '$fName', last_name = '$lName', nic = '$nic', phone_no = '$phoneNo', gender = '$gender', password = '$pass' where id = '$mng_id'";
            }else{
                $insert = "Update manager set first_name = '$fName', last_name = '$lName', nic = '$nic', phone_no = '$phoneNo', gender = '$gender' where id = '$mng_id'";
            }
            
            mysqli_query($conn, $insert);
            //redirect to the staff manager's page
            header('location:profile_view.php');
            
        };
        
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <img class="logo" src="../logo/petro1.png" alt="logo">
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
    <?php if(!empty($row)): ?>
        <div class="profile-container">
            <div class = "img-container">
                <img src="./profile_img/noprofile.png" class="pro-img" style ="width:180px; height:180px; object-fit:cover;">
                <div class="upload-btn-wrapper">
                    <button class="file-btn">Change profile Picture</button>
                    <input onchange="display_image(this.files[0])"  type="file" name="myfile" />
                </div>
                
            </div>
            <div class = "table-content">
                <form method="post">
                    <table>
                        <h1>Edit Profile
                        <!-- print error massage -->
                        <?php
                        if(isset($error)){   
                            echo '<span class="errorMsg"> : '.$error.'</span>';
                        };
                        ?> </h1>
                        <tr><th>First name</th>
                            <td><input value="<?php echo $row[1]?>" type="text" class="form-control" name="firstName" placeholder="Change First name"></td></tr>
                        <tr><th>Last name</th>
                            <td><input value="<?php echo $row[2]?>" type="text" class="form-control" name="lastName" placeholder="Change Last name"></td></tr>
                        <tr><th>Phone Number</th>
                            <td><input value="<?php echo $row[4]?>" type="text" class="form-control" name="phoneNumber" placeholder="Change Phone number"></td></tr>
                        <tr><th>NIC</th>
                            <td><input value="<?php echo $row[3]?>" type="text" class="form-control" name="nic" placeholder="Change NIC"></td></tr>
                        <tr><th>Gender</th>
                            <td><select class="profile-gender" name="gender" selected value="<?php echo $row[6]?>">
                                <option value="">--Select Gender--</option>
                                <option selected value="<?php echo $row[6]?>"><?php echo $row[6]?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select></td></tr>
                        <tr><th>Password</th>
                            <td><input type="password" class="form-control" name="password" placeholder="Change password (Leave empty to keep old password)"></td></tr>
                        <tr><th>retype Password</th>
                            <td><input type="password" class="form-control" name="retype_password" placeholder="Retype new password"></td></tr>
                    </table>
                    <div>
                        <a href="profile_view.php" class="back-button">
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

<script>
    function display_image(file){
        var img = document.querySelector(".pro-img");
        img.src = URL.createObjectURL(file);
    }

</script>