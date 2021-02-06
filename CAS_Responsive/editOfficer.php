<?php
    //error_reporting(0);
    session_start();
    $email = $_SESSION['email'];
    require 'DB/DBConnection.php';
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
    }

    $editQuery = "SELECT * FROM officer where id = '$id'";
    $result = mysqli_query($conn,$editQuery);
    $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">

    console.log("abcd");
        function validation(){
    

 
  var address = document.getElementById("address").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
 
  var state = document.getElementById("state").value;
  var district = document.getElementById("district").value;


  var namecheck = /^[a-zA-Z]+(([',. ][a-zA-Z ])?[a-zA-Z]*)*$/;

  var addresscheck = /^[a-zA-Z0-9]+(([',. /][a-zA-Z0-9 ])?[a-zA-Z0-9/.,]*)*$/;

 
  var statenamecheck = /^[A-Za-z]{3,30}$/;
  var districtnamecheck = /^[A-Za-z]{3,30}$/;
  //user name should conatin upper letter , lower letter , number , underscore or any combination of these
  var officeridcheck = /^[A-Za-z_0-9]{3,30}$/;  
  
 

  // indian number starts with 6,7,8,9 and contains 10 number

  var numbercheck = /^[6789][0-9]{9}$/;


  var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

  

     if(numbercheck.test(phone)){
    document.getElementById("phonenumerror").innerHTML = " ";
  }


  else{
    document.getElementById("phonenumerror").innerHTML = "** Phone number is Invalid ";
    document.getElementById("phone").focus();
    return false;

  }

      if(emailcheck.test(email)){
    document.getElementById("emailerror").innerHTML = " ";
  }


  else{
    document.getElementById("emailerror").innerHTML = "** Email address is Invalid ";
    document.getElementById("email").focus();
    return false;

  }


    if(addresscheck.test(address)){
    document.getElementById("addresserror").innerHTML = " ";
  }
  else{
    document.getElementById("addresserror").innerHTML = "** Address field is Invalid ";
    document.getElementById("address").focus();
    return false;

  }







  if(statenamecheck.test(state)){
    document.getElementById("statenameerror").innerHTML = " ";
    console.log("here");
  }
  else{
    document.getElementById("statenameerror").innerHTML = "** State name is Invalid ";
    document.getElementById("state").focus();
    console.log("not here");
    return false;

  }
      if(districtnamecheck.test(district)){
    document.getElementById("districtnameerror").innerHTML = " ";
  }
  else{
    document.getElementById("districtnameerror").innerHTML = "** District name is Invalid ";
    document.getElementById("district").focus();
    return false;

  }

}

    </script>


    <style type="text/css">
        .width{
            width: 19.7%;
            padding:5px;
            font-size: 19px;
            border-radius: 8px;
            cursor: pointer;
        }
             #head{
            visibility: hidden;
         }
         #top_nav{
         
         }
         #addingOfficer{
            margin-left: 25%;
            width: 40%;
            margin-top: 45px;
            padding: 5px;
            background: #cacaca;
         }


     #submit{
        margin-left: 20px;
        margin-top: 0px;padding-left: 105px;padding-right: 105px;
     }
         @media only screen and (max-width: 600px){
            .width{
            width: 95%;
            padding: 13px;
            margin: 5px;
            border-radius: 13px;
            cursor: pointer;
            font-size: 18px;
        
         }
         #logout{
            background: red;
            color: white
         }
         #addingOfficer{
            

            margin-left: 0%;
            width: 100%;
            margin-top: 0px;
            padding: 5px;
            background: #cacaca;
         }
         
         #heading{
            display: none;
         }

         #top_nav{
            display: none;
         
         }

           #submit{
        margin-left: 0px;
        width: 50%;
        padding-left: 50px;
        padding-right: 50px;
        
     }
     #cancel{
        width: 48%
     }
     #delete{
        width: 100%;
        margin-left: 0px !important;
     }

         }
         
    
    </style>
  
</head>
<body>

<!-- Top Nav Panel -->

<nav>
    <button align="center" class="w3-xxlarge w3-padding" style="background: #cccdcc;width: 100% " id="heading" >Edit Officer</button>
</nav>

<!-- Search box -->






 <!-- Add officer Details -->

<!-- Show list of 30 officers -->

<!-- if you assign officer it should be along with date  -->
<!-- One officer take a maximum of 5 jobs at a time -->

	
	<div id="addingOfficer" >
        <div class="container" >
    
    <form name="addOfficer" action="editOfficer.php" method="post" enctype="multipart/form-data" >
        <h3 align="center"><u>Edit Officer</u></h3>

        <div class="form-group">
            <label>Officer id</label>           
            <input type="number" name="officerid" id="officerid" value="<?php echo $row['id']; ?>"  class="form-control" disabled="disabled">
            
        </div>
        
        <div class="form-group">
            <label>Name</label>         
            <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"  class="form-control" disabled="disabled">
        
        </div>
        
        <div class="form-group">
            <label>Address</label>          
            <textarea rows="2" cols="30" name="address" id="address"  class="form-control"><?php echo $row['address']; ?></textarea>
            <span id="addresserror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
            <label>Phone</label>            
            <input type="number" name="phone" id="phone" value="<?php echo $row['phone']; ?>"  class="form-control">
            <span id="phonenumerror" class="text-danger font-weight-bold"></span>
        </div>
        
        <div class="form-group">
            <label>Email</label>                
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"  class="form-control" disabled="disabled">
            <span id="emailerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- States of India  -->
        <div class="form-group">
            <label>State</label>                
            <input type="text" name="state" id="state" value="<?php echo $row['state']; ?>"  class="form-control">
            <span id="statenameerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- Districts -->

        <div class="form-group">
            <label>District</label>             
            <input type="text" name="district" id="district" value="<?php echo $row['district']; ?>"  class="form-control">
            <span id="districtnameerror" class="text-danger font-weight-bold"></span>
        </div>

        <!-- Photo -->

<!--         <div class="form-group">
            <label>Photo</label>                
            <input type="file" name="photo" id="photo"  class="form-control" required="required" accept="images/*">
            <span id="districtnameerror" class="text-danger font-weight-bold"></span>
        </div>
         -->



    
    <a href="viewOfficer.php"><input type="button" name="cancel" class="btn btn-warning" value="Cancel" id="cancel" ></a>
    <input type="submit" name="Save" class="btn btn-primary" value="Save" onclick="return validation()" id="submit"  >
        



    <?php
        require 'Admin/edit_Officer.php';

    ?>


	
	</div>









<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->




</body>


</html>