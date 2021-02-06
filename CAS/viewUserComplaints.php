<?php
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
	<title>User Panel</title>
	 <?php

  require 'CSS/adminPanelApis.php';
?>
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
          <i    style="margin-left: 10px;"> New Complain</i>
        </a>
      </li>
      <li>
        <a href="viewuserComplaints.php">
          <i class="w3-text-orange" > View Complaints</i>
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





<!-- Containts -->

 <table class="w3-table-all w3-hoverable" style="margin-left: 12.95%;width: 87%">
    
          <tr class="w3-black w3-hover-red">
        <th style="width: 6.5%">Complain id</th>
        <th style="width: 6.5%">Title</th>
        <th style="width: 6.5%">Subject</th>
        <th style="width: 12.5%">Complain Description</th>
        <th style="width: 7.5%">Image</th>
        <th style="width: 6.5%">Date:</th>
        <th style="width: 9.5%">Status</th> 
        </tr>
  
    <!-- Php code goes here -->
    <?php
      $complainQuery = "SELECT * FROM complain where complainby = '$email'";
      $complainResult = mysqli_query($conn,$complainQuery);
      while ($row = mysqli_fetch_assoc($complainResult)) {
        # code...
        $statusOfComplain = $row['status'];
        $status = "";
        if($statusOfComplain == 0) {
          $status = "The complain is registered";
        } elseif ($statusOfComplain == 1) {
          $status = "The complain is assigned";
        } elseif ($statusOfComplain == 2) {
          $status = "The complain is received by the authority";
        } elseif ($statusOfComplain == 3) {
          $status = "The work is in progress";
        } else {
          # code...
          $status = "The complain is resolved from authority side";
        }
      
    ?>
        


        <tr class="w3-light-grey w3-hover-green">
       <td><?php echo $row['id']; ?></td> 
       <td><?php echo $row['title']; ?></td>
       <td><?php echo $row['subject']; ?></td>
       <td><?php echo $row['cdescription']; ?></td>
       <td><img src="<?php echo $row['file']; ?>" alt="Image not found" height="180px" width="250px"></td>
       <td><?php echo $row['date']; ?></td>
       <td><?php echo $status; ?></td>

      
      </tr>
      <?php
        }

      ?>
    </table>



  </body>
  </html>