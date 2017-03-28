<?php
include("adminsession.php");
?>
<html>
<head>
	<title>FACULTY PORTAL -Filter Student</title>
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
							<h3>Filter Student</h3>
							<form method="POST" method="filterstudent.php">
								<table>
									<tr>
										<th><h4>Class:</h4></th>
										<th>
											<select name="class">
												<option>select class</option>
												<option value="0">All Classes</option>
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
			
										<th><h4>Section:</h4></th>
										<th>
											<select name="section">
												<option>select section</option>
												<option value="00">All Sections</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
											</select>
										</th>	
										<th>
											<button type="submit" class="btn btn-primary" value="submit" name="filter student">Filter</button>
										</th>
									</tr>		
								</table>	
							</form>
							<?php include('phpfilterstudent.php'); ?>
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