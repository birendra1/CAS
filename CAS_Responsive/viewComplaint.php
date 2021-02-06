<!DOCTYPE html>
<html>
<head>
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
  <button class="openbtn w3-green" onclick="openNav()" style="position: fixed">&#9776;  <span style="padding-left: 45px;padding-right:140px "> View Complaints</span> </button> 
</div>


 <!-- Add officer Details -->

<!-- Show list of 30 officers -->

<!-- if you assign officer it should be along with date  -->
<!-- One officer take a maximum of 5 jobs at a time -->

<!-- Here shows a list of all complaints -->
	<?php
	session_start();
	$email = $_SESSION['email'];
	require 'DB/DBConnection.php';
	 $complainQuery = "SELECT * FROM complain ORDER BY id DESC";
	$result = mysqli_query($conn,$complainQuery);


?>

	




	<div style="padding-top: 12%;">
		
 
   
  <table class="w3-table-all w3-hoverable">
  	
     			<tr class="w3-black w3-hover-red w3-small">
				<th >Complain id</th>
				<th >Complained By</th>
				<th >Title: </th>
				<th >Subject</th>
				
				
					
				<th ></th>			

			</tr>
			

				<?php
			if (mysqli_num_rows($result) > 0) {
    			
    			// output data of each row
    			while($row = mysqli_fetch_assoc($result)) {
    				$searchName = "SELECT name FROM user WHERE email='".$row['complainby']."'";
    				$name = mysqli_fetch_assoc(mysqli_query($conn,$searchName));
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
	

			<tr class="w3-light-grey w3-hover-green">
					<td><?php echo $row['id']; ?></td>
				<td><?php echo $name['name']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['subject']; ?></td>
					
				
				<td><form action="complainAssign.php" method="POST">		<input type="hidden" name="data" value="<?php echo $row['id']; ?>">
          <?php if ($statusOfComplain == 0) {
            # code...
          ?><button  style="margin-left: 5px;padding: 5px;" type="submit" name="assign" value="assign" class="w3-btn w3-medium w3-blue">Assign</button><?php } ?></form></td>

	<?php
			}
		}
		else {
			echo "no complaints registered yet";
		}
	?>

</tr>
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



 
