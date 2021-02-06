<?php
	session_start();
	require 'DB/DBConnection.php';
	if (isset($_POST['Login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$login = "SELECT * FROM officer WHERE email = '$email'";
		$result = mysqli_query($conn,$login);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$status = $row['status'];
			if ($status == 0) {
				$cpassword = $row['password'];
				echo $val = ($password == $cpassword) ;
				if ($password == $cpassword) {
					echo $_SESSION['email'] = $email;
					header('location:resetPassword.php');
				} else {
					echo "Wrong password";
				}
				
			} else {
				$cpassword = $row['password'];
				if(md5($password) == $cpassword) {
					$_SESSION['id'] = $row['id'];
					header("location:authorityPanel.php");
				}
			}
			
		} else {
			echo "The user doesnot exist";
		}
	}
?>