
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/shop.css" text="text/css">

   <!-- custom css file link  -->






</head>
<body>
   
<div class="navbar">
  <a href="<?php echo ROOT ?>/Customer/Home" class="active">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
  <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/pro.png" width="40px" height="40px"></a> 

</div>
<br><br><br><br>
<?php
 $grand_total=0;
 ?>
 
<div class="container">

<div class="shopping-cart">

 

   <table>
      <thead>
         <th></th>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total Price</th>
        
      </thead>
      <tbody>
      <?php
         if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
				?>
         <tr>
            <td><img src="images/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td>
            <form action="<?php echo ROOT ?>/Customer/Cart/add " method="POST">
                  <input type="hidden" name="cart_id" value="<?php echo $row['id']; ?>">
				
                  <input type="number" min="1" name="cart_quantity" value="<?php echo $row['quantity']; ?>">
                  <input type="submit" name="update_cart" value="update" class="option-btn"><a href="<?php echo ROOT ?>/Customer/Shop/update"></a>
               </form>
            </td>
            <td>Rs.<?php echo $sub_total = ($row['price'] * $row['quantity']); ?>/-</td>
            <td><a href="index.php?remove=<?php echo $rowy['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="4">Total :</td>
         <td>Rs.<?php echo $grand_total; ?>/-</td>
         <td><a href="index.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Remove all</a></td>
      </tr>
   </tbody>
   </table>

   <div class="cart-btn"> 

      <a href="payment.php" name="pay" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
	
   </div>

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