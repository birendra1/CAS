<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



  <style type="text/css">
  
    #loginBtn{
      margin-left: 45%
    }
       #body{
    background: #eca1a6;
   }

   #loginPanelDesign{
    margin-left: 35%;
    width: 35%;
    margin-top: 5%;
    background: linear-gradient(to bottom left, #cc00ff 0%, #33cc33 100%);
    color: white;
    border-radius: 8px;
    padding:15px;
   }
   #forgotpassword{
    margin-left: 33%;
    margin-top: 3.5%;
   }

    
   

  </style>

      


  



</head>
<body id="body">
  <div class=" text-center" id="headings" style="width: 100%;height: 70px;background: #cecece;padding-top: 5px;padding-bottom: 10px">
  <h1 align="center">Reset Password Admin</h1>
</div>
<?php
  if (!(isset($_POST['sendOTP']) || isset($_POST['verifyOTP']) || isset($_POST['resetPassword']))) {
    # code...
  
?>
<div id="loginPanelDesign">

<form action="forgotPasswordAdmin.php" method="post">
<div class="form-group" >
      <label>Email</label>        
      <input type="email" name="email" id="email"  class="form-control">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
      <input type="submit" name="sendOTP" id="sendOTP" class="btn btn-primary" value="Send OTP"  style="margin-left: 40%;margin-top: 12.5px;" >
    </div>
  
</form>
<?php
}
  elseif (isset($_POST['sendOTP'])) {
    # code...
    require 'DB/DBConnection.php';
    $email = $_POST['email'];
     $findQuery = "SELECT * FROM admin WHERE email = '$email'";
    if (mysqli_num_rows(mysqli_query($conn,$findQuery)) == 0) {
      // echo "No user exists on such email id Please sign up";
    } else {
      session_start();
       $otp = mt_rand(100000,1000000);
      $mailto = $email;
        $mailSub = "Forgot password";
        $mailMsg = "Hi your OTP is ".$otp." for restting of password";
        require 'PHPMailer-master/PHPMailerAutoload.php';
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
            echo "Operation unsuccessful Try again";
        }
        else
        { 
      $_SESSION['otp'] = $otp;
      ?>
      <form action="forgotPasswordAdmin.php" method="POST">
        <div class="form-group"  name="otp" id="otp">
        <label>Email</label>        
        <input type="email" name="email" id="email"  class="form-control" value="<?php echo $email ?>" readonly>  
            <label>OTP</label>        
            <input type="text" name="OTP"   class="form-control">
          </div>
          <input type="submit" name="verifyOTP" id="verifyOTP" class="btn btn-primary" value="Verify OTP"  style="margin-left: 40%;margin-top: 12.5px;"  >
      </form>
      <?php
        }
    }
  }
  elseif (isset($_POST['verifyOTP'])) {
    # code...
    session_start();
    $otp = $_SESSION['otp'];
    $email = $_POST['email'];
    $cotp = $_POST['OTP'];
    if ($otp == $cotp) {
      # code...
      session_unset();
      session_destroy();
      ?>
      <form action="forgotPasswordAdmin.php" method="post">
        <div class="form-group"  name="otp" id="otp">
        <label>Email</label>        
        <input type="email" name="email" id="email"  class="form-control" value="<?php echo $email ?>" readonly>  
            <label>Password</label>        
            <input type="password" name="password"   class="form-control">
          </div>
          <input type="submit" name="resetPassword" id="verifyOTP" class="btn btn-primary" value="Reset Password"  style="margin-left: 40%;margin-top: 12.5px;"  >
      </form>
      <?php
    }
    else {
      echo "Incorrect OTP try again";
    }
  }
  elseif (isset($_POST['resetPassword'])) {
    # code...
    require 'DB/DBConnection.php';
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $updatePassword = "UPDATE admin SET password = '$password' WHERE email = '$email'";
    if (mysqli_query($conn,$updatePassword)) {
      echo "Passsword updated click here to<a href='adminlogin.php'> log in</a>";
    }
    else {
      echo "Not successful try again";
    }
  }

    
?>




  </div>
</body>
</html>