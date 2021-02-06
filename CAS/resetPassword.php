<?php

  session_start();
  $email = $_SESSION['email'];
  if (!isset($email)) {
    header('location:authorityLogin.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script >
	

		function validation(){ 
        var email = document.getElementById("email").value;
        
        var password = document.getElementById("password").value;
        var verifyPassword = document.getElementById("verifyPassword").value;




  
 // password should contain upper letter , one lower letter , one number , one sysmol and at least 8 character
  // var passwordcheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;


  var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;




    if(emailcheck.test(email)){
  	document.getElementById("emailerror").innerHTML = " ";
  }


  else{
  	document.getElementById("emailerror").innerHTML = "** Email address is Invalid ";
  	document.getElementById("email").focus();
  	return false;

  }



    if(password.length<=8){
      document.getElementById("passworderror").innerHTML = "** Password should contain minimum of 8 character ";
  	
  	document.getElementById("password").focus();
  	return false;

  }

   if(password!=verifyPassword){
      document.getElementById("passwordVerifyerror").innerHTML = "** Password does not Match ";
    
    document.getElementById("verifyPassword").focus();
    return false;

  }
}

</script>


  <style type="text/css">
  
  	#loginBtn{
  	  margin-left: 45%
  	}
  	   #body{
   	background: #eca1a6;
   }

   #loginPanelDesign{
   	margin-left: 35%;
   	width: 35%;
   	margin-top: 5%;
   	background: linear-gradient(to bottom left, #cc00ff 0%, #33cc33 100%);
   	color: white;
   	border-radius: 8px;
   	padding:15px;
   }
   #forgotpassword{
   	margin-left: 33%;
   	margin-top: 3.5%;
   }

  	
   

  </style>


	



</head>
<body id="body">
	<div class=" text-center" id="headings" style="width: 100%;height: 70px;background: #cecece;padding-top: 5px;padding-bottom: 10px">
	<h1 align="center">Login Panel</h1>
</div>
<h1>Please reset your password</h1>

<div id="loginPanelDesign">
<form name="AdminLogin"  action="resetPassword.php" method="post">

<div class="form-group" >
			<label>Email</label>				
			<input type="email" name="email" id="email"  class="form-control" value="<?php echo $email ; ?>" disabled>
			<span id="emailerror" class="text-danger font-weight-bold"></span>
		</div>


			<div class="form-group">
			<label>Password</label>			
			<input type="password" name="password" id="password"  class="form-control">
			<span id="passworderror" class="text-danger font-weight-bold"></span>
		</div>

        <div class="form-group">
      <label>Confirm Password</label>     
      <input type="password" name="verifyPassword" id="verifyPassword"  class="form-control">
      <span id="passwordVerifyerror" class="text-danger font-weight-bold"></span>
    </div>

		<input type="submit" name="reset" class="btn btn-primary" value="Reset Password" onclick="return validation()" style="margin-left: 40%;margin-top: 12.5px;" >

	</form>
  <?php

      if (isset($_POST['reset'])) {
        require 'DB/DBConnection.php';
        $password = md5($_POST['password']);
        $updatePassword = "UPDATE officer SET password = '$password', status = '1' WHERE email = '$email'";
        if (mysqli_query($conn,$updatePassword)) {
          ?>

            <h4>Your password changed <a href="authorityLogin.php"> Click here to login</a></h4>
          <?php

          session_unset();
          session_destroy();

        }
        else {
          echo "Please try again";
        }
      }
  ?>


	</div>
</body>
</html>




