<?php
      require 'PHPMailer-master/PHPMailerAutoload.php';
	if (isset($_POST['Update'])) {
		# code...
		$complainid = $_POST['complainid'];
		$assignedStatus = $_POST['status'];
		$sendEmail = $_POST['email'];
		$complainQuery = "SELECT * FROM complain where id = '$complainid'";
		$result = mysqli_query($conn,$complainQuery);
		$row = mysqli_fetch_assoc($result);
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
				$mailto = $sendEmail;
   			         $mailSub = "Regarding Complain Update";
   			 		 $mailMsg = "Hi your complain having title <h2>".$row['title']." </h2> status updated to <strong> ".$status."</strong>";
  			         $mail = new PHPMailer();
  			         $mail ->IsSmtp();
  			         $mail ->SMTPDebug = 0;
  			         $mail ->SMTPAuth = true;
  			         $mail ->SMTPSecure = 'ssl';
  			         $mail ->Host = "smtp.gmail.com";
   			         $mail ->Port = 465; // or 587
   			         $mail ->IsHTML(true);
   			         $mail ->Username = "Rupali777711@gmail.com";
  			         $mail ->Password = "SAMSUNGE5";
  			         $mail ->SetFrom("Rupali777711@gmail.com");
   			         $mail ->Subject = $mailSub;
   			         $mail ->Body = $mailMsg;
  			         $mail ->AddAddress($mailto);

                       if(!$mail->Send())
                         {
                           echo "";
                         }
                       else
                         {
                           echo "<script> alert(\" Mail Sent to :- $email\" ) </script>";
                         }
			} else {
				echo "Updation not successful";
			}
		} else {
			echo "Updation not successful";
		}
	}
?>