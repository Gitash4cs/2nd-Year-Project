<?php
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $arrive_amount = $_POST['arrive_amount'];
        $eligible_amount = $_POST['eligible_amount'];
        $price = $_POST['price'];
        $remain_amount = $arrive_amount - $eligible_amount;

        $fuel_id = "O95";
        $fuel_type = "octane 95";


        $query1 = "insert into fuel_availability (fuel_id,fuel_type) values ('$fuel_id','$fuel_type')";
        $query2 = "update fuel_availability SET eligible_amount = eligible_amount + $eligible_amount  WHERE fuel_id = 'O95' AND fuel_type = 'octane 95'";
        $query3 = "insert into fuel_stock (fuel_type,arrive_amount) values ('$fuel_type','$arrive_amount') ";
        $query4 = "update fuel_availability SET eligible_amount= 0 where eligible_amount IS NULL ";
        //$query5 = "update fuel_availability SET price = $price WHERE fuel_id = 'O95' AND fuel_type = 'octane 95'";
        $query6 = "update fuel_availability SET remain_amount = remain_amount + $remain_amount WHERE fuel_id = 'O95' AND fuel_type = 'octane 95'
        ";

        mysqli_query($con,$query1);
        mysqli_query($con,$query2);
        mysqli_query($con,$query3);
        mysqli_query($con,$query4);
        //mysqli_query($con,$query5);
        mysqli_query($con,$query6);

        header("Location: update_fuel.php");
        die;
        
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Fuel</title>
    <link rel="stylesheet" href="fuel.css">

</head>

<body>
    <div class="container">
        <h2 class="h2">Octane 95</h2>
        <h3 class="h3">
        <?php if(!empty($error)){
                        echo($error);
                    }
                    ?>
        </h3>
        <div>
            <form action="" method="POST">
                <div>
                    <label for="arrive_amount" class="label">Enter the number of liters arrived</label>
                    <input type="number" name="arrive_amount" class="input">
                </div>
                <br>
                <div>
                    <label for="eligible_amount" class="label">Enter the number of liters eligible</label>
                    <input type="number" name="eligible_amount" class="input">
                </div>
                <br>
                <input type="checkbox" required class="checkbox">
                <span class="span">Confirm details</span>
                <br>
                <br>
                <div>
                    <a href="update_fuel.php"><button type="submit" class="button">Add</button></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>