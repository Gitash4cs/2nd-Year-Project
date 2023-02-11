
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Fuel</title>
    <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Manager/fuel.css">

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
            <form action="<?php echo ROOT?>/Manager/Octane_95/add95" method="POST">
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