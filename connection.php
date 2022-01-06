<?php
$servername="localhost";
$username="root";
$password="";
$database="ecommerce";
//creating database connection
$con=new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
	die("Connection failed");
}
else{

//echo "Connection successfull";
}
?>
