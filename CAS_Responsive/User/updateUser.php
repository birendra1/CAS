<?php
	require 'DB/DBConnection.php';
  	$email = $_SESSION['email'];
	if (isset($_POST['Update'])) {
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$squestion = $_POST['squestion'];
		$hanswer = $_POST['hints'];
		//echo $_FILES['photo'];
		$file = $_FILES['photo']['name'];
		$tmpname = $_FILES['photo']['tmp_name'];
		$folder = 'User/photo/';
		$filename = 'u'.md5($email.time());
		$path = $folder.$filename;
		if($tmpname != "") {
			if (move_uploaded_file($tmpname, $path)) {
				$updateQuery = "UPDATE user SET phone='$phone' , address='$address', squestion = '$squestion', hanswer ='$hanswer', photo = '$path' WHERE email='$email'";
				if (mysqli_query($conn,$updateQuery)) {
				echo "Successfully Updated.";
				header("location:userProfile.php");
				}
				else {
					echo "Update unsuccessful try again";
			    }
		    }
			else {
				echo "Update unsuccessful try again";
		    }
		}
		else {
			$updateQuery = "UPDATE user SET phone='$phone' , address='$address', squestion = '$squestion', hanswer ='$hanswer' WHERE email='$email'";
				if (mysqli_query($conn,$updateQuery)) {
				echo "Successfully Updated.";
				header("location:userProfile.php");
				}
				else {
					echo "Update unsuccessful try again";

				}
		}
	}
?>