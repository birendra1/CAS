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
  <title>Authority Profile</title>
   <meta charset="utf-8">

 <script type="text/javascript" src="js/editOfficer_Validation.js"></script>


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
        <a href="authorityPanel.php">
          <i   style="margin-left: 10px;"> View Complaints</i>
        </a>
      </li>
      <li>
        <a href="updateComplaintsAuthority.php">
          <i  > Update Complaints</i>
        </a>
      </li>
      <li>
        <a href="feedbackAuthority.php">
          <i style="margin-left: 25px">Feedback</i>
        </a>
      </li>

         <li>
        <a href="profileAuthority.php">
          <i class="w3-text-orange" style="margin-left: 30px"> Profile</i>
        </a>
      </li>

      <li>
        <a href="logout.php">
          <i class="zmdi zmdi-calendar" style="margin-left: 25px"> Logout</i>
        </a>
      </li>
 
   
    </ul>
  </div>


  <!-- Content -->
  <div id="content">






  <div class="container" style="width: 35%;margin-left: 2.5%;padding: 10px;background: #acacac;" >
  
  <form name="userProfile" method="post" action="profileAuthority.php" enctype="multipart/form-data">

    
    <div class="w3-container">
      <label class="w3-large">Name</label>     
      <input type="text" name="name" id="name"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom" value="<?php echo $row['name']; ?>" disabled>
      <span id="nameerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="w3-container">
      <label class="w3-large">Email</label>        
      <input type="email" name="email" id="email"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom" value="<?php echo $row['email']; ?>" disabled style = "cursor:disabled">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="w3-container">
      <label class="w3-large">Phone</label>      
      <input type="number" name="phone" id="phone"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom" title="Should be indian contact Number" value="<?php echo $row['phone']; ?>">
      <span id="phonenumerror" class="text-danger font-weight-bold"></span>
    </div>


    <div class="w3-container">
      <label class="w3-large">Address</label>      
      <textarea rows="2" cols="30" name="address" id="address"  class="w3-input w3-round w3-padding w3-large w3-margin-bottom"><?php echo $row['address']; ?></textarea>
      <span id="addresserror" class="text-danger font-weight-bold"></span>
    </div>

    


    <!-- Profile Picture -->
        <div class="w3-container" >
      <label class="w3-large">Photo :   </label>
      
      <img src="<?php echo $row['photo']; ?>" alt="Not found" height= "115px" width="150px" >
        <input type="file" name="photo" accept="images/*">
       
      
    </div>
    

 
    
   <br>
      <input type="submit" name="Update" class="btn btn-primary w3-xlarge" value="Update" onclick="return validation()" id="updateBtn" style="margin-left: 25%;margin-bottom: 7%"  >
      <?php
          require 'Authority/updateAuthority.php';
      ?>
</body>
</html>