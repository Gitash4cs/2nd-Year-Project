<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <!-- css for icon -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/assign_pumpper.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
            <li class="active">
                <a href="<?php echo ROOT ?>/Staff-manager/Assign_pumpper">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Assign Pumper</span>
                </a>
            </li>
            <li>
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
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <h3><?php echo $_SESSION['manager_name']," ",$_SESSION['manager_name_Last']?></h3>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="<?php echo ROOT ?>/image/proIcon.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Assign Pumper</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo ROOT ?>/Staff-manager/Home">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">View Customer</a>
                        </li>
                    </ul>
                </div>
            
            </div>

            <div class="table-data">
                <div class="todo">
                        
                        <form action="<?php echo ROOT ?>/Staff-manager/Assign_pumpper/assign" method="post" class="form-inner">                    
                            <div >
                                <h2>Select Pump Mashine</h2>
                                <select class="form-select" name="pumperMashine" selected value="<?php echo $data["PumpID"]?>">
                                    <option value="">--Pump Mashine--</option>
                                    <?php
                                        while($rows = mysqli_fetch_array($data['result'])){
                                            echo "<option value='".$rows['PumpID']."'>".$rows['PumpID']."</option>";
                                        }
                                    ?>  
                                </select>
                            </div>
                            <div>
                                <h2>Select a Pumper</h2>
                                <select class="form-select" name="pumperid" selected value="<?php echo $data["id "]?>">
                                    <option value="">--Pumper ID--</option>
                                    <?php
                                        while($rows = mysqli_fetch_array($data['resultPumper'])){
                                            echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                        }
                                    ?> 
                                    <option value="remove" name='remove'>Remove Pumper</option> 
                                </select>
                            </div>
                            <br>
                            <div class="btn">
                            <div class="btn-layer"></div>
                                <input type="submit" name="submit" value="Assign" >
                            </div>
                        </form>

                       

                   
                    
                </div>
                
                <div class="todo">
                    <br>
                    <div class="flex-container">
                        
                        <h2>Total Pumpers count &nbsp : &nbsp </h2> <?php
                            $totalpumper = $this->order->pumpercount();
                            echo "<h2 value>'"  .$totalpumper."'</h2>"; 
                        ?> 
                    </div>
                    <br>
                    <div class="flex-container">
                        <h2>Total Assigned Pumpers count &nbsp : &nbsp </h2> <?php
                            $totalpumper = $this->order->activepumpercount();
                            echo "<h2 value>'"  .$totalpumper."'</h2>"; 
                        ?>
                    </div>
                </div>
                        
            </div>

        

            <div class="table-data">
                <div class="todo">  
                    <h2>Petrol Machine 01</h2>
                    <ul class="box-info">
                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 01 (P001)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('P001');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span></li>
                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 02 (P002)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('P002');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span></li>
                    </ul> 
                </div>

                <div class="todo">  
                    <h2>Petrol Machine 02</h2>
                    <ul class="box-info">
                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 03 (P003)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('P003');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span>
                        </li>
                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 04 (P004)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('P004');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span>
                    </li>

                    </ul>
                </div>
            </div>


            <br><br>

            <div class="table-data">
                <div class="todo">  
                    <h2>Diesel Machine 01</h2>
                    <ul class="box-info">

                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 01 (D001)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('D001');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span>
                        </li>
                    <li>
                    
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 02 (D002)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('D002');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span>
                    </li> 
                </div>
                <div class="todo">  
                    <h2>Diesel Machine 02</h2> 
                    <ul class="box-info">

                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 03 (P003)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('D003');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span>
                        </li>
                    <li>
                        <i class='bx bxs-gas-pump'></i>
                        <span class="text">
                            <h3>Pump 04 (D004)</h3>
                            <p><?php
                                    $assignedpumper = $this->order->show_assign_pumpper('D004');
                                    echo "<p value>'".$assignedpumper."'</p>"; 
                                ?>
                            </p>
                        </span>
                    </li>
                    </ul>
                </div>
            </div>

            

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="<?php echo ROOT ?>/CSS/Staff-manager/script.js"></script>
</body>
</html>