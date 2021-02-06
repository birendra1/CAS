<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
</style>

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
     <a href="addOfficer.php" class="fas fa-book" style="padding-left: 5%;width: 100%;" > <span style="padding-left: 15%"> Add Officer</span></a>
  <a href="viewComplaint.php" class="fas fa-book" style="padding-left: 5%;width: 100%;" > <span style="padding-left: 15%"> View Complaint</span></a>
  <a href="viewOfficer.php" class="fas fa-user-tie" style="padding-left: 5%;width: 100%;"> <span style="padding-left: 15%">View Officer</span></a>

  <a href="logout.php" class="fas fa-sign-out-alt" style="padding-left: 5%;width: 100%;"><span style="padding-left: 16.2%">Logout</span></a>
  <hr> 
    <span style="padding-left: 28%;font-size: 23px;text-decoration: underline;"><u>Contact Us</u></span><br>

     <i class="fa fa-phone w3-padding" style="font-size:20px;"><span style="padding-left: 10px"> 9861603040</span></i><br>
     <i class="fa fa-envelope w3-padding" style="font-size:20px;"> iambiren00@gmail.com</span></i><br>
</div>

<!-- This below div contains all details of body -->

<div id="main" >
  <button class="openbtn w3-green" onclick="openNav()">&#9776;  <span style="padding-left: 95px;padding-right:140px "> Add Officer</span> </button> 

 <!-- Add officer Details -->

<!-- Show list of 30 officers -->

<!-- if you assign officer it should be along with date  -->
<!-- One officer take a maximum of 5 jobs at a time -->

  <br>
  <br>

     <div id="addingOfficer">
        <div   >

    
    <form name="addOfficer" action="addOfficer.php" method="post" enctype="multipart/form-data" >
     

        <div >           
            <input type="number" name="officerid" id="officerid"  placeholder="Officerid" class="w3-input w3-xlarge w3-padding" required="required">
            <span id="officeriderror" class="text-danger font-weight-bold"></span>
        </div>

        
        <div class="form-group">
               
            <input type="text" name="name" id="name"  class="w3-input w3-xlarge w3-padding" placeholder="Name" required="required">
            <span id="nameerror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
                      
            <textarea rows="2" cols="30" name="address" id="address"  class="w3-input w3-xlarge w3-padding" placeholder="Address" required="required"></textarea>
            <span id="addresserror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
                    
            <input type="number" name="phone" id="phone"  class="w3-input w3-xlarge w3-padding" placeholder="Contact No." required="required">
            <span id="phonenumerror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
                     
            <input type="email" name="email" id="email"  class="w3-input w3-xlarge w3-padding" placeholder="Email" required="required">
            <span id="emailerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- States of India  -->
        <div class="form-group">
                            
            <input type="text" name="state" id="state"  class="w3-input w3-xlarge w3-padding" placeholder="State Name" required="required">
            <span id="statenameerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- Districts -->

        <div class="form-group">
                       
            <input type="text" name="district" id="district"  class="w3-input w3-xlarge w3-padding" placeholder="District Name" required="required">
            <span id="districtnameerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- Photo -->

        <div class="form-group" style="display: none">
            <label>Photo</label>                
            <input type="file" name="photo" id="photo"  class="form-control"  accept="images/*">
            <span id="districtnameerror" class="text-danger font-weight-bold"></span>
        </div>
        



    

    <input type="submit" name="add" class="w3-btn w3-blue w3-padding w3-round w3-mobile  w3-xlarge" value="Add" onclick="return validation()" id="submit"  >




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