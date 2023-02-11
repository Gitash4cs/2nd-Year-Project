<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Update Fuel Availability</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Manager/update_fuel.css" />
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
                <li><a href="<?php echo ROOT ?>/Manager/Analize">
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
                    </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Update Fuel Availability</h1>
            </div>
        <form action="<?php echo ROOT?>/Manager/Analize/Analize" method="post">
            <label for="" class="label">From</label>
            <input type="date" class="input" name="startDate">
            <br>
            <br>
            <label for="" class="label">to</label>
            <input type="date" class="input" name="finishDate">
            <br>
            <br>
            <div>
                <a href=""><button type="onclick" class="button">Analize</button></a>
            </div>
        </form>
            </div>


    <!--div>
        <img src="images/pie.jpeg" alt="" class="image">
    </div-->
<div class="container">
    <div class="chartBox">
        <canvas id="myChart"></canvas>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

console.log(<?php echo json_encode($total_O92);?>);
console.log(<?php echo json_encode($total_O95);?>);
console.log(<?php echo json_encode($total_sdl);?>);
console.log(<?php echo json_encode($total_adl);?>);

const O92 = <?php echo json_encode($total_O92);?>;
const O95 = <?php echo json_encode($total_O95);?>;
const SDL = <?php echo json_encode($total_sdl);?>;
const ADL = <?php echo json_encode($total_adl);?>;

const data = {
labels: ['Octane 92', 'Octane 95', 'Super Diesel', 'Auto Diesel'],
      datasets: [{
        label: 'No of Liters Arrived',
        data: [O92,O95,SDL,ADL],
        borderWidth: 1
      }]
    };

const config = {
    type: 'bar',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
};

 const myChart = new Chart(
    document.getElementById('myChart'),
    config
 );
</script>
</div>

</body>

</html>