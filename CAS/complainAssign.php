
<!DOCTYPE html>
<html>
<head>
	   <meta charset="utf-8">

 <script type="text/javascript" src="js/editOfficer_Validation.js"></script>


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
  background: #cdcdcd;
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
<body bgcolor="#ababab">
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
   

      <li >
        <a href="adminPanel.php">
          <i  style="margin-left: 30px;"> Add Officer</i>
        </a>
      </li>
      <li>
        <a href="viewOfficer.php">
          <i class="w3-text-orange" style="margin-left: 25px"> View Officer</i>
        </a>
      </li>

         <li>
        <a href="viewComplaint.php">
          <i  class="zmdi zmdi-comment-more" style="margin-left: 10px"> View Complaint</i>
        </a>
      </li>

    

      

      <li>
        <a href="logout.php">
          <i class="zmdi zmdi-calendar" style="margin-left: 25px"> Logout</i>
        </a>
      </li>
 
   
    </ul>

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

<div class="w3-padding  w3-gray  w3-margin-top " style="width: 32.3%;border-radius: 10px;font-size: 20px;margin-left:15%"> 

     <form action="complainAssign.php" method="POST">
		<table id="redesign" >

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