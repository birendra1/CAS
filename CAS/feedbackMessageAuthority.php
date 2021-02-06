<?php
  error_reporting(0);
  session_start();
   $id = $_SESSION['id'];
   if (isset($_POST['reply'])) {
    # code...
    $complainid = $_POST['complainid'];
    $_SESSION['complain'] = $complainid;
  }
    $complainid = $_SESSION['complain'];
    require 'DB/DBConnection.php';
    $messageQuery = "SELECT * FROM feedback WHERE complainid = '$complainid' ORDER BY 'id' DESC";
    $result = mysqli_query($conn,$messageQuery);
    
   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Authority Panel</title>
    <?php

  require 'CSS/adminPanelApis.php';
?>
<link rel="stylesheet" type="text/css" href="CSS/authorityPanelDesigning.css">

<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
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
          <i class="w3-text-orange" style="margin-left: 25px">Feedback</i>
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

    <div style="width: 35%;margin-left: 2.3%;background: gray;color: white;padding-bottom: 2.5%">
     

      <form method="post" action="feedbackMessageAuthority.php">
     <div style="margin-left: 30%">
       <h3>
         <!-- This contains name of receiver -->

         
       </h3>
     </div>


     <!-- The below div contains message box -->
     <div style="margin-left: 25%" class="w3-mobile w3-padding w3-round ">

       <textarea rows="3" cols="25" name="messageBox" class="w3-padding w3-text-black"></textarea>
     </div>

     <!-- The below div contains Reply and Close button  -->
      <div style="margin-left: 30%">
        <span>
          <button type="submit" name="submit" class="w3-btn w3-blue w3-padding " value="submit">Reply</button>
       <a href="#" id="close-window" onclick="windowClose()" class="w3-btn w3-round w3-red w3-margin-left">Close</a>
        </span>
      </div>
    </form>
    <?php
      if ($_POST['submit']) {
        # code...
        $complainid = $_SESSION['complain'];
        $insertMessage = $_POST['messageBox'];
        $insertFeedbackQuery = "INSERT INTO feedback (complainid,message,sender) VALUES('$complainid','$insertMessage','authority')";
        if (mysqli_query($conn,$insertFeedbackQuery)) {
          # code...
          header('location:feedbackMessageAuthority.php');
        }
      }
    ?>


<br>

     <!----------- the Below div contain Previous Messages   ----------------------------- -->
   <table>
    <?php
      while($row = mysqli_fetch_assoc($result)) {

        $message = $row['message'];
        $sender = $row['sender'];
        if (!($sender == "user")) {
          # code...
        
    ?>
     <tr>
       <td style="width: 350px;padding-left: 85px;" ><span style="background: white;padding: 8.5px;border-radius: 7px;color: black"><?php echo $message ; ?></span></td>
       <td></td>
     </tr>
      <?php
      } else {
        ?>
        <tr>
       <td style="width:300px"></td>
       <td><span style="background:  #4ac959;padding: 8.5px;border-radius: 7px;color: black"><?php echo $message ; ?></span></td>
     </tr>
     <?php
   }
 }

     ?>

   </table>

    </div>



</body>
</html>
