
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport"
       content="width=device-width, initial-scale=1.0">  

       <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">  
       <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/comp.css" text="text/css">  
</head>

<body>
<div class="navbar">
<a href="home.html" class="">Home</a>
<a href="#">Store</a>
<a href="#">Contact Us</a>
<a href="#">About Us</a>

</div>

<div class="row">
<div class="side">

  <a href="<?php echo ROOT ?>/Customer/Mv"> <i class="fa fa-car"></i> Place an Order</a>
    <a href="<?php echo ROOT ?>/Customer/Pendingpetrol"> <i class="fa fa-car"></i> Pending Orders</a>
   <a href="<?php echo ROOT ?>/Customer/Pumphistory"><i class="fa fa-user icon"></i> View Pumped History</a>
  <a href="<?php echo ROOT ?>/Customer/Complaint" class="active"><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>

</div>

<div class="main">


<br><br>
<form action="<?php echo ROOT ?>/Customer/Complaint/add " method="POST">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
   
        </div>
        <div class="screen-header-right">
    
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>COMPLAINT</span>
         
          </div>
          <div class="app-contact">CONTACT INFO : 077 6765456</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" value="<?php echo $data['fname']; ?>" name="fname">
              <input type="hidden" class="app-form-control" placeholder="NAME" value="<?php echo $data['id']; ?>" name="id">
            </div><br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL"value=" <?php echo $data['email']; ?>" name="email">
            </div><br>

            <div class="app-form-group">
              <input class="app-form-control" placeholder="ORDER ID" name="Oid">
            </div><br>
          
          
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE" name="complaint">
            </div><br><br><br>
            <div class="app-form-group buttons">
            
              <button type="submit" class="app-form-button">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>

  </div>


<br><br><br><br><br>




</div>
<footer class="footer">
<div class="footer-left">

             <p class="footer-links">
                 <a href="#" class="link-1">Home</a><br>
                 
                 <a href="#">Contact Us</a><br>
             
                 <a href="#">Profile</a><br>
             
                 <a href="logout.php">Logout</a>
                 
     
             </p>

         </div>

         <div class="footer-center">

             <div>
                 <i class="fa fa-map-marker"></i>
                 <p><span>222/A,Colombo 07</span></p>
             </div>

             <div>
                 <i class="fa fa-phone"></i>
                 <p>0717787990</p>
             </div>

             <div>
                 <i class="fa fa-envelope"></i>
                 <p><a href="mailto:support@company.com">petro@gmail.com</a></p>
             </div>

         </div>

         <div class="footer-right">

             <p class="about">
                 <span>About the company</span>
                 
             </p>

             <div class="footer-icons">

                 <a href="#"><i class="fa fa-facebook"></i></a>
                 <a href="#"><i class="fa fa-twitter"></i></a>
             
             </div>

         </div>

     </footer>

 
 
</body>
</html>