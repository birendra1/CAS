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
  <button class="openbtn w3-green" onclick="openNav()" style="position: fixed">&#9776;  <span style="padding-left: 75px;padding-right:140px "> Assign Officer</span> </button> 
</div>


	<?php
	session_start();
	$email = $_SESSION['email'];
	require 'DB/DBConnection.php';
	if (isset($_POST['assign'])) {
		# code...
		$id = $_POST['data'];
	 $complainQuery = "SELECT * FROM complain where id = '$id'";
	$result = mysqli_query($conn,$complainQuery);
	$row = mysqli_fetch_assoc($result);
    $searchName = "SELECT name FROM user WHERE email='".$row['complainby']."'";
    $name = mysqli_fetch_assoc(mysqli_query($conn,$searchName));

?>

<div class="w3-padding  w3-gray  " style="border-radius: 10px;font-size: 20px;"> 

     <form action="complainAssign.php" method="POST">
		<table id="redesign" style="margin-top: 2.5%" >

			<tr>
				<td>Complainer</td>
				<td><?php echo $name['name']; ?></td>
			</tr>

			<tr>
				<td>Title: </td>
				<td><?php echo $row['title']; ?></td>
			</tr>

			<tr>
				<td>Subject</td>
				<td><?php echo $row['subject']; ?></td>
			</tr>
			
			<tr>
				<td>Description</td>
				<td><?php echo $row['cdescription']; ?></td>
			</tr>

			<tr>
				<?php
					$officerQuery = "SELECT * FROM officer ";
					$resultOfficer = mysqli_query($conn,$officerQuery);
				?>
				<td>Ofiicer's Name</td>
				<td>
					<select name="officerid">
						<?php
							while ($rowOfficer = mysqli_fetch_assoc($resultOfficer)) {
								
							
						?>
						<option value="<?php echo $rowOfficer['id'] ?>"><?php echo $rowOfficer['name']; ?></option>
					<?php } ?>
						
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<button class="w3-btn w3-blue w3-padding w3-large w3-round" name="assgn" >Assign</button>
				</form></td>
			</tr>

</table>
<?php
}
	if (isset($_POST['assgn'])) {
		 $id = $_POST['id'];
		$officerid = $_POST['officerid'];
		$flag = true ;
		if(mysqli_query($conn,"UPDATE complain set status = '1' where id='$id'")) {
			if(mysqli_query($conn,"INSERT INTO complainassign (complainid,officerid) values('$id','$officerid')")) {
				if (mysqli_query($conn,"INSERT INTO complainlog (complainid,complaindescription) values('$id','The complaint is Assigned')")) {
					$flag = true ;
				} else {
					$flag = false;
				}
			} else {
				$flag = false;
			}
		} else {
			$flag = false;
		}
		if ($flag == true) {
			echo "<script> alert(\" Officer is assigned \") </script>";
		} else {
		

			echo "<script> alert(\" Opeartion unsuccessful try again \") </script>";
		}
		
	}
	
?>
</div>
</body>
</html>