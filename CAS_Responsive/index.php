<!DOCTYPE html>
<html>
<head>
	<title>CAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script>
function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}



function closeNav() {
  document.getElementById("leftMenu").style.width = "0";
 
}
</script>

<style type="text/css">
   .closebtn {
  position: absolute;
  top: 0;
  right: 8.5px;
  font-size: 36px;
  margin-left: 50px;
}
</style>

</head>
<body >

	<!-- Header Design -->




<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none ; width: 75%;" id="leftMenu">
<!--   <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large w3-text-red">Close &times;</button> -->

 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#215;</a>


<div style="height: 221px">
  <img src="cetcollege.jpg" height="220px" width="100%">

  
</div>
<hr>

  <a href="index.php" class="w3-bar-item w3-button w3-xlarge fa fa-home" style="height: 6.5%">  <span style="padding-left: 25px">Home</span></a>
  <a href="aboutus.php" class=" w3-bar-item w3-button w3-xlarge fa fa-address-card" style="height: 6.5%"><span style="padding-left: 25px">AboutUs</span> </a>
  <a href="adminlogin.php" class="w3-bar-item w3-button w3-xlarge fa fa-user" style="height: 6.5%"> <span style="padding-left: 32px">Admin</span></a>
    <a href="authorityLogin.php" class="w3-bar-item w3-button w3-xlarge fa fa-user" style="height: 6.5%"> <span style="padding-left: 32px">Authority</span></a>
      <a href="userLogin.php" class="w3-bar-item w3-button w3-xlarge fa fa-user" style="height: 6.5%"> <span style="padding-left: 35px">User</span></a>
      <hr>
      <a href="#" class="w3-bar-item w3-button w3-xlarge  " style=""> <span style="padding-left: 31.5px"><b><u>Contact Us</u></b></span></a>

     <i class="fa fa-phone w3-padding" style="font-size:24px;"><span style="padding-left: 10px"> 9861603040</span></i><br>
     <i class="fa fa-envelope w3-padding" style="font-size:22px;"> iambiren00@gmail.com</span></i><br>
      

</div>

<!-- Page Content -->

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  <div class="w3-container">
    <h3>Home</h3>
  </div>
</div>






<div style="width: 25%;margin-left:34%;margin-top: 5%" id="adminlogin" >
	<form action="adminLogin.php">
	<img src="admin_img.JPG" height="115px" width="125px" style="cursor: pointer" alt="not found"><br>
	<button class="w3-btn  w3-large w3-padding w3-round w3-black w3-margin-left" >Admin Login</button>
</form>
</div>

<div style="width: 25%;margin-left:34%;margin-top: 5%" id="authorityLogin">
	<form action="authorityLogin.php">
	<img src="authority_img.JPG" height="115px" width="125px" style="cursor: pointer" alt="not found">
	<br>
	
	<button class="w3-btn  w3-large  w3-padding w3-round w3-margin-left" style="background:black;color: white">Authority Login</button>
</form>
</div>

<div style="width: 25%;margin-left:36%;margin-top: 5%" id="userLogin">
	<form action="userLogin.php">
	<img src="user_pics.JPG" height="115px" width="125px" style="cursor: pointer" alt="not found">
	<br>
	<button class="w3-btn w3-large   w3-padding w3-round w3-margin-left" style="background:black;margin-top: 6.5px;margin-left: 18px;color: white">User Login</button>
</form>
</div>


</body>
</html>