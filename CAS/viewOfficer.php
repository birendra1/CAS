<?php
	//error_reporting(0);
	session_start();
	$email = $_SESSION['email'];
	require 'DB/DBConnection.php';

	$officerQuery = "SELECT * FROM officer ORDER BY id DESC";
	$result = mysqli_query($conn,$officerQuery);
?>
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
          <i style="margin-left: 30px;"> Add Officer</i>
        </a>
      </li>
      <li>
        <a href="viewOfficer.php">
          <i  class="w3-text-orange"  style="margin-left: 25px"> View Officer</i>
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
    
<!-- <div class="search"  style="margin-bottom: 2.45%">
 <form action="viewOfficer.php" method="post" >
      <input type="text" placeholder="complain id/subject" name="search" style="border:1px solid black">
      <button type="submit" name="submit"><i class="fa fa-search" style="font-size: 21px;padding: 6.9px;"></i></button>
    </form>
</div> -->
	
	<?php
		
		if(mysqli_num_rows($result) > 0)
		{

	?>


	<table class="w3-table-all w3-hoverable" style="margin-left: 1.5%">
  	
     			<tr class="w3-black w3-hover-red">
				<th>Officer id</th>
				<th>Officer Name</th>
				<th>Mobile </th>
				<th>Address</th>
				<th>State</th>
				<th>District</th>
				<th>Image:</th>
				<th></th>			

			</tr>


			<!-- Paste Your My Sqli code here -->
			<?php
				while ($row = mysqli_fetch_assoc($result)) {
					
				
			?>

			<tr class="w3-light-grey w3-hover-green">

				<!-- paste your code inside td  -->

				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['phone'] ;?></td>
				<td><?php echo $row['address'] ;?></td>
				<td><?php echo $row['state'] ;?></td>
				<td><?php echo $row['district'] ;?></td>
				<td><img src="<?php echo $row['photo'] ?>" alt="Photo not found" height="100px" width="170px"></td>			
			

		<td><form action="editOfficer.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
			<button type="submit" name="edit" class="btn btn-primary btn-large " value="edit" >Edit</button>
		</form></td>

	</tr>
	<?php
		}
	?>
</table>

<?php
	}
	else {
		echo "no officer is added";
	}
?>

	
</body>
</html>