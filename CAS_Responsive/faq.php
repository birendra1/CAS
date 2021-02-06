
  <!-- Database Connection -->
<?php
  session_start();
  $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
body {
  font-family: "Lato", sans-serif;
  background: #efefef;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
 
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #010101;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #cdcdcd;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 8.5px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
 
  cursor: pointer;
  background-color: #111;
  color: white;
  width: 100%;
  padding: 10px 15px !important;
  border: none;
  
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  
}




/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

</style>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "80%";
  
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
 
}
</script>
</head>
<body>

<div id="mySidebar" class="sidebar " >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#215;</a>
  <div style="height: 221px">
     <img src="cetcollege.jpg" height="220px" width="85%">

  </div>
   <hr>

  <a href="newComplaints.php" class="fas fa-book" style="padding-left: 5%;width: 100%;" > <span style="padding-left: 15%"> New Complaint</span></a>
  <a href="viewUserComplaints.php" class="fas fa-edit" style="padding-left: 5%;width: 100%;"> <span style="padding-left: 13.5%">View Complaints</span></a>
  <a href="userSuggestions.php" class="fas fa-edit" style="padding-left: 5%;width: 100%;"> <span style="padding-left: 13.5%">Suggestion</span></a>

  <a href="userFeedback.php" class="fas fa-comments" style="padding-left: 5%;width: 100%;"><span style="padding-left: 15.35%">Feedback</span></a>
    <a href="userProfile.php" class="fa fa-user-circle-o" style="padding-left: 5%;width: 100%;"><span style="padding-left: 15.95%;font-weight: bold">Profile</span></a>
    <a href="faq.php" class="fas fa-question-circle" style="padding-left: 5%;width: 100%;"><span style="padding-left: 15.95%;font-weight: bold">FAQ</span></a>
  <a href="logout.php" class="fas fa-sign-out-alt" style="padding-left: 5%;width: 100%;"><span style="padding-left: 16.2%">Logout</span></a>
  <hr> 
    <span style="padding-left: 28%;font-size: 23px;text-decoration: underline;"><u>Contact Us</u></span><br>

     <i class="fa fa-phone w3-padding" style="font-size:20px;"><span style="padding-left: 10px"> 9861603040</span></i><br>
     <i class="fa fa-envelope w3-padding" style="font-size:20px;"> iambiren00@gmail.com</span></i><br>
</div>

<!-- This below div contains all details of body -->

<div id="main" >
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 125px;padding-right:180px ">FAQ</span> </button> 






    </div>
    <div class="w3-container w3-mobile w3-padding w3-large">
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