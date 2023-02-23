<!DOCTYPE html>
<html>
<head>
<title>search in javascript</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/store.css" text="text/css">
<link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/main.css" text="text/css">

</head>
<body>

<div class="navbar">
<a href="<?php echo ROOT ?>/Customer/Home" class="">Home</a>
  <a href="<?php echo ROOT ?>/Customer/Shop" class="active">Store</a>
  <a href="<?php echo ROOT ?>/Customer/Contact">Contact Us</a>
  <a href="<?php echo ROOT ?>/Customer/About">About Us</a>
 

	  <a href="<?php echo ROOT ?>/Customer/Cart"><i class="fa badge" style="font-size:18px" value="cart">&#xf07a;</i>

  
     <a href="<?php echo ROOT ?>/Customer/Profile" class="right"><img src="<?php echo ROOT ?>/image/pro.png" width="40px" height="40px"></a> 
	 

</div>

<div class="row">
  <div class="side">


    <a href="<?php echo ROOT ?>/Customer/Pendingstore"> <i class="fa fa-car"></i> Pending Orders</a>
   <a href="<?php echo ROOT ?>/Customer/Storehistory"><i class="fa fa-user icon"></i> View Store History</a>
  <a href="<?php echo ROOT ?>/Customer/Complaint" class=""><i class="fa fa-user icon"></i> Add a Complaint</a>
    <a href="<?php echo ROOT ?>/Customer/Rating" class=""><i class="fa fa-user icon"></i> Add a Feedback</a>

  
  
    
  </div>
  
  <div class="main">


<div class="container-fluid">
<div class="container">
<div class="search">
<h1>All Products</h1>
<input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">
</div>
<div class="product-list">

<?php
   if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
				?>
    <div class="product">
	<form action="<?php echo ROOT ?>/Customer/Store/add " class="box" method="POST">
         <img src="<?php echo ROOT ?>/image/<?php echo $row['image']; ?>" alt="">
         <h3><?php echo $row['name']; ?></h3><br>
         <div class="price">Rs.<?php echo $row['price']; ?></div>
         <input type="number" min="1" value="1"name="product_quantity" class="input">
		  <input type="hidden" name="p_id" value="<?php echo $row['p_id']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
		  <input type="hidden" name="cdate" value="<?php echo date("Y/m/d") ?>" class="box" readonly >
		  	    <input type="hidden" name="ndate" value="<?php echo "$tomorrow" ?>" class="box" readonly><br>
         <input type="submit" value="add to cart" name="add_to_cart" class="btn" >
		
      </form>

      </div>
	  <?php
      };
   };
   ?>
   <br>

</div>
</div>
</div>
</div>
</div>
<!-- javascript -->
<script type="text/javascript">
function search() {
let filter = document.getElementById('find').value.toUpperCase();
let item = document.querySelectorAll('.product');
let l = document.getElementsByTagName('h3');
for(var i = 0;i<=l.length;i++){
let a=item[i].getElementsByTagName('h3')[0];
let value=a.innerHTML || a.innerText || a.textContent;
if(value.toUpperCase().indexOf(filter) > -1) {
item[i].style.display="";
}
else
{
item[i].style.display="none";
}
}
}
</script>
</body>
</html>