<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
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


<body  class="w3-flat-silver">

  <div  id="headings" class="w3-heading w3-padding w3-blue" >
  <h3 align="center">Reset Password Authority</h3>
</div>

<?php
  if (!(isset($_POST['sendOTP']) || isset($_POST['verifyOTP']) || isset($_POST['resetPassword']))) {
    # code...
  
?>
<div id="loginPanelDesign" style="background: rgba(100,125,145,0.55);padding:11.5px;color: white ">

<form action="forgotPasswordUser.php" method="post">
<div class=" w3-panel w3-flat-belize-hole w3-large" style="margin-top: 45%;padding: 10px; " >
      <label style="margin-left: 5px;font-size: 20px;">Email</label>        
      <input type="email" name="email" id="email"  class="form-control w3-mobile w3-padding-small w3-round-large w3-large" placeholder="enter email to sendOTP ">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
      <input type="submit" name="sendOTP" id="sendOTP" class="btn btn-danger" value="Send OTP"   style="margin-left: 36%;margin-top: 12.5px;" >
    </div>
  
  
</form>
<?php
}
  elseif (isset($_POST['sendOTP'])) {
    # code...
    require 'DB/DBConnection.php';
    $email = $_POST['email'];
     $findQuery = "SELECT * FROM user WHERE email = '$email'";
    if (mysqli_num_rows(mysqli_query($conn,$findQuery)) == 0) {

       echo "<script type=\"text/javascript\">\n";
      echo " alert(\"You are not a valid user\") </script> ";
      echo "<div style='margin-left:40.5%;margin-top:45%;font-size:25px'><a href='userLogin.php'><button style='background:white;color:white;font-size:25px;padding:3.5px;border-radius:4.5px'>Login?</a> </div>";


     
      
    } else {
      session_start();
       $otp = mt_rand(100000,1000000);
      $mailto = $email;
        $mailSub = "Forgot password";
        $mailMsg = "Hi your OTP is <h1>".$otp." </h1> for restting of password";
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
      <form action="forgotPasswordUser.php" method="POST">
      <div   name="otp" id="otp" class=" w3-panel w3-flat-belize-hole w3-large" style="margin-top: 45%;padding: 10px; ">
        <label style="margin-left: 5px;font-size: 20px;">Email</label>        
        <input type="email" name="email" id="email"  class="form-control w3-mobile w3-padding-small w3-round-large w3-large"  value="<?php echo $email ?>" readonly>  
            <label style="margin-left: 5px;font-size: 20px;">OTP</label>        
            <input type="text" name="OTP"   class="form-control w3-mobile w3-padding-small w3-round-large w3-large">
        
          <input type="submit" name="verifyOTP" id="verifyOTP" class="btn btn-danger w3-large" value="Verify OTP"  style="margin-left: 36%;margin-top: 12.5px;"  >
        </div>
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
      <form action="forgotPasswordUser.php" method="post">
        <div class="form-group"  name="otp" id="otp" style="width:35%;margin-left: 33% ;margin-top: 5%;background: rgba(100,125,145,0.55);padding:9.5px;color: white">
        <label style="margin-left: 2.5%;font-size: 20px">Email</label>        
        <input type="email" name="email" id="email"  class="form-control" value="<?php echo $email ?>" readonly>  
            <label style="margin-left: 2.5%;font-size: 20px">Password</label>        
            <input type="password" name="password"   class="form-control">
          <input type="submit" name="resetPassword" id="verifyOTP" class="btn btn-primary" value="Reset Password"  style="margin-left: 40%;margin-top: 12.5px;"  >
        </div>
      </form>
      <?php
    }
    else {
            echo "<div style='margin-left:20%;font-size:20px;margin-top:55%;'>Incorrect OTP <a href='forgotPasswordAuthority.php'><button style='background:green;color:white;padding:5px;border-radius:6.5px;margin-left:05%'> Resend? </button></a></div> ";
    }
  }
  elseif (isset($_POST['resetPassword'])) {
    # code...
    require 'DB/DBConnection.php';
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $updatePassword = "UPDATE user SET password = '$password' WHERE email = '$email'";
    if (mysqli_query($conn,$updatePassword)) {
      echo "<div style='margin-left:39%;margin-top:10%;font-size:23.5px'>Passsword updated <a href='userLogin.php'><button>Click to Login</button</a></div>";
    }
    else {
      echo "Not successful try again";
    }
  }

    
?>




  </div>
</body>
</html>