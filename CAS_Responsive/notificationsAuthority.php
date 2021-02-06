<!DOCTYPE html>
<html>
<head>
	<title>Authority Panel</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<!-- Top Nav Panel -->

<div class="w3-container">


  <div class="w3-bar " style="width: 101%;margin-left: -4.75%;position: fixed;">
    <a href="notificationsAuthority.php" class="w3-bar-item w3-button w3-mobile  w3-black" style="width: 100%;height: 55px;font-size: 26.45px;margin-bottom: 35px;padding: 13px" >Update Complaints</a>
 
    </div>
</div>


<!-- Search for Compaints -->


     <div style="margin-bottom: 15px;margin-top: 15%;margin-left: 15px;font-size: 20px" id="search" >
    <form action="notificationsAuthority.php" method="post">
        <input type="search" name="search" placeholder="complain id/title/subject" style="padding: 9.5px" size="21">
    <button type="submit" class="btn btn-primary" style="font-size: 26px">Search</button>
    </form>
  </div>

	<!-- This section shows containts of the complain -->


	<div style="padding: 15px;width: 97.5%;;border-radius: 15px;background: #acacac;margin: 5px;font-size: 20px">
		
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
		</table>

		<button type="submit" class="btn btn-primary " style="margin-left: 35%;margin-top: 3%;font-size: 23px">Send</button>
	</form>

	</div>

</body>
</html>