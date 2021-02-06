<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background-image: url(contactus-1.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
  	.scope{
  		padding: 15px;text-decoration: underline;
  	}
  	.description{
  		margin-left: 35px;
  	}
  	@media only screen and (max-width: 600px){
  		#headings{
  			display: none;
  		}

  		.scope{
  			padding: 7px;text-decoration: underline;
  			
  		}
  		.description{
  			margin-left: 5px;
  		}

  		.mobile_page_design{
  			visibility: visible;

  		}
  		#aboutus{
  			display: none;
  		}
  		#contactus{
  			display: none;
  		}
  	}
  	.padding{
  		margin-right: 4.5px;
  	}

  </style>
</head>
<body>
  <div class=" text-center" id="headings" style="width: 100%;height: 150px;background: #0000FF;padding-top: 20px;padding-bottom: 20px ;color: white">
  <h1 style= "font-family: verdana;  ">Civil Administative Service</h1>
 <p >A way to provide services to general public in more refined way</p>

</div>

<!-- Navigation Items -->

 <div class="container text-center " style="padding-top: 10px;" >
  <div class="btn-group ">
      <form action="index.php"><button type="button " class="btn btn-primary btn-lg  padding">Home</button></form>
   <form action="aboutUs.php"> <button type="submit" class="btn btn-primary btn-lg padding " id="aboutus">About Us</button></form>

   <form action="adminLogin.php"> <button type="submit" class="btn btn-primary btn-lg padding" onclick="">Admin</button></form>
    <form action="authorityLogin.php"><button type="submit" class="btn btn-primary btn-lg padding">Authority</button></form>

    
<div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle btn-lg padding" data-toggle="dropdown">
      User <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu" style="width: 25%;padding:5px;margin-left: -68px; ">
        <li><form action="userRegister.php"><button style="font-size: 16px;width: 100%;padding: 3px;margin-bottom: 2px;">Register</button></form></li>
        <li><form action="userLogin.php"><button style="font-size: 16px;width: 100%;padding: 3px">Login</button></form></li>
      </ul>
    </div>
    <form action="contactus.php">  <button type="submit" class="btn btn-primary btn-lg active" id="contactus">Contact Us</button></form>
</div>
</div>
<div class=" contact" id="headings" style="width: 100%;height: 50px ;padding-top: 20px;padding-bottom: 20px;" >
  <h5 style="color: red; text-align: center;" >CONTACT US</h5>
  <h5 style="color: red; text-align: center; ">Civil Administrative System</h5>
  <p style="text-align: center; ">CAS House,90 feet,D.P Road</p>
  <p style="text-align: center; ">Near Thakur Polytechnic</p>
  <p style="text-align: center; ">Off. Western Express Highway,P.B. No.8587</p>
  <p style="text-align: center; ">BBSR-19,Odisha,India.</p>
  <p style=" font: bold; text-align: center; ">Toll Free Helpline for Customer Queries: 1800 222 366,1800 103 4566.<br>(Available from 09:30 AM to 06:00 PM Except Sunday.) </p>
</div>
  

</body>
</html>