<!DOCTYPE html>
<html>
<head>
	<title>Assign Officer</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <style type="text/css">
		.width{
			width: 15.6%;
			padding:5px;
			font-size: 19px;
			border-radius: 8px;
			cursor: pointer;
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
		 
	

         }
		 
	
	</style>

</head>
<body>

	<h1 align="center" style="background: #cccdcc; width: 100%;margin-left:-15px;border-radius: 10px;" id="heading" >Admin Panel</h1>


	<div id="top_nav">

		<input type=button onClick="parent.location='addOfficer.php'" class="btn btn-primary   width" value='Add Officer'>
		<input type=button onClick="parent.location='editOfficer.php'" class="btn btn-primary   width" value='Edit Officer'>
		<input type=button onClick="parent.location='viewComplaint.php'" class="btn btn-primary   active width" value='View Complaint'>
		<input type=button onClick="parent.location='viewOfficer.php'" class="btn btn-primary   width" value='View Officer'>
		<input type=button onClick="parent.location='Feedback.php'" class="btn btn-primary  width" value='Feedback'>
		<input type=button onClick="parent.location='logout.php'" class="btn btn-primary   width" value='Logout'>
	</div>

	<div>

	<div>
			<form action="assignOfficer.php" method="post">
        <input type="search" name="search" placeholder="Officer id/district name">
		<button type="submit" class="btn btn-primary">Search</button>
		</form>

	</div>

<form  action="assignOfficer.php" method="post">
	<table>
			<tr>
				<td>Officer id</td>
				<td>  </td>
			</tr>

			<tr>
				<td>Officer Name</td>
				<td>  </td>
			</tr>

			<tr>
				<td>District Name id</td>
				<td>  </td>
			</tr>

			<tr>
				<td>Complain id</td>
				<td>  </td>
			</tr>

			<tr>
				<td>Complained By</td>
				<td>User Name</td>
			</tr>

			
			<!-- Check if new or unassigned complain below btn appears -->

		</table>
		<button  style="margin-left: 155px;padding: 5px;margin-top: 10px;">Assign</button></form>




</div>

</body>
</html>