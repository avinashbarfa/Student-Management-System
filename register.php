<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL -Register</title>
	<meta charset="utf-8">
	<meta name="STUDENT MANAGEMENT SYSTEM">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="front">
		<div class="translator">
			<div id="google_translate_element"></div>
		</div>
		<div class="header">
			<div class="container">
				<div class="column">
					<div class="row">
						<h2>STUDENT MANAGEMENT SYSTEM</h2>
						<hr><hr>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="column">
					<div class="row">
						<div class="login-box">
							<h3>Login Window</h3>
							<hr style="color: brown">
							<form method="POST" action="phpregister.php">
								<table>
									<tr>
										<th>
											<h4>Username :</h4>
										</th> 
										<th>
											<input class="login-field" type="text" name="uname" required="required">
										</th>
									</tr>
									<tr>
										<th>
											<h4>First Name :</h4>
										</th> 
										<th>
											<input class="login-field" type="text" name="firstname" required="required">
										</th>
									</tr>
									<tr>
										<th>
											<h4>Last Name :</h4>
										</th> 
										<th>
											<input class="login-field" type="text" name="lastname" required="required">
										</th>
									</tr>
									<tr>	
										<th>
											<h4>Enter Password :</h4>
										</th>
										<th>	
											<input class="login-field" type="Password" name="upass" required="
												required">
										</th>
									</tr>
									<tr>
										<th colspan="2">			
											<button type="submit" class="btn btn-primary" value="submit" name="login">Register</button> 
										</th>	
									</tr>
								</table>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</hr>
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
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
</html>