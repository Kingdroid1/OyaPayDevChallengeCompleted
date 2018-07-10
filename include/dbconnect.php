<?php
   
  	// DB Params
  	$host = "localhost";
  	$username = "root";
  	$password = "";
  	$db_name = "oyapaymerchant";
  	
 
  	// DB Connect
  	$conn = mysqli_connect($host, $username, $password, $db_name);
  
 // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to Database: " . mysqli_connect_error();
  }

 ?>