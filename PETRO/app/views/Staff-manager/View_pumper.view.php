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
            <li>
                <a href="<?php echo ROOT ?>/Staff-manager/Complain">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">View & Responds to complaint</span>
                </a>
            </li>
            <li class="active">
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
                    <h1>View Pumpers</h1>
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
                <div class="order">
                    <div class="head">
                        <h3>Filter :</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <div class= "filter">
                        <Select name= "filter" id="filter">
                            <option vlaue="All Customers">All Pumper</option>
                            <option vlaue="Active">Active Pumper</option>
                            <option vlaue="Remove">Removed Pumper</option>

                        </Select>
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

            <div class="table-data">
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th> Pumper ID </th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Phone Number </th>
                            <th> Email </th>
                            <th style="display : none;"> Status</th>
                            <th> View </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                        <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($data['result'])){
                                
                        ?>
                            <td> <?php echo $row['id'];?> </td>
                            <td> <?php echo $row['fname'];?> </td>
                            <td> <?php echo $row["lname"];?> </td>
                            <td> <?php echo $row["phone"];?> </td>
                            <td> <?php echo $row["email"];?> </td>
                            <td style="display : none;"><?php echo $row["status"]==0 ?'Removed Pumper' : 'Active Pumper' ?>
                            <td> <button value="<?php echo $row['id'];?>" onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/View_pumper_Profile?pump_id=<?php echo $row['id'];?>';">View</button> </td>
                            <td>  <div class = "delete"><button value="<?php echo $row['email'];?>" onclick="window.location.href= '<?php echo ROOT ?>/Staff-manager/View_pumper/remove_pumper?pump_email=<?php echo $row['email'];?>';">Delete</button></div></td>
                        </tr>
                        <?php
                            }
                        ?>
                </table>
            </div>


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="<?php echo ROOT ?>/CSS/Staff-manager/script.js"></script>

    <script>
        //get action of the filter drop down
        let selectMenu = document.querySelector("#filter");
        //take recode of the output table
        let table = document.querySelector("#table");

        //do this when changes happen on filter drop down
        selectMenu.addEventListener('change',()=>{
        const searchTerm = selectMenu.value.toLowerCase();
        
        //when select All Pumper show all records
        if(searchTerm == "all pumper"){
            for (let i = 1; i < table.rows.length; i++) {
                const row = table.rows[i];
                row.style.display = '';
            }
        }else{
            //travel row by row
            for (let i = 1; i < table.rows.length; i++) {
                const row = table.rows[i];
                const cells = row.cells;
                let matchesSearch = false;
            
                //travel sell by sell in a row
                for (let j = 0; j < cells.length; j++) {
                const cell = cells[j];
                    //find the selected option is in the cells
                    if (cell.textContent.toLowerCase().includes(searchTerm)) {
                        matchesSearch = true;
                        break;
                    }
                }
        
                //founded rows print and other rows doesnt show
                if (matchesSearch) {
                row.style.display = '';
                } else {
                row.style.display = 'none';
                }
            }
        }
    
        
        });

    </script>
</body>
</html>