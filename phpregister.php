<?php

 	$fname = $_REQUEST["firstname"];
 	$lname =  $_REQUEST["lastname"];
 	$adminname =  $_REQUEST["uname"];
 	$pass = $_REQUEST["upass"];

 	include ('db.php');

 	$query = "INSERT INTO ADMINRECORD (username, firstname, lastname, password) VALUES ('$adminname','$fname','$lname','$pass')";
 	
 	if ($conn->query($query) === TRUE)
 	{
    	header('Location: index.php');
	} 
	else {
    echo "Error: In Storing Data" . $sql . "<br>" . $conn->error;
	}
 	$conn -> close();
?>