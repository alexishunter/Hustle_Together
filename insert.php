<?php
$con=mysqli_connect("localhost", "myhustle", "myhustle", "myhustle");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
	echo "Connected. :)";
	}

//escapes special characters in a string for security against SQL injection
$name = mysqli_real_escape_string($con, $_POST['name']);
$location = mysqli_real_escape_string($con, $_POST['location']);
$pursuit = mysqli_real_escape_string($con, $_POST['pursuit']);
$ContactInfo = mysqli_real_escape_string($con, $_POST['ContactInfo']);

//defining $sql to insert values into Users table
$sql= "INSERT INTO Users (Name, Location, Pursuit, ContactInfo)
VALUES ('$name', '$location', '$pursuit', '$ContactInfo')";


//executes the $sql variable, and a new record will be added to the Users table, unless there is an error
if (!mysqli_query($con, $sql)) {
	die ('Error: ' . mysqli_error($con));
	} else {
	echo "1 record added";
	}
mysqli_close($con);

?>