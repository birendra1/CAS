<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
 <?php
 
  require 'CSS/adminPanelApis.php'; 
?>

</head>
<style type="text/css">
   body{

    background-image: url("faq.jpg");
     background-repeat: no-repeat;
       background-attachment: fixed;
  background-size: cover;

}

</style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

/* Toggle Styles */

#viewport {
   
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #000000;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 25px;
  line-height: 70px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
  
}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 18.5px;
  padding: 30px 32px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}
</style>




</head>
<body bgcolor="#cdcdcd">
  
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">CAS</a>
    </header>
    <ul class="nav">
             <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline" style="margin-left: 25px"></i> Home
        </a>
      </li>

    

      <li >
        <a href="userPanel.php">
          <i    style="margin-left: 10px;"> New Complain</i>
        </a>
      </li>
      <li>
        <a href="viewuserComplaints.php">
          <i  > View Complaints</i>
        </a>
      </li>
      <li>
        <a href="userSuggestions.php">
          <i  style="margin-left: 25px">Suggestion</i>
        </a>
      </li>

         <li>
        <a href="userProfile.php">
          <i  style="margin-left: 30px"> Profile</i>
        </a>
      </li>
        <li>
        <a href="userFeedback.php">
          <i  style="margin-left: 30px"> Feedback</i>
        </a>
      </li>

         <li>
        <a href="faq.php">
          <i class="w3-text-orange" style="margin-left: 30px"> FAQ</i>
        </a>
      </li>


      <li>
        <a href="logout.php">
          <i class="zmdi zmdi-calendar" style="margin-left: 25px"> Logout</i>
        </a>
      </li>
 
   
    </ul>
  </div>
</div>


    <div class="faq"   style="margin-left:15%;margin-right: 10%;font-size: 18px;background: rgba(255,255,255,0.65);padding: 15px">
    <h3><u>FREQUENTLY ASKED QUESTION</u></h3>
    <p>We are frequently getting various queries from users in connection with the registration process. We have compiled repeated similar queries received from users along with our responses to upload on the official website of CAS for information and benefit of all concerned. Most of the queries are raised based on the information already incorporated in the advertisement.</p><br>
    <b>A. Advertisement :- </b><br>
    CAS publishes advertisements /notifications carrying detailed Terms and conditions in the registration of the user. The users are advised to go through the advertisement carefully before Registring himself.<br>
    <b>i.Civil Administration System:-</b><br>
    This project is built to connect the local public with the higher officials in the civil Administration system. The user must register an account and launch a complaint to the authority with the generated unique ID. The system allows user to register and as soon as they register an account with unique id is created in the system. The user can then register complain by upload Image with description. The user will receive a unique complaint id from which he can keep track of that complaint. The admin can access the system to add new authority, edit or delete them. Admin can view all the complaints but he can not edit or update the status of the complaint. Admin can only view the progress in complains. Authority will have their separate login where they can view all the complaints, update the status of the complaints. After the complaints is solved the authority send a notification to the user registered email id that the complaint is solved.<br>
    <b>ii. Civil Administration System is safe to used?</b><br>
    yes,Civil Administartion System is safe to used.<br>
    <b>ACCESSIBILITY</b><br>
    <b>i.LOGIN</b><br>
    <b>a.What are the various credentials used for login?</b><br>
    You can use your mobile number/user ID/Email ID and Login PIN for login.<br>
    <b>b.How many times I can try with wrong Login PIN?</b><br>
    You can try with wrong Login PIN maximum 3 times per day.<br>
    <b>c.If my user id is locked then how to release?</b><br>
    You have to wait for 24 hours to auto release.<br>
    <b>ii.FORGOT LOGIN PIN</b><br>
    <b>a.what is forgot Login PIN?</b><br>
    if you forgot your Login PIN,then use this option to reset the login PIN.<br>
    <b>b.what are the inputs i need to give reset the Login PIN?</b><br>
    User can reset the PIN with OTP facility.<br>
  </div>
  </body>
  </html>