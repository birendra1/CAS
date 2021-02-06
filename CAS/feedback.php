<?php
	//error_reporting(0);
	session_start();
	 $email = $_SESSION['email'];
	require 'DB/DBConnection.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<title>View Complaint</title>

	 <?php

  require 'CSS/adminPanelApis.php';
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style type="text/css">
		.width{
			width: 19.7%;
			padding:5px;
			font-size: 19px;
			border-radius: 8px;
			cursor: pointer;
		}


         input[type=text] {
  width: 185px;
  margin-left: 35%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 35%;
}

.search .search-container {
  float: right;
}

.search input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search .search-container button:hover {
  background: #ccc;
}	 
	
	</style>
<link rel="stylesheet" type="text/css" href="CSS/adminTopNavDesign.css">


</head>
<body>
	




<div class="navbar"  id="navbar">
  <a   href="adminPanel.php">Add Officer</a>
  <a href="viewComplaint.php">View Complaint</a> 
  <a href="viewOfficer.php">View Officer</a> 

  <a class="active" href="Feedback.php">Feedback</a>
  <a href="logout.php">Logout</a>
</div>



<div class="search"  style="margin-bottom: 2.45%">
 <form action="viewOfficer.php" method="post" >
      <input type="text" placeholder="complain id/subject" name="search" style="border:1px solid black">
      <button type="submit" name="submit"><i class="fa fa-search" style="font-size: 21px;padding: 6.9px;"></i></button>
    </form>
</div>


<table class="w3-table-all w3-hoverable">
  	
     			<tr class="w3-black w3-hover-red">
				<th>Feedback id</th>
				<th>Complainer</th>
				<th>Subject </th>
				<th>Description</th>
				<th>Status</th>
				
				<th></th>			

			</tr>

			<!-- Paste Your My Sqli code here -->

			<tr class="w3-light-grey w3-hover-green">

				<!-- paste your code inside td  -->

				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="button" name="achive" id="achieve" value="achieve" ></td>
     </div>

</body>
</html>