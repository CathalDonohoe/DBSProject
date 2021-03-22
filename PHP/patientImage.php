<?php
    $var = mysqli_connect("localhost", "root","");
    mysqli_select_db($var, "dental") or die(mysqli_error());
	$image = $_GET['PatientID'];
    $sql = "Select PatientPhoto from patient where PatientID = $image" ;
    $resultset = mysqli_query($var, "$sql") or die("Invalid query: " . mysqli_error());
	$row = mysqli_fetch_array($resultset);
	header('Content-type: image/jpeg');
	echo $row[0];
   	mysqli_close($var);
?>




