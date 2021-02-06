<!DOCTYPE html>
<html>
<head>
  <title>View Complaint</title>
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
          <i  style="margin-left: 25px"> View Officer</i>
        </a>
      </li>

         <li>
        <a href="viewComplaint.php">
          <i class="w3-text-orange" class="zmdi zmdi-comment-more" style="margin-left: 10px"> View Complaint</i>
        </a>
      </li>

    

      

      <li>
        <a href="logout.php">
          <i class="zmdi zmdi-calendar" style="margin-left: 25px"> Logout</i>
        </a>
      </li>
 
   
    </ul>

  </div>




  <!-- Content -->

	<?php
	session_start();
	$email = $_SESSION['email'];
	require 'DB/DBConnection.php';
	 $complainQuery = "SELECT * FROM complain ORDER BY id DESC";
	$result = mysqli_query($conn,$complainQuery);


?>

	

<!-- <div class="search"  style="margin-bottom: 2.45%">
 <form action="viewComplaint.php" method="post" >
      <input type="text" placeholder="complain id/subject" name="search" style="border:1px solid black">
      <button type="submit" name="submit"><i class="fa fa-search" style="font-size: 21px;padding: 6.9px;"></i></button>
    </form>
</div> -->




	  <div id="content">
   
  <table class="w3-table-all w3-hoverable" style="margin-left: 12.75%;width: 87.8%">
  	
     			<tr class="w3-black w3-hover-red">
				<th style="width: 4.5%">Complain id</th>
				<th style="width: 7.5%">Complained By</th>
				<th style="width: 6.5%">Title: </th>
				<th style="width: 7.5%">Subject</th>
				<th style="width: 4.5%">Complain Description</th>
				<th style="width: 2.5%">Image</th>
				<th style="width: 4.5%">Date:</th>
				<th style="width: 8.5%">Status</th>	
				<th style="width: 5%"></th>			

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
				<td><?php echo $row['cdescription']; ?></td>
				<td><img src="<?php echo $row['file'] ?>" width="100px" height="100px" alt="image not found"></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $status; ?></td>
				<td><form action="complainAssign.php" method="POST">		<input type="hidden" name="data" value="<?php echo $row['id']; ?>">
          <?php if ($statusOfComplain == 0) {
            # code...
          ?><button  style="margin-left: 5px;padding: 5px;" type="submit" name="assign" value="assign">Assign</button><?php } ?></form></td>

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

</body>
</html>