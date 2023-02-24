<?php
if(empty($data['message'])){
    $data['message']=NULL;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <!--<link rel="stylesheet" href="css/reg.css"> -->
   <link rel="stylesheet" href="<?php echo ROOT?>/CSS/Customer/reg.css" text="text/css">


</head>
<body>
  <a href="login.php" class="homeicon">
         <img alt="Qries" src="<?php echo ROOT ?>/image/home2.png"
         width="40" height="40">
      </a> 

  
<div class="form-container">

   <form action="<?php echo ROOT ?>/Customer/Register/register" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
      <h1>Register now</h1>
      <?php
      
      echo $data['message'];
?>
<br><br>
      <input type="text" name="fname" placeholder="first name" class="box" required>
      <input type="text" name="lname" placeholder="last name" class="box" required>
	  <input type="text" name="NIC" placeholder="enter NIC" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required><br>
	        <input type="tel" name="phone" placeholder="enter phone number" class="box" required><br><br>
	   <label for="vehicle"><h2> Vehicle Details</h2> </label> <br>
	   <input type="text" name="vno" id="vno" placeholder="enter Vehicle Number" class="box1" ><br>
								   <select name="vtype" class="box1" id="vno1"  >
                                    <option value="" >--Vehicle Type--</option>
                                    <option value="car">Car</option>
                                    <option value="van">Van</option>
                                    <option value="Mc">Motor Cycle</option>
                                </select>
								  <select name="ftype" class="box1" id="vno2"  >
                                    <option value="" >--Fuel Type--</option>
                                    <option value="92-Octane">92-Octane</option>
                                    <option value="95-Octane">95-Octane</option>
									  <option value="Super-Diesel">Super Diesel</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
								<br><br>
	   <label for="vehicle"><h2> Machine Details</h2> </label> <br>	
	   
	           <input type="text" name="sNo" class="box1" placeholder="Seriel Number" id="mno"  /><br>
                            
							   <select name="type" class="box1" id="mno1"  >
                                    <option value="">--Machine Type--</option>
                                    <option value="gen">Genorator</option>
                                    <option value="other">Other</option>
                                </select>
                           
                           
				
                              		  <select name="ftype2" class="box1" id="mno2"  >
                                    <option value="" >--Fuel Type--</option>
                                    <option value="92-Octane">92-Octane</option>
                                    <option value="95-Octane">95-Octane</option>
									  <option value="Super-Diesel">Super Diesel</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
                     

								<br>
								
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
<br><br>
		<input type="checkbox" id="checkme"/> I agree  to <a href=""> Terms & Conditions </a> <br><br>	
      <input type="submit" name="submit" value="register now" class="btn" id="submit" disabled ><br><br>
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>





<script>
var checker = document.getElementById('checkme');
var sendbtn = document.getElementById('submit');
checker.onchange = function() {
  sendbtn.disabled = !this.checked;
};


function validateForm() {
    var vno=document.getElementById("vno").value;
    var mno=document.getElementById("mno").value;
	  var vno1=document.getElementById("vno1").value;
    var mno1=document.getElementById("mno1").value;
	  var vno2=document.getElementById("vno2").value;
    var mno2=document.getElementById("mno2").value;

    if((vno===null || vno==="")&& (mno===null || mno==="")){
        alert("You have to enter vehicle or a machine");
        return false;
    }
	
	   if((vno1===null || vno1==="")&& (mno1===null || mno1==="")){
        alert("Please fill the relevant fields of vehicle or machine");
        return false;
    }
	
	   if((vno2===null || vno2==="")&& (mno2===null || mno2==="")){
        alert("Please fill the relevant fields of vehicle or machine");
        return false;
    }

  
}

 
 




 </script>


</body>
</html>