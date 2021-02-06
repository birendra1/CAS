  <!-- Database Connection -->
<?php
  session_start();
   $id = $_SESSION['id'];
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
    <a href="profileAuthority.php" class="fa fa-user-circle-o" style="padding-left: 5%;width: 100%;"><span style="padding-left: 15.35%;font-weight: bold">Profile</span></a>
  <a href="logout.php" class="fas fa-sign-out-alt" style="padding-left: 5%;width: 100%;"><span style="padding-left: 16.2%">Logout</span></a>
  <hr> 
    <span style="padding-left: 28%;font-size: 23px;text-decoration: underline;"><u>Contact Us</u></span><br>

     <i class="fa fa-phone w3-padding" style="font-size:20px;"><span style="padding-left: 10px"> 9861603040</span></i><br>
     <i class="fa fa-envelope w3-padding" style="font-size:20px;"> iambiren00@gmail.com</span></i><br>
</div>

<!-- This below div contains all details of body -->

<div id="main" >
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 45px;padding-right:140px "> View Complaints</span> </button> 




    <!-- Php code goes here -->
    <?php
        require 'DB/DBConnection.php';
        $complainQuery = "SELECT * FROM complainassign INNER JOIN complain ON complainassign.complainid = complain.id where officerid = '$id'";
        $result = mysqli_query($conn,$complainQuery);
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



         <table class="w3-gray w3-mobile  w3-padding w3-large" > 

         <tr><td style="padding: 5px;width: 150px;font-weight: bold">Complain id:</td><td style="padding: 5px">  <?php echo $row['complainid']; ?></td></tr>
          <tr><td style="padding: 5px;font-weight: bold"> Title :</td><td style="padding: 5px">  <?php echo $row['title']; ?></td></tr>
           <tr><td style="padding: 5px;font-weight: bold"> Subject : </td><td style="padding: 5px">  <?php echo $row['subject']; ?></td></tr>   
           <!--  <tr><td style="padding: 5px;font-weight: bold"> Image :</td><td style="padding: 5px"> <img src="<?php echo $row['title']; ?>" alt="Image not found"></td></tr>  -->
             <tr><td style="padding: 5px;font-weight: bold"> Status :</td><td style="padding: 5px">  <?php echo $status; ?></td></tr>
              <tr><td style="padding: 5px;font-weight: bold"> Date :</td><td style="padding: 5px">  <?php echo $row['date']; ?></td></tr> 
               
        </table>
<nav style="padding :1px solid black;border-bottom-width: 5px ;border-color: 2px green;height: 1px"> . </nav>
           
           
          
          
       
      

    
      <!-- Check if new or unassigned complain below btn appears -->


      <?php
    }

      ?>

  </div>
    
      <!-- Check if new or unassigned complain below btn appears -->




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






