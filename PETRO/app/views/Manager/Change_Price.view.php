
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Update Fuel Availability</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/price.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                    <li><a href="<?php echo ROOT ?>/Manager/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item"></span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Update">
                        <i class="fas fa-gas-pump"></i>
                        <span class="nav-item">Update Fuel</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/View_history">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Analize</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Add_report">
                        <i class="fas fa-notes-medical"></i>
                        <span class="nav-item">Daily Report</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/Report_history">
                        <i class="fas fa-history"></i>
                        <span class="nav-item">Report History</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/View_order">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="nav-item">View Orders</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Manager/View_pumper">
                        <i class="fas fa-male"></i>
                        <span class="nav-item">View Pumper</span>
                    </a></li>

                    <li><a href="<?php echo ROOT ?>/Manager/Update" class="logout">
                        <i class="fas fa-arrow-left"></i>
                        <span class="nav-item">Back</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Change Prices</h1>
            </div><br><br>
            <div class="wrapper">
                <div class="form-container">
                <div class="form-inner">
                <img src="<?php echo ROOT ?>/image/Manager/gas-price.png" alt="">
                    <form action="<?php echo ROOT?>/Manager/Change_Price/change_price" method="POST">
                <div class="field">
                    <input type="number" name="octane_92" placeholder="Octane 92 Price">
                </div>
                <div class="field">
                    <input type="number" name="octane_95" placeholder="Octane 95 Price">
                </div>
                <div class="field">
                    <input type="number" name="super_diesel" placeholder="Super Diesel Price">
                </div>
                <div class="field">
                    <input type="number" name="auto_diesel" placeholder="Auto Diesel Price">
                </div>
                <br>

                <input type="checkbox" required class="checkbox">
                <span class="span">Confirm details</span>
                <br>
                <div class="btn">
                    <div class="btn-layer"></div>
                        <input type="submit" value="Submit">
                    </div>
            
                </div>
                
                </div>
            </div>

            <section class="attendance">
        <div class="attendance-list">
          <h1>Price History</h1>
          <table class="table">
            <thead>
              <tr>

                <th>Date</th>
                <th>Time</th>
                <th>Fuel Type</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>Octane 95</td>
                <td> Rs.340.00</td>
              </tr>
              <tr class="active">
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>Octane 92</td>
                <td> Rs.340.00</td>
              </tr>
              <tr>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>Super Diesel</td>
                <td> Rs.340.00</td>
              </tr>
              <tr>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>Auto Diesel</td>
                <td> Rs.340.00</td>
              </tr>
              <!-- <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
            
</body>

</html>

