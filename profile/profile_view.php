<?php

    @include '../config.php';
    session_start();
    //if user not logged in then redirect to the loggin page
    if(!is_logged_in()){
        redirect('../login_form.php');
    }

    //$id = $_GET['id'] ?? $_SESSION['PROFILE']['id'];

    $mng_id =  $_SESSION['manager_ID'];
    //database query for get record of given manager ID
    $select = "SELECT * FROM manager WHERE id = '$mng_id'" ;
    //Retrieving the records by given database query
    $retrive = mysqli_query($conn, $select);
    //Fetch rows from a result of given retrive record
    $row = mysqli_fetch_row($retrive);
    $img_path = get_image($row[0]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                <?php echo "<img src='./profile_img/".$img_path.".png' style ='width:180px; height:180px; object-fit:cover;''>" ?>
                <div class="profile-btn">
                    <a href="profile_edit.php">
                        <button >Edit</button>
                    </a>
                    <a href="../logout.php">
                        <button >Logout</button>
                    </a>
                </div>
                
            </div>
            <div class = "table-content">
                <table>
                    <h1><span><?php echo $row[1]. " ".$row[2]?><span></h1>
                    <tr><th>First name</th><td><?php echo $row[1]?></td></tr>
                    <tr><th>Last name</th><td><?php echo $row[2]?></td></tr>
                    <tr><th>Email</th><td><?php echo $row[7]?></td></tr>
                    <tr><th>NIC</th><td><?php echo $row[3]?></td></tr>
                    <tr><th>Gender</th><td><?php echo $row[6]?></td></tr>

                </table>
                <div>
                    <a href="../staffManager_page.php" class="back-button">
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