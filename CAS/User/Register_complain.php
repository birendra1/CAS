<?php
	if (isset($_POST['ComplainRegister'])) {
	
		require 'DB/DBConnection.php';
		$title = $_POST['title'];
    	$subject = $_POST['Subject'];
    	$cdescription = $_POST['complainDescription'];
		$files = $_FILES['file']['name'];
		$tmpname = $_FILES['file']['tmp_name'];
		$folder = 'Complain/';
		 if($tmpname!= ""){
		 	$filename = 'c'.md5($email.time());
		 	$type = substr($files, strrpos($files, '.')+1);
			$path = $folder.$filename.".".$type;
			if (move_uploaded_file($tmpname, $path)) {
				$complain = "INSERT INTO Complain (title,subject,cdescription,file,complainby) VALUES('$title','$subject','$cdescription','$path','$email')";
				if (mysqli_query($conn,$complain)) {
					echo "Complain Registered Successfully.";
				}

                else {
                	echo "complain not registered.";
                }
            }
            else {
            	 echo "complain not registered.";
            }    

		 }
		 else {
		 	$complain = "INSERT INTO Complain (title,subject,cdescription,complainby) VALUES('$title','$subject','$cdescription','$email')";
				if (mysqli_query($conn,$complain)) {
					echo "Complain Registered Successfully.";
				}

                else {
                	echo "complain not registered.";
                }
		 }
	}
?>