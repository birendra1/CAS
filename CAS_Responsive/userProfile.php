
  <!-- Database Connection -->

<?php
 error_reporting(0);
  require 'DB/DBConnection.php';
  session_start();
  $email = $_SESSION['email'];
  /*if ($email == "") {
    header('location:userLogin.php');
  }*/
   $show = "SELECT * FROM user where email='$email'";
  $result = mysqli_query($conn, $show);
 /* if (mysqli_num_rows($result) == 0) {
    header('location:userLogin.php');
  }*/
  $row = mysqli_fetch_assoc($result);
  $photo = $row['photo']; 

?>


<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
</style>
<script type="text/javascript">
  function visible(){
    var temp ="Raised Complain";  

    if(temp ==   document.getElementById("rating").value ) {
      document.getElementById("feedback").style.display="block";

  }

  else
    if(temp !=   document.getElementById("rating").value ) {
      document.getElementById("feedback").style.display="none";

  }
}
</script>

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
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 138px;padding-right:140px ">Profile</span> </button> 




   
 
    <!-- Php code goes here -->
  <!-- Actual page Content -->


 <div class="w3-container w3-mobile" style="margin-top: 3%;padding: 10px;background: #acacac" >
  
  <form name="userProfile" method="post" action="userProfile.php" enctype="multipart/form-data">

    
    <div class="form-group">
      <label>Name</label>     
      <input type="text" name="name" id="name"  class="form-control" value="<?php echo $row['name'] ; ?>" disabled="disabled">
      <span id="nameerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="form-group">
      <label>Email</label>        
      <input type="email" name="email" id="email"  class="form-control" value="<?php echo $row['email'];?>" disabled="disabled">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="form-group">
      <label>Phone</label>      
      <input type="number" name="phone" id="phone"  class="form-control" title="Should be indian contact Number" value="<?php echo $row['phone'];?>">
      <span id="phonenumerror" class="text-danger font-weight-bold"></span>
    </div>

      <div class="form-group">
      <label>Aadhar Number</label>      
      <input type="number" name="aadhar" id="aadhar"  class="form-control" disabled="disabled" value="<?php echo $row['aadhar'];?>">
      <span id="aadharerror" class="text-danger font-weight-bold"></span>
    </div>

    <div class="form-group">
      <label>Address</label>      
      <textarea rows="2" cols="30" name="address" id="address"  class="form-control"><?php echo $row['address'];?></textarea>
      <span id="addresserror" class="text-danger font-weight-bold"></span>
    </div>


    


        <div class="form-group" >
      <label>Gender</label>
      
      
        <input type="radio" name="gender" value="Male" checked="checked" disabled="disabled" >Male
        <input type="radio" name="gender" value="Female" disabled="disabled">Female
        <input type="radio" name="gender" value="Others" disabled="disabled">Others
      
    </div>

    <!-- Profile Picture -->
        <div class="form-group" >
      <label>Photo</label>
      
      <img src="<?php echo $photo ; ?>" alt="User Photo" height= "115px" width="150px" >
     
       
      
    </div>
    

    <div class="form-group">
      <label>SecreatQuestion</label>
      
      <select class="form-control" value="<?php echo $row['squestion'];?>" name="squestion">
        <option>What is your favorite mathematician?</option>
        <option>What is your nic name?</option>
        <option>What is your born city?</option>
      </select>
    </div>
    

    <div class="form-group">
      <label>Hint Answer</label>      
      <input type="text" name="hints" id="hints"  class="form-control" value="<?php echo $row['hanswer'];?>">
      <span id="hintanserror" class="text-danger font-weight-bold"></span>
    </div>
    
   <br>
      <input type="submit" name="Update" class="btn btn-primary w3-mobile w3-padding" value="Update" onclick="return validation()" id="updateBtn"   >
      <?php
          require 'User/updateUser.php';
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







 

