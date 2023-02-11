<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain</title>
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Staff-manager/complain.css" text="text/css">
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
                        <h2> List of Complaints </h2>
                    </div>
                    <div class="view-card-body">
                        <table class="com-table">
                            <tr>
                                <th> Complaint ID </th>
                                <th> Customer ID </th>
                                <th> Complaint </th>
                                <th> Date & Time </th>
                                <th> Status </th>
                                <th> Response </th>
                            </tr>
                            
                            <?php
                                while($row = mysqli_fetch_assoc($data['result'])){
                                    
                                
                            ?>
                                <td name="com-id"> <?php echo $row['com_id'];?> </td>
                                <td> <?php echo $row['customer_id'];?> </td>
                                <td> <?php echo $row['complain'];?> </td>
                                <td> <?php echo $row['date_time'];?> </td>
                                <td><select class="com-status" name="com-status" selected value="<?php echo $row['status']?>">
                                    <option value="">--Select Status--</option>
                                    <option selected value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
                                    <option value="Viewed">Pending</option>
                                    <option value="Viewed">Viewed</option>
                                    <option value="replied ">Replied </option>
                                </select></td>
                                <td><textarea value="<?php echo $row['response']?>" type="text" class="form-control" name="response" placeholder="Enter Response for complain"><?php echo $row['response']?></textarea></td>
                        
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                    
                </div>
                <a href = "<?php echo ROOT ?>/Staff-manager/Home" class="btn">Back</a>
                <a href = "<?php echo ROOT ?>/Staff-manager/Complain" class="btn" name="submit">Submit Response</a>
                
            </div>
        </div>
    </div>
</body>
</html>