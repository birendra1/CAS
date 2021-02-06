<?php
	if (isset($_POST['add'])) {
	 	require 'DB/DBConnection.php';
        require 'PHPMailer-master/PHPMailerAutoload.php';
	     $id = $_POST['officerid'];
	 	$name = $_POST['name'];
	 	$address = $_POST['address'];
	 	$phone = $_POST['phone'];
	 	$email = $_POST['email'];
	 	$state = $_POST['state'];
	 	$password = md5(time()."");
	 	$district = $_POST['district'];
	 	$file = $_FILES['photo']['name'];
		$tmpname = $_FILES['photo']['tmp_name'];
    $type = substr($file, strrpos($file, '.')+1);
		$folder = 'Authority/photo/';
		$filename = 'a'.md5($email.time());
		$path = $folder.$filename.$type;
		if($tmpname != "") {
			if (move_uploaded_file($tmpname, $path)) {
				 $addQuery = "INSERT INTO officer(id,name,address,phone,email,state,district,photo,password) VALUES('$id','$name','$address','$phone','$email','$state','$district','$path','$password')" ;
				if (mysqli_query($conn,$addQuery)) {
					  $mailto = $email;
   			         $mailSub = "Registratered to CAS";
   			 		 $mailMsg = "Hi you are registere to CAS having officerid : ".$id." and password : ".$password." Please log in and change the password.";
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
                           echo "<script> alert(\" Mail Sent to :- $email\" ) </script>";
                         }
				          // echo "Successfully added.";
				
				         }
			    else
			     {
			       echo "<script> alert(\"authority details not added successfully please try again\") </script>";
			     }
		       }
			else 
			    {
				       echo "<script> alert(\"authority details not added successfully please try again\") </script>";
		         }
	   }
		else {
			 $addQuery = "INSERT INTO officer(id,name,address,phone,email,state,district,password) VALUES('$id','$name','$address','$phone','$email','$state','$district','$password')" ;
				if (mysqli_query($conn,$addQuery)) {
					  $mailto = $email;
   			         $mailSub = "Registratered to CAS";
   			 		 $mailMsg = "Hi you are registere to CAS having officerid : ".$id." and password : ".$password." Please log in and change the password.";
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
                           echo "Mail Sent to the email:- $email";
                         }
				           echo "Successfully added.";
				
				         }
			    else
			     {
      echo "<script> alert(\"authority details not added successfully please try again\") </script>";			     }
		}
	 } 
?>