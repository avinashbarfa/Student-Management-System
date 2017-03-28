<?php
include("adminsession.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL -Profile</title>
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
						<div class="box">
							<h3>Admin Profile</h3>
							<div class="detail_form">
								<table>	
									<tr>
										<th><h4>First Name - </h4></th>
										<th><h4><?php echo $_SESSION['login_firstname'];?></h4></th>
										<th><h4>Last Name - </h4></th>
										<th><h4><?php echo $_SESSION['login_lastname'];?></h4></th>
									</tr>
								</table>		 
							</div>	
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