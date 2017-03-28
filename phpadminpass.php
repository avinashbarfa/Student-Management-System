<?php
	include ('db.php');
	include('adminsession.php');

	if($_SERVER['REQUEST_METHOD'] =="POST" && !empty($_POST["currentpass"]) && !empty($_POST["newpass"]) && !empty($_POST["retypepass"]));
	{
		$current = mysqli_real_escape_string($conn,$_POST["currentpass"]);
		$new = mysqli_real_escape_string($conn,$_POST["newpass"]);
		$retry = mysqli_real_escape_string($conn,$_POST["retypepass"]);

		if($new == $retry)
			{
				$query ="SELECT id FROM adminrecord WHERE password='$current'";

				$fetch = mysqli_query($conn,$query);
				$row = mysqli_fetch_array($fetch,MYSQLI_ASSOC);
				//$active = $row['active'];
				$count = mysqli_num_rows($fetch);
				if($count == 1)
				{
					$sql="UPDATE adminrecord SET password='$new'
					      WHERE password='$current'";
					mysqli_query($conn,$sql);	 
					echo "<script>alert('Password Succesfully Changed !!')</script>"; 

				}
				else
				{
					echo "<script>alert('Current Pasword Is Incorrect !!')</script>";
				}	
			}
			else
			{
				echo "<script>alert('New Password And Confirm Password Are Not Same..')</script>";	
			}
		
	}
	$conn -> close();
?>