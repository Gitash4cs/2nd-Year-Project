<?php
   if(empty($data['error'])){
    $data['error']=null;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/main1.css" />
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/change.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function test_str() {
            var res;
            var str =
                document.getElementById("t1").value;
            if (str.match(/[a-z]/g) && str.match(
                    /[A-Z]/g) && str.match(
                    /[0-9]/g) && str.match(
                    /[^a-zA-Z\d]/g) && str.length >= 8)
                res = "TRUE";
            else
                alert("Boundary rules are not matched!Check the conditions.");
        }
    </script>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
            <li><a href="<?php echo ROOT ?>/Admin/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item">Pasindu</span><br>
                        <span class="nav-item"></span>
                    </a></li>

                 
           
                <li><a href="<?php echo ROOT ?>/Pumper/Working">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Working Report</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Pumper/Working_hours">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Working Hours</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Pumper/Working_salary">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Salary Report</span>
                    </a></li>
                    <li><a href="<?php echo ROOT ?>/Pumper/Change_password">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Change Password</span>
                    </a></li>



                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
        

        <div class="change">
            <form  method="POST" action="<?php echo ROOT ?>/Pumper/Reset/details">
            <br>
            <h2> Change Password</h2><br><br>
                <p>New password<br/>
                <input type="password" class="box"name="new_password" id="t1" required/>
                </p>
                <p>Confirm password<br />
                <input type="password" class="box"name="confirm_password" required/>
                </p>
                <div class="list">
                    <ul type="Square">
                            <li>At least 1 uppercase character.</li>
                            <li>At least 1 lowercase character.</li>
                            <li>At least 1 digit.</li>
                            <li>At least 1 special character.</li>
                            <li>Minimum 8 characters.</li>

                    </ul>
                </div>
                <label class="error"><?php echo $data['error'] ?></label><br><br>
                <button name="submit" type="submit" onclick="test_str()">Save Password</button>
              
            </form>
        </div>


  </div>
</div>






</body>

</html>