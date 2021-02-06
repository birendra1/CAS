<?php
	if (isset($_POST['Save'])) {
		$id = $_POST['officerid'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$state = $_POST['state'];
		$district = $_POST['district'];
		$file = $_FILES['photo']['name'];
		$tmpname = $_FILES['photo']['tmp_name'];
    	$type = substr($file, strrpos($file, '.')+1);
		$folder = 'Authority/photo/';
		$filename = 'a'.md5($email.time());
		$path = $folder.$filename.$type;
		if($tmpname != "") {
			if (move_uploaded_file($tmpname, $path)) {
				 echo $updateQuery = "UPDATE officer SET address = '$address', phone = '$phone', state = '$state', district = '$district', photo = '$path' where id = '$id'" ;
				if (mysqli_query($conn,$updateQuery)) {
					echo "The record is updated";
				}
				else {
					echo "Sorry the recoed is not updated";
				}
			}
			else {
				echo "Sorry the recoed is not updated";
			}
		
		}
		else {
			$updateQuery = "UPDATE officer SET address = '$address', phone = '$phone', state = '$state', district = '$district' where id = '$id'" ;
				if (mysqli_query($conn,$updateQuery)) {
					echo "The record is updated";
				}
				else {
					echo "Sorry the recoed is not updated";
				}
			}
	}
?>