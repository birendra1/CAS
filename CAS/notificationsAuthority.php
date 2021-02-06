<!DOCTYPE html>
<html>
<head>
	<title>Authority Panel</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


	<nav class="navbar navbar-inverse">
 
    <ul class="nav navbar-nav">
      <li ><a href="viewComplaints.php">View Complaints</a></li>
      <li ><a  href="updateComplaintsAuthority.php">Update Complaints </a></li>
 
      <li class="active"><a href="notificationsAuthority.php">Notifications</a></li>
    </ul>

    <!-- GIve logout url -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>


	   <div style="margin-bottom: 15px;margin-top: 35px;margin-left: 15px;" id="notificationsAuthority">
   	<form action="notificationsAuthority.php" method="post">
        <input type="search" name="search" placeholder="complain id/title/subject" style="padding: 5px" size="35">
		<button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div>


	<div style="padding: 15px;width: 20%;;border-radius: 15px;background: #acacac;margin: 5px;">
		
  <form action="notificationsAuthority.php" method="post">
		<table >
			<tr>
				<td>Complain id: </td>
				<td></td>
			</tr>

			<tr>
				<td>Title : </td>
				<td></td>
			</tr>

			<tr>
				<td>Subject: </td>
				<td></td>
			</tr>
				<tr>
				<td>Image</td>
				<td><img src="" alt="not found" height="0" width="0"></td>
			</tr>

			<tr>
				<td>Complained By : </td>
				<td></td>
			</tr>
				<tr>
				<td>Status: </td>
				<td>
					Status shown here

				</td>
			</tr>
			


		
		
		
			<!-- Check if new or unassigned complain below btn appears -->

		</table>

		<button type="submit" class="btn btn-primary btn-large" style="margin-left: 35%;margin-top: 3%">Send</button>
	</form>

	</div>

</body>
</html>