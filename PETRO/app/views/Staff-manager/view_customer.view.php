<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/view.css" />
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
            <h1>View Pumper</h1>
        </div>
            <table class="table">
                <thead>
                            <tr>
                                <th> Customer ID </th>
                                <th> First Name </th>
                                <th> Last Name </th>
                                <th> Phone Number </th>
                                <th> Email </th>
                                <th> Number of Vehicles </th>
                                <th> View </th>
                                <th> Delete </th>
                            </tr>
                </thead>
                            <tr>
                            <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    
                            ?>
                                <td> <?php echo $row['id'];?> </td>
                                <td> <?php echo $row['first_name'];?> </td>
                                <td> <?php echo $row["last_name"];?> </td>
                                <td> <?php echo $row["phone_no"];?> </td>
                                <td> <?php echo $row["email"];?> </td>
                                <td> <?php echo $row["own_vehicles"];?> </td>
                                <td> <button>View</button> </td>
                                <td> <button>Delete</button></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                    
                </div>
                <a href = "<?php echo ROOT ?>/Staff-manager/Home" class="btn">Back</a>
                
            </div>
        </div>
    </div>
</body>
</html>