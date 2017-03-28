<?php
	include ('db.php');
	
	if(isset($_REQUEST["class"]) and isset($_REQUEST["section"]))
	{
		$fclass =$_POST['class'];
		$fsection =$_POST['section'];
		if($fclass == '0')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}
		

		if($fclass == 'nursery')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='nursery'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='nursery' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='nursery' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='nursery' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='nursery' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == 'kg-1')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-1'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-1' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-1' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-1' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-1' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == 'kg-2')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-2'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-2' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-2' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-2' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='kg-2' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '1')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='1'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='1' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='1' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='1' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='1' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '2')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='2'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='2' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='2' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='2' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='2' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '3')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='3'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='3' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='3' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='3' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='3' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '4')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='4'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='4' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='4' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='4' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='4' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '5')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='5'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='5' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='5' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='5' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='5' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '6')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='6'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='6' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='6' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='6' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='6' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '7')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='7'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='7' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='7' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='7' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='7' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '8')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='8'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='8' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='8' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='8' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='8' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '9')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='9'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='9' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='9' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='9' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='9' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '10')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='10'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='10' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='10' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='10' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='10' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '11')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='11'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='11' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='11' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='11' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='11' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}


		if($fclass == '12')
		{	
			if($fsection == '00')	
			{	
			$sql ="SELECT * FROM studentrecord where class='12'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'A')	
			{	
			$sql ="SELECT * FROM studentrecord where class='12' and section='A'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'B')	
			{	
			$sql ="SELECT * FROM studentrecord where class='12' and section='B'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'C')	
			{	
			$sql ="SELECT * FROM studentrecord where class='12' and section='C'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
			if($fsection == 'D')	
			{	
			$sql ="SELECT * FROM studentrecord where class='12' and section='D'";
			$result=mysqli_query($conn,$sql);
			//$active = $row['active'];
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Roll No.</th><th>First Name</th><th>Last Name</th><th>Class</th><th>Section</th><th>Scholar No</th><th>Bloodgroup</th>";
				while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo "<tr>";
					echo "<td>", $row['rollno'],"</td><td>", $row['firstname'],"</td><td>", $row['lastname'],"</td><td>", $row['class'],"</td><td>", $row['section'],"</td><td>", $row['scholarno'],"</td><td>", $row['bloodgroup'];
					echo "</tr>";
				}
				echo "</table>";
			}
		}
	}
	$conn -> close();	
?>			