<?php
error_reporting(0);
	require 'DB/DBConnection.php';
	if (isset($_POST['Update'])) {
		# code...
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$file = $_FILES['photo']['name'];
		$tmpname = $_FILES['photo']['tmp_name'];
    	$type = substr($file, strrpos($file, '.')+1);
		$folder = 'Authority/photo/';
		$filename = 'a'.md5($id.time());
		$path = $folder.$filename.".".$type;
		if($tmpname != "") {
			if (move_uploaded_file($tmpname, $path)) {
				$updateQuery = "UPDATE officer SET phone = '$phone' , address = '$address' , photo = '$path' WHERE id = '$id'";
				if (mysqli_query($conn,$updateQuery)) {
					# code...
					echo "<script> alert(\" Updation successful \") </script>";
					header('location:profileAuthority.php');
				} else {
					echo "Updation not successful";
				}
			} else {
				echo "Updation not successful";
			} 
	}	 else {
		$updateQuery = "UPDATE officer SET phone = '$phone' , address = '$address'";
		if (mysqli_query($conn,$updateQuery)) {
			# code...
			echo "<script> alert(\" Updation successful \") </script>";
			header('location:profileAuthority.php');
		}
	 else {
					echo "Updtion not successful";
				}
			
		}
	}
?>