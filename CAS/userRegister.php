<?php
 require 'User/User_Register.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
</style>

	<script type="text/javascript">
		function validation(){
	
 
  var name = document.getElementById("name").value;
  var address = document.getElementById("address").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;
  var hints = document.getElementById("hints").value;
  var check = document.getElementById("check").value;
  var aadhar=document.getElementById("aadhar").value;


  var namecheck = /^[a-zA-Z]+(([',. ][a-zA-Z ])?[a-zA-Z]*)*$/;

  var addresscheck = /^[a-zA-Z0-9]+(([',. /][a-zA-Z0-9 ])?[a-zA-Z0-9/.,]*)*$/;

  
 // password should contain upper letter , one lower letter , one number , one sysmol and at least 8 character
  var passwordcheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

  // indian number starts with 6,7,8,9 and contains 10 number

  var numbercheck = /^[6789][0-9]{9}$/;
  var aadharcheck=/^[0-9]{12}$/;


  var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;



      if(namecheck.test(name)){
  	document.getElementById("nameerror").innerHTML = " ";
  }
  else{
  	document.getElementById("nameerror").innerHTML = "** User name is Invalid ";
  	document.getElementById("name").focus();
  	return false;

  }


    if(addresscheck.test(address)){
  	document.getElementById("addresserror").innerHTML = " ";
  }
  else{
  	document.getElementById("addresserror").innerHTML = "** Address field is Invalid ";
  	document.getElementById("address").focus();
  	return false;

  }

     if(numbercheck.test(phone)){
  	document.getElementById("phonenumerror").innerHTML = " ";
  }


  else{
  	document.getElementById("phonenumerror").innerHTML = "** Phone number is Invalid ";
  	document.getElementById("phone").focus();
  	return false;

  }

  if(aadharcheck.test(aadhar)){
    document.getElementById("aadharerror").innerHTML = " ";
  }


  else{
    document.getElementById("aadharerror").innerHTML = "** Aadhar number is Invalid ";
    document.getElementById("aadhar").focus();
    return false;

  }


    if(emailcheck.test(email)){
  	document.getElementById("emailerror").innerHTML = " ";
  }


  else{
  	document.getElementById("emailerror").innerHTML = "** Email address is Invalid ";
  	document.getElementById("email").focus();
  	return false;

  }







    if(passwordcheck.test(password)){
  	document.getElementById("passworderror").innerHTML = " ";
  }
  else{
  	document.getElementById("passworderror").innerHTML = "** Password is Invalid should contain at least 1 uppercase letter , 1 lowercase letter ,1 number and 1 special symbol and greater than 8 character";
  	document.getElementById("password").focus();
  	return false;

  }


if(password == cpassword)
{
	 document.getElementById("cpassworderror").innerHTML = "";
	
}

else

{
	 document.getElementById("cpassworderror").innerHTML = "Password doesnot match";
	 document.getElementById("cpassword").focus();
	 return false;
}



    if(addresscheck.test(hints)){
  	document.getElementById("hintanserror").innerHTML = " ";
  }
  else{
  	document.getElementById("hintanserror").innerHTML = "** Hints  field is Invalid ";
  	document.getElementById("hints").focus();
  	return false;

  }
}




	</script>

  <style type="text/css">
  
    #register_page_design{
      margin-left: 30%;
      margin-right: 30%;
      width: 40%;
      background: rgba(100,120,135,0.92);
      border-radius: 25px;
      padding: 13px;
    }
   #registerBtn{
    margin-left: 40%;
    margin-top: 12.5px;
    margin-bottom: 60px

    }

      @media only screen and (max-width: 600px){
          #register_page_design{
      margin-left: 5%;
      margin-right: 5%;
      width: 90%;
      background: #deeaee;
      border-radius: 25px;
      padding: 13px;
    }

       #registerBtn{
    margin-left: 35%;
    margin-top: 12.5px;
    margin-bottom: 60px;
    font-size: 20px;

    }
      }
  </style>
</head>
<body id="body"  style="background-image: url('signup.jpg');" >
<div style="position: fixed;margin-left: 25%;width: 50%;margin-bottom: 2%">
	<h1 class="text-center bg-dark text-white">User Registration Page</h1>
</div>
	<br>
  <br>
  <br>
<div class="container" id="register_page_design" >
	
	<form name="userRegistration" method="post" action="userRegister.php" >

		
		<div class="form-group">
			<label>Name</label>			
			<input type="text" name="name" id="name"  class="form-control">
			<span id="nameerror" class="text-danger font-weight-bold"></span>
		</div>
		<div class="form-group">
      <label>Email</label>        
      <input type="email" name="email" id="email"  class="form-control">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="form-group">
      <label>Phone</label>      
      <input type="number" name="phone" id="phone"  class="form-control" title="Should be indian contact Number">
      <span id="phonenumerror" class="text-danger font-weight-bold"></span>
    </div>

      <div class="form-group">
      <label>Aadhar Number</label>      
      <input type="number" name="aadhar" id="aadhar"  class="form-control" >
      <span id="aadharerror" class="text-danger font-weight-bold"></span>
    </div>

		<div class="form-group">
			<label>Address</label>			
			<textarea rows="2" cols="30" name="address" id="address"  class="form-control"></textarea>
			<span id="addresserror" class="text-danger font-weight-bold"></span>
		</div>
		
		

		
		
		
		

		<div class="form-group">
			<label>Password</label>			
			<input type="password" name="password" id="password"  class="form-control">
			<span id="passworderror" class="text-danger font-weight-bold"></span>
		</div>
		

		<div class="form-group">
			<label>Confirm Password</label>			
			<input type="password" name="cpassword" id="cpassword"  class="form-control">
			<span id="cpassworderror" class="text-danger font-weight-bold"></span>
		</div>

        <div class="form-group">
      <label>Gender</label>
      
      
        <input type="radio" name="gender" value="Male" checked="checked">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Others">Others
      
    </div>

		

		<div class="form-group">
			<label>SecreatQuestion</label>
			
			<select class="form-control" name="squestion">
				<option>What is your favorite mathematician?</option>
				<option>What is your nic name?</option>
				<option>What is your born city?</option>
			</select>
		</div>
		

		<div class="form-group">
			<label>Hint Answer</label>			
			<input type="text" name="hints" id="hints"  class="form-control">
			<span id="hintanserror" class="text-danger font-weight-bold"></span>
		</div>
		


	<i style="margin-left: 25px"><input type="checkbox" name="check" id="check" required="required" >
	accept terms and conditions</i>
	<br>
	<input type="submit" name="Register" class="btn btn-primary" value="Register" onclick="return validation()" id="registerBtn"  >




	
	</form>

</body>
</html>