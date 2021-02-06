<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel</title>
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
          <i  style="margin-left: 25px"> View Officer</i>
        </a>
      </li>

         <li>
        <a href="viewComplaint.php">
          <i class="zmdi zmdi-comment-more" style="margin-left: 10px"> View Complaint</i>
        </a>
      </li>

      <li>
        <a href="suggestion.php">
          <i class="w3-text-orange"   style="margin-left: 25px">Suggestion</i>
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
  <div id="content">
  

























  </div>
</div>
</body>
</html>