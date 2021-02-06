<?php
$servername="localhost";
$username="root";
$password="";
$dbname="civil_admin";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed because".mysqli_connect_error());
}

?>