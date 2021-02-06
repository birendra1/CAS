<!DOCTYPE html>
<html>
<head>
	<title>Verify Password</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



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

      <script type="text/javascript">
      function show(){
       
        document.getElementById("otp").style.display="block";
            document.getElementById("sendOTP").style.display="none";
             document.getElementById("verifyOTP").style.display="block";
      }
      
    </script>


	



</head>
<body id="body">
	<div class=" text-center" id="headings" style="width: 100%;height: 70px;background: #cecece;padding-top: 5px;padding-bottom: 10px">
	<h1 align="center">Password Reset</h1>
</div>

<div id="loginPanelDesign">

<form action="forgotPasswordUser.php" method="post">
<div class="form-group" >
			<label>Email</label>				
			<input type="email" name="email" id="email"  class="form-control">
			<span id="emailerror" class="text-danger font-weight-bold"></span>
		</div>
  <div class="form-group" style="display: none;" name="otp" id="otp">
      <label>OTP</label>        
      <input type="text"   class="form-control">
    </div>

		<input type="button" name="sendOTP" id="sendOTP" class="btn btn-primary" value="Send OTP"  style="margin-left: 40%;margin-top: 12.5px;" onclick="show()">

    <input type="submit" name="verifyOTP" id="verifyOTP" class="btn btn-primary" value="Verify OTP"  style="margin-left: 40%;margin-top: 12.5px;display: none;" >

</form>




	</div>
</body>
</html>