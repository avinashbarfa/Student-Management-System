<div class="header">
	<div class="container">
		<div class="column">
			<div class="row">
				<a href="logout.php"><img src="img/logout.png"></a>
				<a href=""><img src="img/Home-button-icon.gif"></a>
				<h2>STUDENT MANAGEMENT SYSTEM</h2>
				<hr><hr>
			</div>
		</div>
	</div>
</div>	

<div class="navigation">
	<div class="container">
		<div class="column">
			<div class="row">
				<ul>
					<li><a href="adminprofile.php">Profile</a></li>
					<li class="navdropdown">
	  					<button class="drpbtn">Update Data</button>
							<div class="navdropdown-content">						  
								<a href="addfaculty.php">Add Faculty</a>
								<a href="addstudent.php">Add Student</a>
							</div>
					</li>		
					<li><a href="filterstudent.php">Filter Student</a></li>
					<li><a href="notice.php">Notice</a></li>
					<li class="navdropdown">
	  					<button class="drpbtn">Send</button>
						  <div class="navdropdown-content">
						    <a href="adminmail.php">Send Mail</a>
						  </div>
					</li>
					<li><a href="adminpass.php">Change Password</a></li>
					<li style="float: right"><div id="clockbox" class="clockbox"></div></li>
				</ul>		
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	var tmonth = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"];
	var tweek = ["Mon","Tue","Wed","Thur","Fri","Sat","Sun"];
	function currentclock()
	{
		var d = new Date();

		var curweek = d.getDay();
		var curdate = d.getDate();
		var curmonth = d.getMonth();
		var curyear = d.getFullYear();

		var curhour = d.getHours();
		var curmins = d.getMinutes();
		var cursec	= d.getSeconds();

		document.getElementById('clockbox').innerHTML = tweek[curweek]+","+curdate+" "+tmonth[curmonth]+" "+curyear+" ,"+curhour+":"+curmins+":"+cursec;
	}

	window.onload=function()
	{
		currentclock();
		setInterval(currentclock,1000);
	}

</script>