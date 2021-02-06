<?php
	if (isset($_POST['send'])) {
		# code...
		$rating = $_POST['rating'];
		$complainid = $_POST['complainid'];
		if ($rating == "Resolved") {
			# code...
			$date = Date("Y-m-d");
			echo $updateComplainQuery = "UPDATE complain SET status = '6', completionDate = '$date' WHERE id = '$complainid'";
			if(mysqli_query($conn,$updateComplainQuery)) {
				echo "status updated";
			} else {
				echo "status not updated try again";
			}
		}
		else {
			$updateComplainQuery = "UPDATE complain SET status = '5' WHERE id = '$complainid'";
			if (mysqli_query($conn,$updateComplainQuery)) {
				# code...
				echo $message = $_POST['feedbackMessage'];
				$feedbackmessage = "INSERT INTO feedback (complainid,message,sender) VALUES('$complainid','$message','user')";
				if (mysqli_query($conn,$feedbackmessage)) {
					echo "Feedback sent";
					$updateComplainLog = "INSERT INTO complainlog (complainid,complaindescription) VALUES ('$complainid','The complain is resolved Completely')";
					mysqli_query($conn,$updateComplainLog);
				} else {
					echo "Try again1";
				}
			} else {
				echo "try again2";
			}
		}
	}
?>