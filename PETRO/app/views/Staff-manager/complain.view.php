<?php
   if(!empty($data)){
    $count1=$data['result1'];
    $count2=$data['result2'];
    $count3=$data['result3'];
   }
   
        
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/view_customer.css" />
    <!-- Font Awesome Cdn Link -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>View & Responds to complaint</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo ROOT ?>/Staff-manager/Home">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">View & Responds to complaint</a>
                        </li>
                    </ul>
                </div>
            
            </div>

            <div class="table-data">
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
                        <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($data['result'])){
                                
                        ?>
                            <td name="com-id"> COM<?php echo $row['com_id'];?> </td>
                                <td> <?php echo $row['user_id'];?> </td>
                                <td> <?php echo $row['complain'];?> </td>
                                <td> <?php echo $row['date_time'];?> </td>
                                <td> <?php echo $row['status'];?> </td>
                                <!-- <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                                    <option value="">--Select Status--</option>
                                    <option selected value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
                                    <?php
                                        if($row['status'] == "Pending"){ ?>
                                            <option value="Viewed">Viewed</option>
                                            <option value="replied ">Replied</option>
                                    <?php   
                                        } elseif ($row['status'] == "Viewed"){  ?> 

                                            <option value="Viewed">Pending</option>
                                            <option value="replied ">Replied</option>
                                    <?php       
                                        }else {?> 
                                            <option value="Viewed">Viewed</option>
                                            <option value="replied ">Pending</option>
                                    <?php } ?> 

                                </select></td> -->
                                <td><button value="<?php echo $row['com_id'];?>" onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/Complain_reply?com_id=<?php echo $row['com_id'];?>';">Add Response</button></td>
                        </tr>
                        <?php
                            }
                        ?>
                </table>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                                <canvas id="myChart" style="width:100%;max-width:500px"></canvas>
                                <script>

                                    
                                    window.onload=function(){
                                        var x1 =" <?php echo "$count1" ; ?>";
                                        var x2 =" <?php echo "$count2" ; ?>";
                                        var x3 =" <?php echo "$count3" ; ?>";
                                       

                                    var xValues = ["Viewed", "Pending", "Replied"];
                                    var yValues = [ x1,x2,x3,0];
                                    var barColors = ["#43A6C6", "#296E85","#8AC7DB","#091d2a","#091d2a"];

                                    var chart2=new Chart("myChart", {
                                    type: "bar",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                        }]
                                    },
                                    options: {
                                        legend: {display: false},
                                        title: {
                                        display: true,
                                        text: "PERCENTAGES OF PAYMENT"
                                        }
                                    }
                                    });
                                }
                                chart2.render();
                                </script>
                        
                    </div>
                    
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Todos</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>

                </div>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="<?php echo ROOT ?>/CSS/Staff-manager/script.js"></script>
</body>
</html>