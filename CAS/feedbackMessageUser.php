<?php
  error_reporting(0);
  session_start();
   $id = $_SESSION['email'];
   if (isset($_POST['reply'])) {
    # code...
    $complainid = $_POST['complainid'];
    $_SESSION['complain'] = $complainid;
  }
  $complainid = $_SESSION['complain'];
    require 'DB/DBConnection.php';
    $messageQuery = "SELECT * FROM feedback WHERE complainid = '$complainid' ORDER BY 'id' DESC";
    $result = mysqli_query($conn,$messageQuery);
    $result12 = mysqli_query($conn,"SELECT * FROM complainassign INNER JOIN officer ON complainassign.officerid = officer.id WHERE complainid = '$complainid'");
        $row12 = mysqli_fetch_assoc($result12);
        $name12 = $row12['name'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
 <?php

  require 'CSS/adminPanelApis.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
}
</script>

</head>
<body>

  <div class="w3-bar w3-black w3-medium">
    <a href="userPanel.php" class="w3-bar-item w3-button w3-mobile ">New Complaints</a>
     <a href="viewUserComplaints.php" class="w3-bar-item w3-button w3-mobile ">View Complaints</a>
    <a href="userSuggestions.php" class="w3-bar-item w3-button w3-mobile ">Suggestions</a>
    <a href="userProfile.php" class="w3-bar-item w3-button w3-mobile ">Profile</a>
    <a href="userFeedback.php" class="w3-bar-item w3-button w3-mobile w3-blue">Feedback</a> 
    <a href="faq.php" class="w3-bar-item w3-button w3-mobile">FAQ</a>

    <!-- Please give the URL -->
    <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-right">Logout</a>

    </div>



    <div style="width: 35%;margin-left: 30%;background: gray;color: white;padding-bottom: 2.5%">


        <form method="post" action="feedbackMessageUser.php">

     <div style="margin-left: 30%">
       <h3>
         <!-- This contains name of receiver -->
         <?php

          echo $name12;
         
         ?>
       </h3>
     </div>


     <!-- The below div contains message box -->
     <div style="margin-left: 25%" class="w3-mobile w3-padding w3-round ">
       <textarea rows="3" cols="25" name="messageBox" onfocus=""></textarea>
     </div>

     <!-- The below div contains Reply and Close button  -->
      <div style="margin-left: 30%">
        <span>
          <button type="submit" name="submit" class="w3-btn w3-blue w3-padding " value="Reply">Reply</button>
       <a href="#" id="close-window" onclick="windowClose()" class="w3-btn w3-round w3-red w3-margin-left">Close</a>
        </span>
      </div>

    </form>
    <?php
    if ($_POST['submit']) {
        # code...
        $complainid = $_SESSION['complain'];
        $insertMessage = $_POST['messageBox'];
        
        $insertFeedbackQuery = "INSERT INTO feedback (complainid,message,sender) VALUES('$complainid','$insertMessage','user')";
        if (mysqli_query($conn,$insertFeedbackQuery)) {
          # code...
          header('location:feedbackMessageUser.php');
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
        if ($sender == "user") {
          # code...
        
    ?>

     <tr>
       <td style="width: 350px;padding-left: 30px;" ><span style="background: white;padding: 4.5px;border-radius: 7px;color: black"><?php echo $message ; ?></span></td>
       <td></td>
     </tr>
     <?php
      } else {

     ?>

        <tr>
       <td style="width: 400px"></td>
       <td><span style="background:  #4ac959;padding: 4.5px;border-radius: 7px;color: black"><?php echo $message ; ?></span></td>
     </tr>
     <?php
   }
 }

     ?>

   </table>

    </div>



  </body>
  </html>
  