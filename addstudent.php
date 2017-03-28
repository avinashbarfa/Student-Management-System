<?php
include("adminsession.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL -Add Student</title>
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
						<div class="box-2">
							<h3>Add Student</h3>
								<form method="post" action="phpaddstudent.php">
									<table>
										<tr>
											<th><h4>First Name :</h4></th>
											<th><input type="text" name="firstname" required="required"></th>
											<th><h4>Lastname :</h4></th>
											<th><input type="text" name="lastname" required="required"></th>
										</tr>	
										<tr>
											<th><h4>Class : </h4></th>
											<th>
												<select name="class">
													<option value="nursery">Nursery</option>
													<option value="kg-1">KG-1</option>
													<option value="kg-2">KG-2</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>	
											</th>
										</tr>	
										<tr>
											<th><h4>Section :</h4></th>
											<th>
												<select name="section">
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
												</select>
											</th>	
										</tr>		
											<tr>
												<th><h4>Roll No. :</h4></th>
												<th><input type="text" name="rollnumber" required="required"></th>
											</tr>
											<tr>
												<th><h4>Scholar No. :</h4></th>
												<th><input type="text" name="scholar" required="required"></th>
											</tr>
										<tr>
											<th><h4>Blood Group :</h4></th>
											<th>	
												<select name="bloodgroup">
													<option value="A+">A+</option>
													<option value="A-">A-</option>
													<option value="B+">B+</option>
													<option value="B-">B-</option>
													<option value="AB+">AB+</option>
													<option value="AB-">AB-</option>
													<option value="O+">O+</option>
													<option value="O-">O-</option>
												</select>
											</th>
										</tr>
										<tr>
											<th><h4>Assign Password :</h4></th>
											<th>
												<h4><input type="Password" name="defaultpass" required="required"></h4>
											</th>	
										</tr>	
										<tr>
											<th colspan="4"><button type="submit" class="btn btn-primary" value="submit" name="add student">Add Student</button></th>
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