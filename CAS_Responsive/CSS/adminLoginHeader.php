<!DOCTYPE html>
<html>
<head>
	<title>AdminLogin</title>
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




  
 // password should contain upper letter , one lower letter , one number , one sysmol and at least 8 character
  var passwordcheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;


  var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;




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
}

</script>


  <style type="text/css">

        body{
      background-image: url(admin_Login.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
  
    #loginBtn{
      margin-left: 45%
    }
       #body{
    background-image: url(adminLogin2.jpg);
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