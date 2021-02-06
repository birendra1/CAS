
<?php

  require 'CSS/index_content.php';
?>
<body >

  <div class=" text-center" id="headings" style="width: 100%;height: 150px;background: #0000FF;padding-top: 20px;padding-bottom: 20px ;color: white">
  <h1 style= "font-family: verdana;  ">Civil Administative Service</h1>
 <p >A way to provide services to general public in more refined way</p>

</div>

<!-- Navigation Items -->

 <div class="container text-center " style="padding-top: 10px;" >
  <div class="btn-group " >
    <form action="index.php"><button type="button " class="btn btn-primary btn-lg active padding">Home</button></form>
   <form action="aboutUs.php"> <button type="submit" class="btn btn-primary btn-lg padding" id="aboutus">About Us</button></form>

   <form action="adminLogin.php"> <button type="submit" class="btn btn-primary btn-lg padding" onclick="">Admin</button></form>
    <form action="authorityLogin.php"><button type="submit" class="btn btn-primary btn-lg padding">Authority</button></form>

    
<div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle btn-lg padding" data-toggle="dropdown">
      User <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu" style="width: 25%;padding:5px;margin-left: -68px; ">
        <li><form action="userRegister.php"><button style="font-size: 16px;width: 100%;padding: 3px;margin-bottom: 2px;">Register</button></form></li>
        <li><form action="userLogin.php"><button style="font-size: 16px;width: 100%;padding: 3px">Login</button></form></li>
      </ul>
    </div>
    <form action="contactus.php">  <button type="submit" class="btn btn-primary btn-lg padding" id="contactus">Contact Us</button></form>
</div>
</div>




<div id="mobile_page_design" style="visibility: hidden;">
  This is a mobile website
</div>


<div id="description"   >

  <h2 class="scope"> </h2>
  <p class="description">
    <h3 style="color: red; font-family: verdana; text-align: center; ">Welcome to Civil Administrative System</h3>
     <p align="center"  style="margin-left:10%;margin-right: 10%;font-size: 18px;background: rgba(255,255,255,0.3);padding: 15px">Civil administration is the administration where the people must abide by the rules that are formed by the government or higher authorities. The complaints given by the public are not reaching the higher authorities on time. In turn it is the public who have to suffer from all these problems. The problems might be related to the roads, education and so on. It will be not possible for the common public to communicate directly with the higher authorities. So to make this task easier,  Civil administration  system can be developed. It will make the civil administration to work in a smarter way.The system is built to connect the local public with the higher officials in the Civil Administration Office.It enables the common public to lodge their complaints through this system which will notify the higher authorities to take actions regarding problems.</p>
</div>
</body>
</html>