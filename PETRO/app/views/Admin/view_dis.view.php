<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Admin/email.css" text="text/css">
    <title>Document</title>
</head>
<body>
<div class="navbartop">
<p class="mail">petro@gmail.com &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="" class="petro">Petro.lk</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   0717787990</p>
	

</div>
<br><br>
<div class="header">
<h2>Distribution Manager Details</h2></div>
<div class="work">
            <table style="width:100%">
            <thead>
            <tr>
                <th>Manager ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>NIC</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <form action="<?php echo ROOT?>/Admin/View_dis" method="get">
        <?php
            if (mysqli_num_rows($data['result']) > 0) {
                while($row = mysqli_fetch_assoc($data['result'])) {
                    echo "<tr>
                    <td>".$row['distribution_manager_id']."</td>
                    <td>".$row['First_name']."</td>
                    <td>".$row['Last_name']."</td>
                    <td>".$row['NIC']."</td>
                    <td>".$row['email']."</td>
                    </tr>";
                }
            } else {
                echo "0 results";
            }
        ?>

        </tbody>
        </table>
        </form>
        <br>
        <div class="delete">
        <label for="delete">Remove Customer Manager:</label>
        <form action="<?php echo ROOT?>/Admin/Delete_dis" method="post">
            <br><input type="text" name="delete"  placeholder="Enter Manager ID" required></div><br>
            <div class="back"> <button type="submit">SUBMIT</button></div>
           
        </form>
    </div>
    <label class="error"><?php echo $data['error']?></label>&nbsp;<br><br>
        <div class="back">
        <a href="<?php echo ROOT ?>/Admin/Home" class="same">Back</a>
        </div>
    </div>
</body>
</html>