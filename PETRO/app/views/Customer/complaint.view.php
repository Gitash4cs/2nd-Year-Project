
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
  <a href="<?php echo ROOT ?>/Customer/Complaint" class=""><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>

</div>

<div class="main">
<div class="form-container">


<form action="<?php echo ROOT ?>/Customer/Complaint/add " method="POST">

   <div class="container">
   <h1> Complaint Box </h1>
   <br>
   <input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="box" readonly> 
    <input type="hidden" name="email" value="<?php echo $data['email']; ?>" class="box" readonly> 
    
     <label>Order ID</label>
     <select name="Oid" class="box1">
        <option value="">Order-ID</option>
         <?php
            
             while ($category = mysqli_fetch_array(
                     $all_categories,MYSQLI_ASSOC)):;
         ?>
             <option value="<?php echo $category["Oid"];
                 
             ?>">
                 OID <?php echo $category["Oid"];
                 
                 ?>
             </option>
         <?php
             endwhile;
          
         ?>
     </select>
     <br>
       <label>Complaint:</label>
     <textarea name="complaint" required class="box2"  rows="4" cols="50"></textarea><br>
     <br><br><br>
     <input type="submit" value="submit" name="submit" class="btn">
           
     </div>  
  
 
</form>


</div>
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