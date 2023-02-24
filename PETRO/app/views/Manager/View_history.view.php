<?php
$flag = '';
if (empty($data['error'])) {
    $flag = true;
} else {
    $flag = false;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PETRO</title>
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

                    <li><a href="<?php echo ROOT ?>/Manager/Home" class="logout">
                        <i class="fas fa-arrow-left"></i>
                        <span class="nav-item">Back</span>
                    </a></li>
            </ul>
        </nav>
    <div class="main">
    <div class="main-top">
                <h1>View & Analize Stock History</h1>
            </div>
            <br>
            <div class="wrapper">
                <div class="form-container">
                <div class="form-inner">
                <img src="<?php echo ROOT ?>/image/Manager/gas-price.png" alt="">
                    <form action="<?php echo ROOT?>/Manager/Change_Price/change_price" method="POST">
                <div class="field">
                    <input type="date" name="startDate" placeholder="Octane 92 Price">
                </div>
                <div class="field">
                    <input type="date" name="finishDate" placeholder="Octane 95 Price">
                </div>
    <br>
                <div class="btn">
                    <div class="btn-layer"></div>
                        <input type="submit" value="Submit">
                    </div>
            
                </div>
                
                </div>
            </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date & Time</th>
            <th>Fuel Type</th>
            <th>Amount</th>
        </tr>
        </thead>
    <tbody>
        <?php
if ($flag == true) {
    if (mysqli_num_rows($data['result']) > 0) {
        while ($row = mysqli_fetch_assoc($data['result'])) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["date_field"] . "</td><td>" . $row["fuel_type"] . "</td><td>" . $row["arrive_amount"] . "</td></tr>";
        }
    }
}
?>
    </tbody>
    </table>
    </div>

</body>

</html>