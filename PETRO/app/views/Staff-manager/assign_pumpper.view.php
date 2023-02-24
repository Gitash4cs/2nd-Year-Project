<?php
$content = "";

while($rows = mysqli_fetch_array($data['result'])){
    $content = $content . "<option value='".$rows['id']."'>".$rows['id']."</option>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assign pumper</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/home.css" text="text/css">
</head>
<body>
    <header>
        <img class="logo" src="<?php echo ROOT ?>/image/petro1.png" alt="logo">
        <Nav>
            <ul class="nav_link">
                <li><a href="#">HOME</a></li>
                <li><a href="#">AVAILABILITY</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </Nav>
        <a href="#" class="cnt"><button>CONTACT</button></a>
    </header>
    <section class="mashine-cat">
        <h1><span> Assign pumper to pumper mashine </span></h1>

        <div class= "cat-list-all">
            <div class = "mashine-container" style =' object-fit:cover;'>
                <div class="cat-list">
                <h3>Petrol Machine 01</h3>
                <table>
                    <tr>
                        <th>Pump 01</th>
                        <th>Pump 02</th>
                    </tr>
                    <tr>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <?php

                                echo $content;
                                // while($rows = mysqli_fetch_array($data['result'])){
                                //     echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                // }
                            ?>         
                            </select>
                        </td>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <?php

                                echo $content;
                                // while($rows1 = mysqli_fetch_array($data['result'])){
                                //     echo "<option value='".$rows1['id']."'>".$rows1['id']."</option>";
                                // }
                            ?>          
                            </select>
                        </td>
                    </tr>
                </table>
                </div>     
            </div>

            <div class = "mashine-container" style ='object-fit:cover;'>
                <div class="cat-list">
                <h3>Petrol Machine 02</h3>
                <table>
                    <tr>
                        <th>Pump 01</th>
                        <th>Pump 02</th>
                    </tr>
                    <tr>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <option value='PUM789'>PUM789</option>";
                            <option value='PUM790'>PUM790</option>";
                            <option value='PUM791'>PUM791</option>";
                            <option value='PUM792'>PUM792</option>";
                            <!-- <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?>         -->
                            </select>
                        </td>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <option value='PUM789'>PUM789</option>";
                            <option value='PUM790'>PUM790</option>";
                            <option value='PUM791'>PUM791</option>";
                            <option value='PUM792'>PUM792</option>";
                            <!-- <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?>         --> 
                            </select>
                        </td>
                    </tr>
                </table>
                </div>     
            </div>
            
        
        </div>

        <div class= "cat-list-all">
            <div class = "mashine-container" style = object-fit:cover;'>
                <div class="cat-list">
                <h3>Diesel Machine 01</h3>
                <table>
                    <tr>
                        <th>Pump 01</th>
                        <th>Pump 02</th>
                    </tr>
                    <tr>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <option value='PUM789'>PUM789</option>";
                            <option value='PUM790'>PUM790</option>";
                            <option value='PUM791'>PUM791</option>";
                            <option value='PUM792'>PUM792</option>";
                            <!-- <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?>         -->
                            </select>
                        </td>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <option value='PUM789'>PUM789</option>";
                            <option value='PUM790'>PUM790</option>";
                            <option value='PUM791'>PUM791</option>";
                            <option value='PUM792'>PUM792</option>";
                            <!-- <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?>         --> 
                            </select>
                        </td>
                    </tr>
                </table>
                </div>     
            </div>

            <div class = "mashine-container" style =' object-fit:cover;'>
                <div class="cat-list">
                <h3>Diesel Machine 02</h3>
                <table>
                    <tr>
                        <th>Pump 01</th>
                        <th >Pump 02</th>
                    </tr>
                    <tr>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <option value='PUM789'>PUM789</option>";
                            <option value='PUM790'>PUM790</option>";
                            <option value='PUM791'>PUM791</option>";
                            <option value='PUM792'>PUM792</option>";
                            <!-- <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?>         -->
                            </select>
                        </td>
                        <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                            <option value="">--assign pumper--</option>
                            <option value='PUM789'>PUM789</option>";
                            <option value='PUM790'>PUM790</option>";
                            <option value='PUM791'>PUM791</option>";
                            <option value='PUM792'>PUM792</option>";
                            <!-- <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    echo "<option value='".$rows['id']."'>".$rows['id']."</option>";
                                }
                            ?>         --> 
                            </select>
                        </td>
                    </tr>
                </table>
                </div>     
            </div>
        </div>
        <a href = "<?php echo ROOT ?>/Staff-manager/Home" class="btn">Back</a>
    </section>
</body>
</html>