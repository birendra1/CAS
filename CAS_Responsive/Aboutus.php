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
    <h3>About us</h3>
  </div>
</div>

<!-- Actual content of the page starts here -->


<div class="w3-gray w3-padding  w3-mobile" style="margin-bottom: 15px;">
  <span class="w3-text-black w3-white w3-xlarge">ADMIN</span>
  <p class="role"><u><strong>FUNCTIONALITY OF ADMIN</strong></u></p>
  <p>Admin functionality consists of many things such as add new authority who solves user complain.Admin also does other functionality such as edit officer details and delete officer details.When admin receives the user's complain he also give feedback to the user that he receives the user's complain.Then admin assign officer's to the user's complain,view complain,view pending complain,view officers,view users.</p>
</div>
<div class="w3-gray w3-padding w3-round " style="margin-bottom: 15px;">
  <span class="w3-text-black w3-white w3-xlarge">Authority</span>
  <p class="role"><u><strong>FUNCTIONALITY OF Authority</strong></u></p>
  <p>The authority here like District Education Officer,District Executive Officer,Chief District Medical Officer,Deputy director of Agriculture,Additional Collector.The authority is the one who solve all the complain of the user and update the status of the complain.Authority also chat with the user to get any suggestion from the user.</p>
</div>
<div class="w3-gray w3-padding w3-round " style="margin-bottom: 15px;">
 <span class="w3-text-black w3-white w3-xlarge">User</span>
  <p class="role"><u><strong>FUNCTIONALITY OF User</strong></u></p>
  <p>The user is registered by himself using email id and phone number.After registering himself user get a unique id.The user complain by using this id and track the status of his complain and update its complain.Give suggestion to the authority about his complaint.The user can also chat with the authority about his problem.</p>
</div>

</body>
</html>