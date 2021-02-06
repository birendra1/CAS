<?php
  session_start();
  $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
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
          <i  class="w3-text-orange"  style="margin-left: 10px;"> New Complain</i>
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
          <i  style="margin-left: 30px"> FAQ</i>
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



<div class="w3-container w3-round-large w3-padding" id="register_page_design"  style="width: 32%;margin-left: 29.75%;padding: 9px;margin-top:6.5%;background: #acacac;">
	
	<form name="userRegistration" method="post" action="userPanel.php" enctype="multipart/form-data" >

		
		<div class="w3-container">
			<label class="w3-large w3-padding-small">Title</label>			
			<input type="text" name="title" id="title"  class="w3-input w3-round w3-padding w3-large " required="required">
			<span id="titleerror" class="text-danger font-weight-bold"></span>
		</div>
		<div class="w3-container">
      <label class="w3-large w3-padding-small">Subject</label>        
      <input type="Subject" name="Subject" id="Subject" class="w3-input w3-round w3-padding w3-large " required="required">
      <span id="Subjecterror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="w3-container">
      <label class="w3-large w3-padding-small">Complain Description</label>      
      <input type="text" name="complainDescription" id="complainDescription"  class="w3-input w3-round w3-padding w3-large " title="Should be indian contact Number">
      <span id="complainDescriptionnumerror" class="text-danger font-weight-bold"></span>
    </div>

      <div class="w3-container w3-margin-top">
      <label class="w3-large w3-padding-small ">FIles</label>      
      <input type="file" name="file" id="file" class="w3-input w3-round w3-padding w3-large w3-margin-left" >
      
    </div>
    <input type="submit" name="ComplainRegister" class="w3-btn w3-round w3-padding w3-large w3-blue " style="margin-left: 33%;margin-bottom: 5px" value="Complain Register" onclick="return validation()" id="registerBtn"  >

		</form>
  </div>
  <?php

    require 'User/Register_complain.php';
   ?>
  




</body>
</html>