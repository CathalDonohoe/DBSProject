<html>
	<head>
		<title>Dental Practice</title>
	</head>	
	<body>
		<h4>Select * from patient;</h4>
		<table border="1">
			<tr>
				<td><h2>ID</h2></td>
				<td><h2>Patient First Name</h2></td>
				<td><h2>Patient Last Name</h2></td>
				<td><h2>Address</h2></td>
				<td><h2>Phone Number</h2></td>
				<td><h2>Patient Photo</h2></td>
				<td><h2>Patient Xray</h2></td>
			</tr>
			<?php			
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "dental";				
				
				$query = "Select * from patient";
                $connect = mysqli_connect($host,$user,$password,$database) or die("There has been a Problem connecting to the database");
                $result = mysqli_query($connect,$query) or die("Query is incorrect");
                mysqli_close($connect);

				while($row = $result->fetch_array())
				{		
					echo "<tr>";
					echo "<td><h2>" .$row['PatientID'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientFirstName'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientLastName'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientAddress'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientNumber'] . "</h2></td>";
					echo "<td><h2><img src=patientImage.php?PatientID=".$row['PatientID']." width=200 height=120/></h2></td>";
					echo "<td><h2><img src=xrayImage.php?PatientID=".$row['PatientID']." width=200 height=120/></h2></td>";
					echo "</tr>";
				}
			?>

		</table>
		
		<h4>Select * from specialist;</h4>
		<table border="1">
			<tr>
				<td><h2>Specialist ID</h2></td>
				<td><h2>Specialist First Name</h2></td>
				<td><h2>Specialist Last Name</h2></td>
			</tr>
			<?php			
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "dental";				
				
				$query = "Select * from specialist";
                $connect = mysqli_connect($host,$user,$password,$database) or die("Problem connecting.");
                $result = mysqli_query($connect,$query) or die("Bad Query.");
                mysqli_close($connect);

				while($row = $result->fetch_array())
				{		
					echo "<tr>";
					echo "<td><h2>" .$row['SpecialistID'] . "</h2></td>";
					echo "<td><h2>" .$row['SpecialistFirstName'] . "</h2></td>";
					echo "<td><h2>" .$row['SpecialistLastName'] . "</h2></td>";
					echo "</tr>";
				}
			?>

		</table>
		
		<h4>Select * from bill;</h4>
		<table border="1">
			<tr>
				<td><h2>Bill ID</h2></td>
				<td><h2>Patient ID</h2></td>
				<td><h2>Patient First Name</h2></td>
				<td><h2>Patient Last Name</h2></td>
				<td><h2>Appointment ID</h2></td>
				<td><h2>Bill Date</h2></td>
			</tr>
			<?php			
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "dental";				
				
				$query = "Select * from bill";
                $connect = mysqli_connect($host,$user,$password,$database) or die("Problem connecting.");
                $result = mysqli_query($connect,$query) or die("Bad Query.");
                mysqli_close($connect);

				while($row = $result->fetch_array())
				{		
					echo "<tr>";
					echo "<td><h2>" .$row['BillID'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientID'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientFirstName'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientLastName'] . "</h2></td>";
					echo "<td><h2>" .$row['AppointmentID'] . "</h2></td>";
					echo "<td><h2>" .$row['BillDate'] . "</h2></td>";
					echo "</tr>";
				}
			?>

		</table>
		
		
		<h4>Select * from appointment;</h4>
		<table border="1">
			<tr>
				<td><h2>Appointment Id</h2></td>
				<td><h2>Appointment Date</h2></td>
				<td><h2>Patient ID</h2></td>
				<td><h2>Patient First Name</h2></td>
				<td><h2>Patient Last Name</h2></td>
				<td><h2>Work Details</h2></td>
			</tr>
			<?php			
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "dental";				
				
				$query = "Select * from appointment";
                $connect = mysqli_connect($host,$user,$password,$database) or die("Problem connecting.");
                $result = mysqli_query($connect,$query) or die("Bad Query.");
                mysqli_close($connect);

				while($row = $result->fetch_array())
				{		
					echo "<tr>";
					echo "<td><h2>" .$row['AppointmentID'] . "</h2></td>";
					echo "<td><h2>" .$row['AppointmentDate'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientID'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientFirstName'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientLastName'] . "</h2></td>";
					echo "<td><h2>" .$row['WorkDetails'] . "</h2></td>";
					echo "</tr>";
				}
			?>

		</table>
		
		<h4>Select * from payment;</h4>
		<table border="1">
			<tr>
				<td><h2>Payment Id</h2></td>
				<td><h2>Patient ID</h2></td>
				<td><h2>Appointment ID</h2></td>
				<td><h2>Payment Method</h2></td>
				<td><h2>Payment Total</h2></td>
				<td><h2>Payment Date</h2></td>
			</tr>
			<?php			
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "dental";				
				
				$query = "Select * from payment";
                $connect = mysqli_connect($host,$user,$password,$database) or die("Problem connecting.");
                $result = mysqli_query($connect,$query) or die("Bad Query.");
                mysqli_close($connect);

				while($row = $result->fetch_array())
				{		
					echo "<tr>";
					echo "<td><h2>" .$row['PaymentID'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientID'] . "</h2></td>";
					echo "<td><h2>" .$row['AppointmentID'] . "</h2></td>";
					echo "<td><h2>" .$row['PaymentMethod'] . "</h2></td>";
					echo "<td><h2>" .$row['PaymentTotal'] . "</h2></td>";
					echo "<td><h2>" .$row['PaymentDate'] . "</h2></td>";
					echo "</tr>";
				}
			?>

		</table>
		
		<h4>Select * from treatment;</h4>
		<table border="1">
			<tr>
				<td><h2>Treatment Id</h2></td>
				<td><h2>Patient ID</h2></td>
				<td><h2>Specialist ID</h2></td>
				<td><h2>Specialist First Name</h2></td>
				<td><h2>Specialist Last Name</h2></td>
				<td><h2>Patient First Name</h2></td>
				<td><h2>Patient Last Name</h2></td>
			</tr>
			<?php			
				$host = "localhost";
				$user = "root";
				$password = "";
				$database = "dental";				
				
				$query = "Select * from treatment";
                $connect = mysqli_connect($host,$user,$password,$database) or die("Problem connecting.");
                $result = mysqli_query($connect,$query) or die("Bad Query.");
                mysqli_close($connect);

				while($row = $result->fetch_array())
				{		
					echo "<tr>";
					echo "<td><h2>" .$row['TreatmentID'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientID'] . "</h2></td>";
					echo "<td><h2>" .$row['SpecialistID'] . "</h2></td>";
					echo "<td><h2>" .$row['SpecialistFirstName'] . "</h2></td>";
					echo "<td><h2>" .$row['SpecialistLastName'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientFirstName'] . "</h2></td>";
					echo "<td><h2>" .$row['PatientLastName'] . "</h2></td>";
					echo "</tr>";
				}
			?>

		</table>
		
	</body>
</html>


