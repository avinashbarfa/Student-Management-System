<?php
 
 	$fname = $_REQUEST["firstname"];
 	$lname =  $_REQUEST["lastname"];
 	$sclass =  $_REQUEST["class"];
 	$ssection =  $_REQUEST["section"];
 	$rollno =  $_REQUEST["rollnumber"];
 	$scholarno =  $_REQUEST["scholar"];
 	$bgroup =  $_REQUEST["bloodgroup"];
 	$pass = $_REQUEST["defaultpass"];

 	include ('db.php');

 	$query = "INSERT INTO STUDENTRECORD (rollno, firstname, lastname, class, section, scholarno, bloodgroup, password) VALUES ('$rollno','$fname','$lname','$sclass','$ssection','$scholarno','$bgroup','$pass')";
 	
 	$result=$conn->query($query);

 	if(!$result)
 	{	
 		die("Data Insertion Failed : ".$conn->connect_error);
 	}
 	else
	{
		header("Location: addstudent.php");
	}
 	$conn -> close();
?>