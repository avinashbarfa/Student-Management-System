<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname ="studentdata";

	$conn =new mysqli($servername,$username,$password,$dbname);
 		
 	if($conn->connect_error)
 	{
 		die("Database Connection Failed." .$conn->connect_error);
 	}
?> 		