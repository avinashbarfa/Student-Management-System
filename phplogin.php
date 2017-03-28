<?php
	include ('db.php');
	session_start();
	if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['user']) && !empty($_POST['pass']))
	{
		$loginid=mysqli_real_escape_string($conn,$_POST['user']);
		$loginpass=mysqli_real_escape_string($conn,$_POST['pass']);

		$sql ="SELECT adminid FROM adminrecord WHERE username ='$loginid' and password='$loginpass'";

		$fetch=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($fetch,MYSQLI_ASSOC);
		$active = $row['active'];
		$count= mysqli_num_rows($fetch);
		if($count == 1)
		{
			$_SESSION['login_user']=$loginid;
			header("Location: adminprofile.php");
		}
		else
		{
			/*header("Location: index.php");*/
			echo "password not match";
		}
	}
	else
	{
		echo "Error In login";
	}
	$conn -> close();
?>