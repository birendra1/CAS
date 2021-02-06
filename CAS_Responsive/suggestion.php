
<?php
  //error_reporting(0);
  session_start();
  $email = $_SESSION['email'];
  require 'DB/DBConnection.php';

  $officerQuery = "SELECT * FROM officer ORDER BY id DESC";
  $result = mysqli_query($conn,$officerQuery);
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
</head>
<body>

<div id="mySidebar" class="sidebar " >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#215;</a>
  <div style="height: 221px">
     <img src="cetcollege.jpg" height="220px" width="85%">

  </div>
   <hr>
     <a href="addOfficer.php" class="fas fa-book" style="padding-left: 5%;width: 100%;" > <span style="padding-left: 15%"> Add Officer</span></a>
  <a href="viewComplaint.php" class="fas fa-book" style="padding-left: 5%;width: 100%;" > <span style="padding-left: 15%"> View Complaint</span></a>
  <a href="viewOfficer.php" class="fas fa-user-tie" style="padding-left: 5%;width: 100%;"> <span style="padding-left: 15%">View Officer</span></a>

<a href="suggestion.php" class="fas fa-user-tie" style="padding-left: 5%;width: 100%;"> <span style="padding-left: 15%">Suggestion</a>
  <a href="logout.php" class="fas fa-sign-out-alt" style="padding-left: 5%;width: 100%;"><span style="padding-left: 16.2%">Logout</span></a>
  <hr> 
    <span style="padding-left: 28%;font-size: 23px;text-decoration: underline;"><u>Contact Us</u></span><br>

     <i class="fa fa-phone w3-padding" style="font-size:20px;"><span style="padding-left: 10px"> 9861603040</span></i><br>
     <i class="fa fa-envelope w3-padding" style="font-size:20px;"> iambiren00@gmail.com</span></i><br>
</div>

<!-- This below div contains all details of body -->

<div id="main" >
  <button class="openbtn w3-green" onclick="openNav()">&#9776;  <span style="padding-left: 95px;padding-right:140px "> Suggestion</span> </button> 



  <!-- This section shows search results for feedback -->
  <!-- It shows a maximum of 20 results -->

     <div class="w3-xlarge w3-gray w3-padding-large w3-round-large w3-margin-top " style=";border-radius: 10px">
      <table >
      <tr>
        <td>Feedback id: </td>
        <td></td>
      </tr>

      <tr>
        <td>Giver By: </td>
        <td></td>
      </tr>

      <tr>
        <td>Subject: </td>
        <td></td>
      </tr>

      <tr>
        <td>Description : </td>
        <td></td>
      </tr>
      
      <tr>
        <td>Status : </td>
        <td></td>
      </tr>
    </table>

    
    <input type="button" name="achive" id="achieve" value="Achieve" class="w3-btn w3-blue w3-padding w3-xlarge" style="margin-left: 45%">
     </div>
    
      <!-- Check if new or unassigned complain below btn appears -->




<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "80%";
  
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
 
}
</script>
   
</body>
</html>








