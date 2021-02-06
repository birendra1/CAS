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
			echo "<div style='color:red';font-size:18px;margin-left:10px>wrong password</div>";
		}
		}
		else {
			  echo "<script type=\"text/javascript\">\n";
      		 echo " alert(\"No user Exist\") </script> ";
		}
	}

?>