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
      background-image: url(picture_2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
    
    .wrapper{
      margin-top: 10%;
    }
    .wrapper h1{
      font-family: 'Allura' , cursive;
      font-size: 52px;
      margin-bottom: 60px;
      text-align: center;
    }
    .civil{
      display: flex;
      text-align: center;
      width: auto;
        justify-content: center; 
    }
    .civil .civil_members{
      background: #fff;
      margin: 5px;
      margin-bottom: 50px;
      width: 300px;
        padding: 20px;
        line-height: 20px;
        color: #8e8b8b;
        position: relative;
    }
    .civil .civil_members h3{
      color: #81c644;
      font-size: 26px;
      margin-top: 50px;
    }
    .scope{
      padding: 15px;text-decoration: underline;
    }
    .description{
      margin-left: 35px;
    }

    .padding{
      margin-left: 15px;
    }


  </style>
</head>
<body >
  <div class=" text-center" id="headings" style="width: 100%;height: 150px;background: #0000FF;padding-top: 20px;padding-bottom: 20px ;color: white">
  <h1 style= "font-family: verdana;  ">Civil Administative Service</h1>
 <p >A way to provide services to general public in more refined way</p>

</div>

<!-- Navigation Items -->

 <div class="container text-center " style="padding-top: 10px;" >
  <div class="btn-group ">
    <form action="index.php"><button type="button " class="btn btn-primary btn-lg  padding">Home</button></form>
   <form action="aboutUs.php"> <button type="submit" class="btn btn-primary btn-lg padding active" id="aboutus">About Us</button></form>

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
    <form action="contactus.php">  <button type="submit" class="btn btn-primary btn-lg padding" id="contactus">Contact Us</button></form>
</div>
</div>
 
  <div class="civil">
<div class="civil_members">
  <h3>ADMIN</h3>
  <p class="role">FUNCTIONALITY OF ADMIN</p>
  <p>Admin functionality consists of many things such as add new authority who solves user complain.Admin also does other functionality such as edit officer details and delete officer details.When admin receives the user's complain he also give feedback to the user that he receives the user's complain.Then admin assign officer's to the user's complain,view complain,view pending complain,view officers,view users.</p>
</div>
<div class="civil_members">
  <h3>AUTHORITY</h3>
  <p class="role">FUNCTIONALITY OF AUTHORITY</p>
  <p>The authority here like District Education Officer,District Executive Officer,Chief District Medical Officer,Deputy director of Agriculture,Additional Collector.The authority is the one who solve all the complain of the user and update the status of the complain.Authority also chat with the user to get any suggestion from the user.</p>
</div>
<div class="civil_members">
  <h3>USER</h3>
  <p class="role">FUNCTIONALITY OF USER</p>
  <p>The user is registered by himself using email id and phone number.After registering himself user get a unique id.The user complain by using this id and track the status of his complain and update its complain.Give suggestion to the authority about his complaint.The user can also chat with the authority about his problem.</p>
</div>
  </div>
  </div>
</body>
</html>