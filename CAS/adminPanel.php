<!DOCTYPE html>
<html>
<head>

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
      <li>

      <li >
        <a href="adminPanel.php">
          <i class="w3-text-orange" style="margin-left: 30px;"> Add Officer</i>
        </a>
      </li>
      <li>
        <a href="viewOfficer.php">
          <i  style="margin-left: 25px"> View Officer</i>
        </a>
      </li>

         <li>
        <a href="viewComplaint.php">
          <i class="zmdi zmdi-comment-more" style="margin-left: 10px"> View Complaint</i>
        </a>
      </li>

    <!--   <li>
        <a href="suggestion.php">
          <i class="zmdi zmdi-widgets" style="margin-left: 25px">Suggestion</i>
        </a>
      </li> -->

      

      <li>
        <a href="logout.php">
          <i class="zmdi zmdi-calendar" style="margin-left: 25px"> Logout</i>
        </a>
      </li>
 
   
    </ul>
  </div>

  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        



 <!-- Add officer Details -->

<!-- Show list of 30 officers -->

<!-- if you assign officer it should be along with date  -->
<!-- One officer take a maximum of 5 jobs at a time -->

  
        <div  class="w3-padding-large w3-margin-top w3-round " style="margin-left: 4.5%;width: 50%;background: #102654" >

    
    <form name="adminPanel" action="adminPanel.php" method="post" enctype="multipart/form-data" >
     
            <div >           
            <span id="heading" class="w3-text-white w3-xlarge" style="margin-left: 35%">Add Officer</span>
        </div>

        <div >           
            <input type="number" name="officerid" id="officerid"  placeholder="Officerid" class="w3-input w3-large w3-padding w3-margin-bottom" required="required">
            <span id="officeriderror" class="text-danger font-weight-bold"></span>
        </div>

        
        <div class="form-group">
               
            <input type="text" name="name" id="name"  class="w3-input w3-large w3-padding" placeholder="Name" required="required">
            <span id="nameerror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
                      
            <textarea rows="2" cols="30" name="address" id="address"  class="w3-input w3-large w3-padding" placeholder="Address" required="required"></textarea>
            <span id="addresserror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
                    
            <input type="number" name="phone" id="phone"  class="w3-input w3-large w3-padding" placeholder="Contact No." required="required">
            <span id="phonenumerror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
                     
            <input type="email" name="email" id="email"  class="w3-input w3-large w3-padding" placeholder="Email" required="required">
            <span id="emailerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- States of India  -->
        <div class="form-group">
                            
            <input type="text" name="state" id="state"  class="w3-input w3-large w3-padding" placeholder="State Name" required="required">
            <span id="statenameerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- Districts -->

        <div class="form-group">
                       
            <input type="text" name="district" id="district"  class="w3-input w3-large w3-padding" placeholder="District Name" required="required">
            <span id="districtnameerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- Photo -->

        <div class="form-group" style="display: none">
            <label>Photo</label>                
            <input type="file" name="photo" id="photo"  class="form-control"  accept="images/*">
            <span id="districtnameerror" class="text-danger font-weight-bold"></span>
        </div>
        



    

    <input type="submit" name="add" class="w3-btn w3-blue w3-padding w3-round  w3-large" value="Add" onclick="return validation()" id="submit" style="margin-left: 45%;margin-top: 15px"  >




    </form>
    <?php
        require 'Admin/add_officer.php';

    ?>

</div>
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