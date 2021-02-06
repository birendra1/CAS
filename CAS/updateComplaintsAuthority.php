<?php

  session_start();
  $id = $_SESSION['id'];
  require 'DB/DBConnection.php';
  $complainQuery = "SELECT * FROM complainassign INNER JOIN complain ON complainassign.complainid = complain.id where officerid = '$id' and status < '4';";
  $result = mysqli_query($conn,$complainQuery);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Complain</title>
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
          <i class="w3-text-orange" > Update Complaints</i>
        </a>
      </li>
      <li>
        <a href="feedbackAuthority.php">
          <i style="margin-left: 25px">Feedback</i>
        </a>
      </li>

         <li>
        <a href="profileAuthority.php">
          <i  style="margin-left: 30px"> Profile</i>
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






  



<table class="w3-table-all w3-hoverable " >
  <form action="updateComplaintsAuthority.php" method="POST">
    
          <tr class="w3-black w3-hover-red w3-large">
        <th>Complain id</th>
        <th>Title</th>
        <th>Subject</th>
        <th style="width: 15%">Complain Description</th>
        <th>Image</th>
        <th>Date:</th>
        <th>Status</th>
      
        <th></th>
        </tr>
  
    <!-- Php code goes here -->
        
        <?php
          while ($row = mysqli_fetch_assoc($result)) {
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

        <tr class="w3-light-grey w3-medium">
       <td><?php echo $row['complainid']; ?></td> 
       <td><?php echo $row['title']; ?></td>
       <td><?php echo $row['subject']; ?></td>
       <td><?php echo $row['cdescription']; ?></td>
       <td><img src="<?php echo $row['title']; ?>" alt="Image not found"></td>
       <td><?php echo $status; ?></td>
      
       <td>
          <select class="w3-medium w3-input" name='status'>
            <?php
              if ($statusOfComplain == 1) {
                # code...
                echo "<option value='2'>Received</option>";
              } elseif ($statusOfComplain == 2) {
                # code...
                echo "<option value = '3'>Inprogress</option>";
              }
              else {
                echo "<option value= '4'>Completed</option>";
              }
              
            ?>
          </select>

        </td>
    <td>
      <input type="hidden" name="complainid" value="<?php echo $row['complainid']; ?>">
      <input type="hidden" name="email" value="<?php  $row['complainby']; ?>">
      <button type="submit" class="w3-btn w3-blue w3-round w3-medium" name="Update" value="Update">Update</button></form></td>

      
      </tr>
      <?php
    }

      ?>
    </table>

    <?php
        require 'Authority/update_Complain.php';
    ?>


  

</body>
</html>