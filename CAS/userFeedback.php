<?php
  
  session_start();
  $email = $_SESSION['email'];
  require 'DB/DBConnection.php';
  $complainQuery = "SELECT * FROM complain WHERE complainby = '$email' AND (status = '4' OR status = '5')";
  $result = mysqli_query($conn,$complainQuery);
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
 <?php

  require 'CSS/adminPanelApis.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
  function visible(){
    var temp ="Raised Complain";  

    if(temp ==   document.getElementById("rating").value ) {
      document.getElementById("feedback").style.display="block";
      document.getElementById("feedback_input").style.display="block";
  }

  else
    if(temp !=   document.getElementById("rating").value ) {
      document.getElementById("feedback").style.display="none";
      document.getElementById("feedback_input").style.display="none";
  }
}
</script>

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
          <i  > View Complaints</i>
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
          <i class="w3-text-orange"  style="margin-left: 30px"> Feedback</i>
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



    <table class="w3-table-all w3-hoverable w3-medium" style="margin-left: 12.85%;width: 87%">
      <form action="userFeedback.php" method="POST">
      
    
          <tr class="w3-black w3-hover-red" >
        <th>Complain id</th>
        <th>Title</th>
        <th>Subject</th>
        <th>Complain Description</th>
        <th>Image</th>
        <th>Date Of Resloved:(from authority side)</th>
        <th>Status</th> 
        <th>&nbsp;&nbsp;&nbsp;</th>
        <th id="feedback" style="display: none">Feedback</th>
        <th></th>
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
            } elseif($statusOfComplain == 4) {
                # code...
                $status = "The complain is resolved from authority side";
            } else {
              $status = "The complain is in dispute";
            }
      ?>

        <tr class="w3-light-grey ">
       <td><?php echo $row['id']; ?></td> 
       <td><?php echo $row['title']; ?></td>
       <td><?php echo $row['subject']; ?></td>
       <td><?php echo $row['cdescription']; ?></td>
       <td><img src="<?php echo $row['file']; ?>" alt = "Image not found" width="25px" height="25px"></td>
       <td><?php echo $row['dateResolved']; ?></td>
       <td><?php echo $status; ?></td>

       
       <td >
         <select id="rating" onchange="visible()" name="rating">
          <?php
        if ($statusOfComplain == 4) {
          # code...
        
       ?>
           <option value="Resolved">Resolved</option>
           <option value="Raised Complain">Raised Complain</option>
           <?php
           } else {
              echo '<option value="Resolved">Resolved</option>';
           } 
           ?>
         </select>
       </td>
       <td id="feedback_input" style="display: none" ><textarea rows="3" cols="30" name="feedbackMessage"></textarea></td>
       <td>
        <input type="hidden" name="complainid" value="<?php echo $row['id'];?>">
        <button type="submit" name="send" class="w3-button w3-round w3-blue w3-medium" value="Send">Send </button></form>
      </td>

       <!-- ---------------------------------------------------send this page to  feedbackMessageUser.php ---------------------------------------------------------------- -->

        <!------ Change form action please -------- -->
        <?php
          if ($statusOfComplain == 5) {
            # code...
          
        ?>
        <td>
        <form action="feedbackMessageUser.php" target="_blank" method="POST">
          <input type="hidden" name="complainid" value="<?php echo $row['id'];?>">
          <button type="submit" name="reply" class="w3-button w3-round w3-green w3-medium " value="reply">Reply </button>
        </form>
        </td>
        <?php
          }
        }
        require 'User/feedback.php';
        ?>
      
      </tr>
    </table>

  </body>
  </html>