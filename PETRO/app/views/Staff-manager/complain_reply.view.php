
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Staff-manager/complain_reply.css" text="text/css">
    
   

    <title>AdminHub</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-gas-pump'></i>
            <span class="text">PETRO</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Home">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Assign_pumpper">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Assign Pumper</span>
                </a>
            </li>
            <li class="active">
                <a href="<?php echo ROOT ?>/Staff-manager/Complain">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">View & Responds to complaint</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/view_pumper">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">View Pumpers</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Pumper_registration">
                    <i class='bx bxs-group'></i>
                    <span class="text">Add Pumpers</span>
                </a>
            </li>
            <li >
                <a href="<?php echo ROOT ?>/Staff-manager/view_customer">
                    <i class='bx bxs-group'></i>
                    <span class="text">View Customer</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Salary_Rate">
                    <i class='bx bxs-group'></i>
                    <span class="text">Salary Percentage </span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
    
        
      
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
        <div class="head-title">
                <h2>Complain</h2>
        </div>
        <div class="table-data">
            <div class="order">
            <div class="head">
                        
                     
        </div>
            <div class="container3">
            
            <form action="<?php echo ROOT?>/Staff-manager/complain_reply/register" method="POST">
                <label for="fname">Complain ID:</label>
                <input type="text" id="com_id " name="com_id" value="COM<?php echo $data['com_id'] ?>" readonly>

            
                <label for="fname">Pumper ID:</label>
                <input type="text" id="user_id" name="user_id" value="<?php echo $data['user_id']?>" readonly>

            
                
                <label for="lname">Complain:</label>
                <input type="text" id="complain" name="complain" value="<?php echo $data['complain']?>"readonly>

                <label for="lname">Complained Date & Time:</label>
                <input type="text" id="date_time" name="date_time" value="<?php echo $data['date_time']?>" readonly>

                <label for="lname">Status:</label>
                <td><select class="com-status" name="status" selected value="<?php echo $data['status']?>">
                        <option value="">--Select Status--</option>
                        <option selected value="<?php echo $data['status']?>"><?php echo $data['status']?></option>
                        <?php
                            if($data['status'] == "Pending"){ ?>
                                <option value="Viewed">Viewed</option>
                                <option value="replied">Replied</option>
                        <?php   
                            } elseif ($data['status'] == "Viewed"){  ?> 

                                <option value="Pending">Pending</option>
                                <option value="Replied">Replied</option>
                        <?php       
                            }else {?> 
                                <option value="Viewed">Viewed</option>
                                <option value="Pending">Pending</option>
                        <?php } ?> 
                    </select>
                </td>
                <label for="subject">Response:</label>
                <?php
                    if($data['response']){ ?>
                        <textarea name="response" placeholder="<?php echo $data['response'] ?>" style="height:200px"><?php echo $data['response'] ?></textarea>
                <?php   
                    } else {  ?> 
                        <textarea name="response" placeholder="write Responses here......." style="height:200px" ></textarea>
                <?php       
                    } ?> 
                
                <input type="submit" value="Submit">
                
            </form>
        
            </div>
        </div>
                </div>
                <br>
                 

                    
            </div>
        </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


</body>

</html>
