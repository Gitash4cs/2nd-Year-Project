<?php
    $flag='';
    if(empty($data['error'])){
        $flag=true;
    }
    else{
        $flag=false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


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
                <a href="<?php echo ROOT ?>/Manager/Home">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li >
                <a href="<?php echo ROOT ?>/Manager/Update">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Update Fuel Details</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Manager/View_history">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Manager/Add_report">
                <i class='bx bxs-report'></i>
                    <span class="text">Add Daily Report</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Manager/Report_history">
                <i class='bx bx-history'></i>
                    <span class="text">Report History</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT ?>/Manager/View_order">
                    <i class='bx bxs-group'></i>
                    <span class="text">View Orders</span>
                </a>
            </li>
            <li>
                <a href=View_pumper>
                    <i class='bx bxs-group'></i>
                    <span class="text">View Pumpers</span>
                </a>
            </li>
            <li class="active">
                <a href="Product">
                    <i class='bx bxs-group'></i>
                    <span class="text">Add Products</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Product History</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                <i class='bx bx-left-arrow-circle bx-fade-left-hover'></i>
                    <span class="text">Back</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle bx-fade-left-hover'></i>
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

            <form action="#">
                <div class="form-input">


                    <button type="submit"><i class='bx bx-search'></i></button>
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
                    <h1>Add Products</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Add Products</a>
                        </li>
                        <!--li><i class='bx bx-chevron-right'></i></li-->

                    </ul>
                </div>

            </div>



            <div class="table-data">
                <div class="todo">
                <div class="head">
                        <h3>Update Availability</h3>

                    </div>
                <div class="form-inner">
                                <form action="<?php echo ROOT?>/Manager/Product/New_product" method="POST">
                                <div class="field">
                                    <input type="text" name="product" placeholder="Name of the product">
                                    </div>
                                    <div class="field">
                                    <input type="textarea" name="description" placeholder="Description">
                                    </div>
                                    <div class="field">
                                    <input type="number" name="quantity" placeholder="Quantity">
                                    </div>
                                    <div class="field">
                                    <input type="number" name="price" placeholder="Price">
                                    </div>
                                    <input type="checkbox" required class="checkbox1">
                                <span class="span">Confirm details</span><br>
                                    <br>
                                    <div class="btn">
                                        <div class="btn-layer"></div>
                                        <input type="submit" value="Add">
                                    </div>
                            </div>
                            <br>

                </div>



        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script>
            document.getElementById("id").disabled = false;
            document.getElementById("name").disabled = false;
            document.getElementById("image").disabled = false;
            

            var dis1 = document.getElementById("id");
            var dis2 = document.getElementById("name");
            dis1.onchange = function () {
                if (this.value != "" || this.value.length > 0) {
                    document.getElementById("name").disabled = true;
                    document.getElementById("image").disabled = true;
                    
                }
            }

            dis2.onchange = function () {
                if (this.value != "" || this.value.length > 0) {
                    document.getElementById("id").disabled = true;
                    document.getElementById("image").disabled = false;
                    
                }
            }
        </script>
    <script src="<?php echo ROOT ?>/JS/Manager/script.js"></script>

</body>

</html>