  <!-- Database Connection -->
<?php
  session_start();
   $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Authority Panel</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<!-- Top Nav Panel -->
<nav>
  <button align="center" class="w3-xxlarge w3-padding" style="background: #cccdcc;width: 100% " id="heading" >Authority Panel</button>
</nav>


<!-- Tabs -->

<div class="w3-container">


  <div class="w3-bar " style="width: 103%;margin-left: -4.75%;position: fixed;margin-top: 14%"> 
   
    <a href="authorityviewComplaints.php" class="w3-bar-item w3-button w3-mobile w3-gray"  style="width: 100%;height: 55px;margin-bottom: 8px;padding: 13px;font-size: 25px">View Complaints</a>
    <a href="updateComplaintsAuthority.php" class="w3-bar-item w3-button w3-mobile w3-gray" style="width: 100%;height: 55px;margin-bottom: 8px;padding: 13px;font-size: 25px">Update Complaints</a>
    <a href="feedbackAuthority.php" class="w3-bar-item w3-button w3-mobile w3-gray" style="width: 100%;height: 55px;margin-bottom: 8px;padding: 13px;font-size: 25px">Feedback</a>
     <a href="profileAuthority.php" class="w3-bar-item w3-button w3-mobile w3-gray" style="width: 100%;height: 55px;margin-bottom: 8px;padding: 13px;font-size: 25px">Profile</a>
   
      <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-red" style="width: 100%;height: 55px;margin-bottom: 8px;padding: 13px;font-size: 25px">Logout</a>
    </div>
</div>
</div>



	
</body>
</html>