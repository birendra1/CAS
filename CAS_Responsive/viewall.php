
  <!-- Database Connection -->
<?php
  require 'DB/DBConnection.php';
  session_start();
  $email = $_SESSION['email'];
  /*if ($email == "") {
    header('location:userLogin.php');
  }*/
  if (isset($_POST['View'])) {
    # code...
     $complainid = $_POST['data'];
    $_SESSION['comaplainid'] = $complainid;
  }
  // $complainid = $_SESSION['complainid'];
   $show = "SELECT * FROM complain where id='$complainid'";
  $result = mysqli_query($conn, $show);
 /* if (mysqli_num_rows($result) == 0) {
    header('location:userLogin.php');
  }*/
  $row = mysqli_fetch_assoc($result);
  $photo = $row['file']; 


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


  <style type="text/css">
     input[type=text] {
  width: 185px;
  margin-left: 35%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 35%;
}

.search .search-container {
  float: right;
}

.search input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}



.search .search-container button:hover {
  background: #ccc;
}
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
  <button class="openbtn" onclick="openNav()">&#9776;  <span style="padding-left: 45px;padding-right:100px ">View Complaints</span> </button> 




   
 
    <!-- Php code goes here -->







  <!-- Actual page Content -->

  <div class="w3-container w3-padding w3-round " style="margin-top: 7%;background: rgba(100,135,196,0.45);">
    <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Complain id</span>
      <span style="font-size: 18px">
        <!-- Conatains Complain id -->
        <?php echo $row['id']; ?>

      </span>
    </div>

        <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Title</span>
      <span style="font-size: 18px">
        <!-- Conatains Complain Title -->
        <?php echo $row['title']; ?>

      </span>
    </div>

        <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Subject</span>
      <span style="font-size: 18px">
        <!-- Conatain Subject -->
        <?php echo $row['subject']; ?>

      </span>
    </div>

        <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Description</span>
      <span style="font-size: 18px">
        <!-- Conatains Complain Description -->
        <?php echo $row['cdescription']; ?>

      </span>
    </div>

        <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Files</span>
      <span style="font-size: 18px">
        <!-- Conatains Complain Files -->

        <img src="<?php echo $photo; ?>">
      </span>
    </div>

        <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Status </span>
      <span style="font-size: 18px">
        <!-- Conatains Complain Status -->
        <?php
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
        echo $status;
        ?>

      </span>
    </div>

            <div>
      <span style="width: 45%;font-size: 18px;font-weight: bold">Date of Complain: </span>
      <span style="font-size: 18px">
        <!-- Conatains Complain Date -->
        <?php echo $row['date']; ?>


      </span>
    </div>
    

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





