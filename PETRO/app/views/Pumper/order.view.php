<?php
    if($data['loading']=='1'){
        $data['pumped_liters']=null;
        $data['remaining_liters']=null;
        $data['price']=null;
        $data['balance']=null;
    }
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/Pumper/order.css" text="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Fuel Pumper</title>
    </head>
    <script>
        function validateForm() {
        var x = document.forms["myForm"]["pumped"].value;
            if (x == "" || x == null) {
                alert("Amount of the pumped liters must be filled out");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
    <body>



    <div class="container">
        <nav>
            <ul>
            <li><a href="<?php echo ROOT ?>/Admin/Home" class="logo">
                        <img src="<?php echo ROOT ?>/image/Manager/home-button.png">
                        <span class="nav-item">Pasindu</span><br>
                        <span class="nav-item"></span>
                    </a></li>

                 
           
                <li><a href="<?php echo ROOT ?>/Pumper/Working">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Working Report</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Pumper/Working_hours">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Working Hours</span>
                    </a></li>
                <li><a href="<?php echo ROOT ?>/Pumper/Working_salary">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Salary Report</span>
                    </a></li>
                    <li><a href="<?php echo ROOT ?>/Pumper/Change_password">
                        <i class="fas fa-star"></i>
                        <span class="nav-item">Change Password</span>
                    </a></li>



                <li><a href="#" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
        

        <div class="inline">
        <div class="header"><b>Order Details</b></div></div><div class="header1"><span class="tab"></span></div><br>
        <div class="table1">
        <div class="main1">
        <table id='display'>


        <div class="container2">

  <ul class="responsive-table">

    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Order ID</div>
    
      <div class="col col-4" data-label="Payment Status"><?php echo($_SESSION['order_id'])?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Vehicle No</div>

      <div class="col col-4" data-label="Payment Status"><?php echo $data["vehicle_no"] ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Vehicle Type</div>
   
      <div class="col col-4" data-label="Payment Status"><?php echo $data["class"] ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Fuel Type</div>
   
      <div class="col col-4" data-label="Payment Status"><?php echo $data["Fuel_Type"] ?></div>
    </li>
    
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Amount</div>

      <div class="col col-4" data-label="Payment Status"><?php echo $data["Amount"] ," Liters","<br>"; ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">Payment</div>
    
      <div class="col col-4" data-label="Payment Status">RS.<?php echo $data["payment"] ?></div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">PETRO Points</div>
    
      <div class="col col-4" data-label="Payment Status"><?php echo $data["points"]?></div>
    </li>
  </ul>
</div>

        
    
   
        </table>
        </div>
        <div class="main2">
          <br>
            <form name="myForm" action="<?php echo ROOT ?>/Pumper/Order/order_complete" onsubmit="return validateForm()" method="post" required >
            &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp  <label>Enter Liters:</label>&nbsp;&nbsp;&nbsp;
                <input class="textarea" type="number" name="pumped" />
                &nbsp&nbsp   <button type="submit" name="OK" id="ok" class="btn">Complete</button><br><br>
            </form>
          

            

        <div class="container2">

<ul class="responsive-table">


  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Pumped Liters</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['pumped_liters']?></div>
  </li>

  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Remaining Liters</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['remaining_liters']?></div>
  </li>

  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Price</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['price']?></div>
  </li>

  <li class="table-row">
    <div class="col col-1" data-label="Job Id">Account Balance</div>
  
    <div class="col col-4" data-label="Payment Status"><?php echo $data['balance']?></div>
  </li>
</ul>
</div>





        
            <br><br><div class="but-2">
              </div>
            </div>
        </div>
        <div class="footer1">
            <label class="error"><?php echo $data['err'] ?></label>
        </div>
      
    </div></div>


    </body>
</html>