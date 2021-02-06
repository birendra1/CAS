<?php
	//error_reporting(0);
	require 'DB\DBConnection.php';
	if (isset($_POST['Login'])) {
		

		 $email = $_POST['email'];
		$password = md5($_POST['password']);

		 $logIn = "select * from user where email='$email' ";
		$result = mysqli_query($conn,$logIn);
		 $rows = mysqli_num_rows($result);
	
		if ($rows > 0) {
			$row = mysqli_fetch_assoc($result);
			 $cpassword = $row['password'];
			if($password == $cpassword)
			{
			session_start();
			 $_SESSION['email'] = $email;
			header('location:userPanel.php');
		}
		else {
			echo "<script> alert(\" Wrong Password \") </script> ";
		}
		}
		else {
			echo "<script> alert(\"  User does not exist \") </script> ";
		}
	}

?>