
  <!-- Database Connection -->
<?php
  session_start();
   $id = $_SESSION['id'];
   require 'DB/DBConnection.php';
   $complainQuery = "SELECT * FROM complainassign INNER JOIN complain ON complainassign.complainid = complain.id WHERE officerid = '$id' AND status = '5'";
   $result = mysqli_query($conn,$complainQuery);
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
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 105px;padding-right:140px ">Feedback</span> </button> 




   
 
    <!-- Php code goes here -->
  <!-- Actual page Content -->
         <!-- Php code goes here -->
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
          # code...
          $complainid = $row['complainid'];
          $messageQuery = "SELECT * FROM feedback WHERE complainid = '$complainid'ORDER BY 'date' DESC";
          $resultMessage = mysqli_query($conn,$messageQuery);
          $row1 = mysqli_fetch_assoc($resultMessage);
          $message = $row1['message'];
      ?>


<div class=" w3-mobile  w3-padding w3-large w3-dark-gray" style="height: 700px">

<table  >
    
          <tr ><td style="padding: 5px;font-weight: bold;width: 150px">Complain id</td>  <td> <?php echo $row['complainid']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Title</td>    <td>  <?php echo $row['title']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Subject</td>       <td> <?php echo $row['subject']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Complain Description</td>     <td><?php echo $row['cdescription']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Image</td>                     <td><img src="<?php echo $row['file']; ?>" alt = "Image not found" width="160px" height="100px"></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Date</td>                      <td><?php echo $row['date']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Status</td>                    <td><?php echo $row['status']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold">Feedback</td>                  <td><?php echo $message; ?></td></tr>
            

            </table>
        <form action="feedbackMessageAuthority.php" target="_blank" method="POST">
          <input type="hidden" name="complainid" value="<?php echo $row['complainid']; ?>">
          <button type="submit" name="reply" class="w3-button w3-round w3-green w3-medium w3-mobile" value="Reply">Reply </button>
        </form>

      </div>
 

    

   <?php
  }
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


