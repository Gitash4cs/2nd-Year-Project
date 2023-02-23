<!-- // (change162) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/view_customer.css" text="text/css">
    <title>Pumper List</title>
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
    <div class="view-container">
        <div class="view-row">
            <div class="view-col">
                <div class="view-card">
                    <div class="view-card-header">
                        <h2> Details of Pumpers </h2>
                    </div>
                    <div class="view-card-body">
                        <table>
                            <tr>
                                <th> Pumper ID </th>
                                <th> First Name </th>
                                <th> Last Name </th>
                                <th> Phone Number </th>
                                <th> Email </th>
                                <th> View </th>
                                <th> Delete </th>
                            </tr>
                            <tr>
                            <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    
                                
                            ?>
                                <td> <?php echo $row['id'];?> </td>
                                <td> <?php echo $row['first_name'];?> </td>
                                <td> <?php echo $row['last_name'];?> </td>
                                <td> <?php echo $row['phone_no'];?> </td>
                                <td> <?php echo $row['email'];?> </td>
                                <td> <a href="" class="view">View</a> </td>
                                <td> <a href="">Delete</a> </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                    
                </div>
                <a href = "<?php echo ROOT ?>/Staff-manager/Home" class="btn">Back</a>
                <a href = "<?php echo ROOT ?>/Staff-manager/Pumper_registration" class="btn">Add Pumpers</a>
                
            </div>
        </div>
    </div>
</body>
</html>