<?php
	if (isset($_POST['Update'])) {
		# code...
		$complainid = $_POST['complainid'];
		$assignedStatus = $_POST['status'];
		if($assignedStatus == 0) {
          $status = "The complain is registered";
        } elseif ($assignedStatus == 1) {
          $status = "The complain is assigned";
        } elseif ($assignedStatus == 2) {
          $status = "The complain is received by the authority";
        } elseif ($assignedStatus == 3) {
          $status = "The work is in progress";
        } else {
          # code...
          $status = "The complain is resolved from authority side";
        }
		if (mysqli_query($conn,"UPDATE complain SET status = '$assignedStatus' WHERE id = '$complainid';")) {
			if (mysqli_query($conn,"INSERT INTO complainlog (complainid,complaindescription) VALUES('$complainid','$status')")) {
				echo "Updation successful";
			} else {
				echo "Updation not successful";
			}
		} else {
			echo "Updation not successful";
		}
	}
?>