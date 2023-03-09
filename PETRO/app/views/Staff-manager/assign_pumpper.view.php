
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assign pumper</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/assign_pumpper.css" text="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
</head>
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
        <section class="main">
            <div class="main-top">
                <h1>Register Pumper</h1>
            </div><br><br>
            <div>
                <form action="<?php echo ROOT ?>/Staff-manager/Assign_pumpper/assign" method="post">                    
                    <div>
                        <h2>Select Pumper Mashine</h2>
                        <select class="profile-gender" name="pumperMashine" selected value="<?php echo $data["MashineID"]?>">
                            <option value="">--Pumper Mashine--</option>
                            <?php
                                while($rows = mysqli_fetch_array($data['result'])){
                                    echo "<option value='".$rows['MashineID']."'>".$rows['MashineID']."</option>";
                                }
                            ?>  
                        </select>
                    </div>
                    <div>
                        <h2>Select a Pumper</h2>
                        <select class="profile-gender" name="pumperid" selected value="<?php echo $data["id "]?>">
                            <option value="">--Pumper ID--</option>
                            <?php
                                while($rows = mysqli_fetch_array($data['resultPumper'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?> 
                            <option value="remove" name='remove'>Remove Pumper</option> 
                        </select>
                    </div>
                    
                    <div class="btn">
                    <div class="btn-layer"></div>
                        <input type="submit" name="submit" value="Assign" >
                    </div>
                </form>
            </div>

            <div class="users">
                <div class="card">
                <h3>Petrol Machine 01</h3>

                    <div class="per">
                    <table>
                    <tr>
                        <th>Pump 01 (P001)</th>
                        <th>Pump 02 (P002)</th>
                    </tr>
                    <br><br>
                    <tr>
                        <!-- Display assigned pumper for mashine-->
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('P001');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('P002');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                    </tr>
                </table>
                    </div>
                    
                </div>
                <div class="card">
                <h3>Petrol Machine 02</h3>

                    <div class="per">
                    
                <table>
                    <tr>
                        <th>Pump 01 (P003)</th>
                        <th>Pump 02 (P004)</th>
                    </tr>
                    <br><br>
                    <tr>
                        <!-- Display assigned pumper for mashine-->
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('P003');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('P004');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                    </tr>
                </table>
                    </div>
                    
                </div>
            </div>


            <div class="users">
                
                <div class="card">
                <h3>Diesel Machine 01</h3>

                    <div class="per">
                    
                <table>
                    <tr>
                        <th>Pump 01 (D001)</th>
                        <th>Pump 02 (D002)</th>
                    </tr>
                    <br><br>
                    <tr>
                        <!-- Display assigned pumper for mashine-->
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('D001');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('D002');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                    </tr>
                </table>
                    </div>
                    
                </div>
                <div class="card">
                <h3>Diesel Machine 02</h3>

                    <div class="per">
                    
                <table>
                    <tr>
                        <th>Pump 01 (D003)</th>
                        <th>Pump 02 (D004)</th>
                    </tr>
                    <br><br>
                    <tr>
                        <!-- Display assigned pumper for mashine-->
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('D003');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                        <td>
                            <?php
                                $assignedpumper = $this->order->show_assign_pumpper('D004');
                                echo "<p value>'".$assignedpumper."'</p>"; 
                            ?>          
                        </td>
                    </tr>
                </table>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>



</body>
</html>