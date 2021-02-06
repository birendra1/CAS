<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body class="w3-flat-silver">
  <div class=" text-center" id="headings" style="width: 100%;background: #cecece;padding-top: 5px;padding-bottom: 10px;border-width: 5px;border-bottom-color: 1px solid black">
  <h3 align="center">Reset Password Admin</h3>
</div>

<?php
  if (!(isset($_POST['sendOTP']) || isset($_POST['verifyOTP']) || isset($_POST['resetPassword']))) {
    # code...
  
?>
<div class=" w3-panel w3-flat-belize-hole w3-large" style="margin-top: 45%;padding: 10px; " >

<form action="forgotPasswordAdmin.php" method="post">
<div class="form-group" >
      <label style="margin-left: 10px;font-size: 24px;">Email</label>        
      <input type="email" name="email" id="email"  class="  w3-padding w3-round-large w3-large w3-margin-left" style="width: 80%" placeholder="Enter email to send OTP ">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
      <input type="submit" name="sendOTP" id="sendOTP" class="btn btn-danger" value="Send OTP"  style="margin-left: 45%;margin-top: 12.5px;" >
        
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
      echo "<div style='margin-left:35%;margin-top:45%;font-size:24px;font-weight:bold'> No user exists";
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
        <div name="otp" id="otp" class=" w3-panel w3-flat-belize-hole w3-large" style="margin-top: 45%;padding: 10px; ">
        <label style="margin-left: 5px;font-size: 20px;">Email</label>        
        <input type="email" name="email" id="email" class="form-control w3-mobile w3-padding-small w3-round-large w3-large" value="<?php echo $email ?>" readonly>  
            <label style="margin-left: 5px;font-size: 20px;">OTP</label>        
            <input type="text" name="OTP"    class="form-control w3-mobile w3-padding-small w3-round-large w3-large">
          <input type="submit" name="verifyOTP" id="verifyOTP" class="btn btn-danger" value="Verify OTP"  style="margin-left: 30%;margin-top: 12.5px;"  >
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
        <div class=" w3-panel w3-flat-belize-hole w3-large" style="margin-top: 45%;padding: 10px; "  name="otp" id="otp">
        <label  style="margin-left: 5px;font-size: 20px;">Email</label>        
        <input type="email" name="email" id="email"   class="form-control w3-mobile w3-padding-small w3-round-large w3-large" value="<?php echo $email ?>" readonly>  
            <label>Password</label>        
            <input type="password" name="password"    class="form-control w3-mobile w3-padding-small w3-round-large w3-large">
          </div>
          <input type="submit" name="resetPassword" id="verifyOTP" class="btn btn-danger"   value="Reset Password"  style="margin-left: 40%;margin-top: 12.5px;"  >
      </form>
      <?php
    }
    else {
      echo "<div style='margin-left:26.5%;margin-top:45%;font-size:20px'>Incorrect OTP try again</div>";
    }
  }
  elseif (isset($_POST['resetPassword'])) {
    # code...
    require 'DB/DBConnection.php';
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $updatePassword = "UPDATE admin SET password = '$password' WHERE email = '$email'";
    if (mysqli_query($conn,$updatePassword)) {
      echo "<div style='margin-left:30%;margin-top:45%;font-size:20.5px'>Passsword updated <br> <a href='adminLogin.php'><button style='background:green;color:white;padding:5px;border-radius:6.5px;margin-left:20%'>Login?</button</a></div>";
    }
    else {
      echo "<div style='margin-left:26.5%;margin-top:45%;font-size:20px'>Not successful try again";
    }
  }

    
?>




  </div>
</body>
</html>