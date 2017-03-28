<?php
	include('db.php');
	session_start();

 	$receiver = $_REQUEST["to"];
 	$subject=  $_REQUEST["title"];
 	$message =  $_REQUEST["text"];
 	$sender= $_SESSION['login_firstname'];

 	$query = "INSERT INTO NOTICERECORD (receiver, sender, subject, message) VALUES ('$receiver','$sender','$subject','$message')";
 	
 	if ($conn->query($query) === TRUE)
 	{
    	header('Location: notice.php');
	} 
	else {
    echo "Error: In Storing Data" . $sql . "<br>" . $conn->error;
	}
 	$conn -> close();
?>
								