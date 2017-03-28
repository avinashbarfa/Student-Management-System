<?php
include("adminsession.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL -Change Password</title>
	<meta charset="utf-8">
	<meta name="STUDENT MANAGEMENT SYSTEM">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="front">
		<?php
			include('admin-header.php');
		?>

		<div class="section">
			<div class="container">
				<div class="column">
					<div class="row">
						<div class="box-3">
							<h3>Change Password</h3>
							<form method="POST" action="phpadminpass.php">
								<table>
									<tr>
										<th><h4>Current Password :</h4></th>
										<th>
											<h4><input class="field" type="Password" name="currentpass" required="required"></h4>
										</th>
									</tr>
									<tr>
										<th><h4>New Password :</h4></th>
										<th>
											<h4><input class="field" type="Password" name="newpass" required="required"></h4>
										</th>
									</tr>	
									<tr>
										<th><h4>Retype Password :</h4></th>
										<th>
											<h4><input class="field" type="Password" name="retypepass" required="required"></h4>
										</th>
									</tr>
									<tr>
										<th colspan="2">
											<button type="submit" class="btn-primary" value="submit" name="Change Password"> Change Password</button>	 
										</th>
									</tr>
								</table>		
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="column">
					<div class="row">
						<p>Developed and Designed By-</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>