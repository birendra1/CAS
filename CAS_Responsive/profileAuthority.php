
  <!-- Database Connection -->
<?php
  session_start();
   $id = $_SESSION['id'];
   require 'DB/DBConnection.php';
   $selectQuery = "SELECT * FROM officer WHERE id = '$id'";
   $result = mysqli_query($conn,$selectQuery);
   $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Authority Panel</title>
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
</head>
<body>

<div id="mySidebar" class="sidebar " >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#215;</a>
  <div style="height: 221px">
     <img src="cetcollege.jpg" height="220px" width="85%">

  </div>
   <hr>

  <a href="authorityviewComplaints.php" class="fas fa-book" style="padding-left: 5%;width: 100%;" > <span style="padding-left: 15%"> View Complaint</span></a>
  <a href="updateComplaintsAuthority.php" class="fas fa-edit" style="padding-left: 5%;width: 100%;"> <span style="padding-left: 13.5%">Update Complaints</span></a>

  <a href="feedbackAuthority.php" class="fas fa-comments" style="padding-left: 5%;width: 100%;"><span style="padding-left: 15.35%">Feedback</span></a>
    <a href="profileAuthority.php" class="fa fa-user-circle-o" style="padding-left: 5%;width: 100%;"><span style="padding-left: 15.95%;font-weight: bold">Profile</span></a>
  <a href="logout.php" class="fas fa-sign-out-alt" style="padding-left: 5%;width: 100%;"><span style="padding-left: 16.2%">Logout</span></a>
  <hr> 
    <span style="padding-left: 28%;font-size: 23px;text-decoration: underline;"><u>Contact Us</u></span><br>

     <i class="fa fa-phone w3-padding" style="font-size:20px;"><span style="padding-left: 10px"> 9861603040</span></i><br>
     <i class="fa fa-envelope w3-padding" style="font-size:20px;"> iambiren00@gmail.com</span></i><br>
</div>

<!-- This below div contains all details of body -->

<div id="main" >
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 125px;padding-right:140px ">Profile</span> </button> 




   
 
    <!-- Php code goes here -->
  <!-- Actual page Content -->

<div class="w3-container w3-mobile w3-medium w3-gray" style="padding-top: 25px;height: 736px" >
  
  <form name="userProfile" method="post" action="profileAuthority.php" enctype="multipart/form-data">

    
    <div class="w3-mobile">
      <label class="w3-large">Name</label>     
      <input type="text" name="name" id="name"  class="w3-input w3-round  w3-large w3-margin-bottom w3-mobile" value="<?php echo $row['name']; ?>" disabled>
      <span id="nameerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="w3-mobile">
      <label class="w3-large">Email</label>        
      <input type="email" name="email" id="email"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom" value="<?php echo $row['email']; ?>" disabled style = "cursor:disabled">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="w3-mobile">
      <label class="w3-large">Phone</label>      
      <input type="number" name="phone" id="phone"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom" title="Should be indian contact Number" value="<?php echo $row['phone']; ?>">
      <span id="phonenumerror" class="text-danger font-weight-bold"></span>
    </div>


    <div class="w3-mobile">
      <label class="w3-large">Address</label>      
      <textarea rows="2" cols="30" name="address" id="address"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom"><?php echo $row['address']; ?></textarea>
      <span id="addresserror" class="text-danger font-weight-bold"></span>
    </div>

    


    <!-- Profile Picture -->
        <div class="w3-mobile" >
      <label class="w3-large">Photo :   </label>
      
      <img src="<?php echo $row['photo']; ?>" alt="Not found" height= "115px" width="150px" >
    
       
      
    </div>
    

 
    
   <br>
      <input type="submit" name="Update" class="w3-button w3-blue w3-large w3-text-white  w3-mobile" value="Update" onclick="return validation()" id="updateBtn"  >
      <?php
          require 'Authority/updateAuthority.php';
      ?>

    





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


