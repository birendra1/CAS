
  <!-- Database Connection -->
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
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 105px;padding-right:140px ">Feedback</span> </button> 




   
 
    <!-- Php code goes here -->
  <!-- Actual page Content -->

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


    <table class="w3-table w3-hoverable w3-large " style="background: gray;border-width: 1px solid black">
    
          <tr> <td>Id</td> <td><?php echo $row['id']; ?> </td> </tr>
       <tr><td>Title</td> <td> <?php echo $row['title']; ?></td></tr>
         <tr><td>Subject</td> <td><?php echo $row['subject']; ?> </td></tr>
         <tr><td>Date Of Resloved:</td> <td><?php echo $row['date']; ?></td> </tr>
         <tr><td>Status</td><td><?php echo $row['status']; ?></td></tr>
         <tr><td>Rating</td>    <td>
          <select id="rating" onchange="visible()">
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
       </tr>

       <tr id="feedback" style="display: none">
        <td  >Feedback</td>        
         <td ><textarea rows="3" cols="30"></textarea></td>
         
         </tr>

         <tr>
          <td></td>
          <div style="height: 1px"></div>


       <td><form action="feedbackUser.php"><button type="submit" name="submit" class="w3-button w3-round w3-blue w3-medium w3-mobile">Send </button></form></td>
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





