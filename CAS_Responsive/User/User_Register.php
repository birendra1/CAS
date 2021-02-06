<?php
	require 'DB/DBConnection.php';
	require 'PHPMailer-master/PHPMailerAutoload.php';
	if (isset($_POST['Register'])) {
		echo $name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$aadhar = $_POST['aadhar'];
		$address = $_POST['address'];
		$password = md5($_POST['password']);
		$gender = $_POST['gender'];
		$squestion = $_POST['squestion'];
		$hanswer = $_POST['hints'];

		echo $insert = "INSERT INTO user (name,email,phone,aadhar,address,password,gender,squestion,hanswer) values('$name','$email','$phone','$aadhar','$address','$password','$gender','$squestion','$hanswer')";
		if(mysqli_query($conn,$insert)){
			echo $mailto = $email;
   			 $mailSub = "Rgistration into CAS notification mail";
   			 $mailMsg = "You are successfully registered into CAS.Thnk You for Registration.";
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
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
   			echo "Location";
			header('location:success.php');
	}

	}
?>