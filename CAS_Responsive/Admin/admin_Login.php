<?php
	error_reporting(0);
	require 'DB\DBConnection.php';
	if (isset($_POST['Login'])) {
		
		$email = $_POST['email'];
		$password = md5($_POST['password']);//Password is Tapas@123

		 $logIn = "select * from admin where email='$email' ";
		$result = mysqli_query($conn,$logIn);
		$rows = mysqli_num_rows($result);
		
		if ($rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$cpassword = $row['password'];
			if($password == $cpassword)
			{
			session_start();
			$_SESSION['email'] = $email;
			header('location:adminPanel.php');
		}
		else {
		     echo "<script> alert(\" Invalid Credential \") </script> ";
		}
		}
		else {
			echo "<script> alert(\" Error  \") </script> ";
		}
	}

?>