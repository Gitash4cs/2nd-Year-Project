<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/complain.css" />
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

        <div class="main">

        <div class="main-top">
            <h1>View Complaint</h1>
        </div>
            <table class="table">
                <thead>
                            <tr>
                                <th> Complaint ID </th>
                                <th> Customer ID </th>
                                <th> Complaint </th>
                                <th> Date & Time </th>
                                <th> Status </th>
                                <th> Response </th>
                            </tr>
                </thead>
                            
                            <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    
                                
                            ?>
                                <td name="com-id"> <?php echo $row['com_id'];?> </td>
                                <td> <?php echo $row['customer_id'];?> </td>
                                <td> <?php echo $row['complain'];?> </td>
                                <td> <?php echo $row['date_time'];?> </td>
                                <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                                    <option value="">--Select Status--</option>
                                    <option selected value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
                                    <option value="Viewed">Pending</option>
                                    <option value="Viewed">Viewed</option>
                                    <option value="replied ">Replied </option>
                                </select></td>
                                <td><textarea value="<?php echo $row['response']?>" type="text" class="form-control" name="response" placeholder="Enter Response for complain"><?php echo $row['response']?></textarea></td>
                        
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <div>
                            <a href = "<?php echo ROOT ?>/Staff-manager/Complain" class="btn" name="submit">Submit Response</a>
                        </div>
                    </div>
        </div>
    </div>
</body>
</html>