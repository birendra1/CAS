
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Admin Login</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
			<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
		</head>
		<body>
			
			<div class="limiter">
				<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
					<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
						<form class="login100-form validate-form" name="AdminLogin"  action="adminLogin.php" method="post">
							
							<span class="login100-form-title p-b-49">
								Login
							</span>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
								<span class="label-input100">Username</span>
								<input class="input100" type="email" name="email" id="email" placeholder="Type Username">
								<span class="focus-input100" data-symbol="&#xf206;"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Password is required">
								<span class="label-input100">Password</span>
								<input class="input100" type="password" name="password" id="password" placeholder="Type your password">
								<span class="focus-input100" data-symbol="&#xf190;">
								</span>
							</div>
							
							<div>
								<span style="color: red;margin-left: 15px;" id="errorUser">	
									<!-- --------- Actual PHP code ------------------------ -->
										<?php

									   require 'Admin/admin_Login.php';
										?>


								
											
								 </span>
							</div>

							<div class="text-right p-t-8 p-b-31">
								<a href="forgotPasswordAdmin.php">
									Forgot password?
								</a>
							</div>
							
							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit" value="Login" name="Login" onclick="return validation()"> 
										Login
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</body>

		<script type="text/javascript">
			
			function validation(){
			var Username = document.getElementById("email").value;
			var password = document.getElementById("password").value;

			if(Username == ''){
				document.getElementById("errorUser").innerHTML="Username can not be empty";
				document.getElementById("email").focus();

				return false;
			}
			else
				if(password.length <=7)  {
					document.getElementById("errorUser").innerHTML="Password does not meet the requirment";
					document.getElementById("password").focus();
					return false;

				}

				return true;
			}
		</script>
	</html>
