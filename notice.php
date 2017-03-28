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
						<div class="notice">
							<button onclick="myFunction()">Compose</button>
							<div id="myDiv" style="display:none;">					
								<form method="POST" action="phpnotice.php">	
									<table>
										<tr>
											<td><label>To :</label></td>
											<td><input type="text" name="to"></td>
										</tr>
										<tr>	
											<td><label>Subject :</label></td>
											<td><input type="text" name="title"></td>
										</tr>	
										<tr>
											<td><label>Message :</label></td>
											<td><textarea name="text" cols="100" rows="10"></textarea></td>
										</tr>
										<tr>						
											<td>
											</td>
											<td>
												<button type="submit" value="submit" name="submit">Post Notice</button>
											</td>
										</tr>
									</table>	
								</form>	
							</div>	
								<?php
									include ('db.php');

									$sql = "SELECT * FROM  noticerecord";
									$result = mysqli_query($conn,$sql);										
									while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
									{
									 ?>
										<div class="board">
										<?php
											echo "To : ",$row['receiver'],"<br>",$row['time'];
										    echo "<hr>";
											echo "Sub :",$row['subject'],"<br>";
											echo $row['message'],"<br><br>";
											echo "From : ",$row['sender'];
										?>	
										</div>
										<br>
										<?php
									}
								?>

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

	<script>
	function myFunction()
	{
		var x = document.getElementById('myDiv');

		if (x.style.display === 'block')
		{
			x.style.display = 'none';
		}
		else
		{
			x.style.display = 'block';
		}
	}
	</script>
</body>
</html>	