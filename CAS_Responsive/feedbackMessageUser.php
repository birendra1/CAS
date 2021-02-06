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
    $result1 = mysqli_fetch_assoc($result);
     $date = $result1['date'];
    $result12 = mysqli_query($conn,"SELECT * FROM complainassign INNER JOIN officer ON complainassign.officerid = officer.id WHERE complainid = '$complainid'");
        $row12 = mysqli_fetch_assoc($result12);
        $name12 = $row12['name'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 105px;padding-right:140px "><?php echo"$name12" ?></span> </button> 

</div>



      <form method="post" action="feedbackMessageUser.php" >

     <!-- The below div contains message box -->
     <div class="  w3-round " style="position: fixed;bottom:1.5px; ">

       <input type="text"  name="messageBox" class="w3-padding w3-round-large  " style="width:330px;" required="required" >
     
   
          <span><button type="submit" name="submit" class="w3-btn w3-blue w3-padding w3-round w3-large" value="submit">Send</button></span>

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

    <div class=" w3-blue w3-margin-bottom w3-padding w3-round-large" style="float: left;width: 75%;">
      
  
      <?php echo "<b>" ;
      echo  $message ;
      echo "</b>" ;
      echo "<br>";
      echo " ";
       echo " $date "?>
    </div>
      
    </span>
     </tr>
      <?php
      } else {
        ?>

           <div class=" w3-green w3-margin-bottom w3-padding w3-round-large" style="float: right;width: 75%">
      
  
         <?php echo "<b>" ;
      echo  $message ;
      echo "</b>" ;
      echo "<br>";
      echo " ";
       echo " $date "?>
    </div>

      
     <?php
   }
 }

     ?>
   </table>


    </div>





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