<?php
include("adminsession.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL -Add Faculty</title>
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
						<div class="box-5">
							<form method="POST" action="aemail.php">
								<table>
									<tr>
										<td><label>To :</label></td>
										<td><input type="email" name="to"></td>
									</tr>
									<tr>	
										<td><label>Subject :</label></td>
										<td><input type="text" name="subject"></td>
									</tr>	
									<tr>
										<td><label>Message :</label></td>
										<td><textarea name="mailtext" cols="100" rows="10"></textarea></td>
									</tr>
									<tr>						
										<td>
										</td>
										<td>
											<button type="submit" value="submit" name="submit">Send Email</button>
										</td>
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