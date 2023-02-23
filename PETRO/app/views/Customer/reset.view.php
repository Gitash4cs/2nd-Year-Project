
<?php
 if(empty($data['err'])){
   $data['err']=NULL;
 }
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/reset.css" text="text/css">
  
</head>
<body>






<div class="container">
	
	<div class="screen">
		<div class="screen__content">
      <img src="<?php echo ROOT ?>/image/Common/petro.jpg" alt="petro logo" class="logo">
			<form action="<?php echo ROOT ?>/Customer/Reset/details" method="post" class="login">
			<?php echo $data['err'] ?>
       
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
                    <input type="password" class="login__input"name="new_password" id="t1" placeholder="New Password" required/>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input"name="confirm_password" placeholder="Confirm Password" required/>
				</div>
                <div class="list">
                    <ul type="Square">
                            <li>At least 1 uppercase character.</li>
                            <li>At least 1 lowercase character.</li>
                            <li>At least 1 digit.</li>
                            <li>At least 1 special character.</li>
                            <li>Minimum 8 characters.</li>

                    </ul>
                </div>
				<button class="button login__submit" type="submit" name="submit">
					<span class="button__text">Confirm</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
            <br>
            
       
			</form>
		
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>


 <br><br>

</body>
</html>








