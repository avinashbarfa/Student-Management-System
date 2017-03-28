<?php

 	$fname = $_REQUEST["firstname"];
 	$lname =  $_REQUEST["lastname"];
 	$enroll =  $_REQUEST["enrollno"];
 	$bgroup =  $_REQUEST["bloodgroup"];
 	$sclass =  $_REQUEST["class"];
 	$ssection =  $_REQUEST["section"];
 	$pass = $_REQUEST["fpassword"];

 	include ('db.php');

 	$query = "INSERT INTO FACULTYRECORD (enrollid, firstname, lastname, bloodgroup, class, section, password) VALUES ('$enroll','$fname','$lname','$bgroup','$sclass','$ssection','$pass')";
 	
 	} if ($conn->query($query) === TRUE)
 	{
    	header('Location: addfaculty.php');
	
	else {
    echo "Error: In Storing Data" . $sql . "<br>" . $conn->error;
	}
 	$conn -> close();
?>