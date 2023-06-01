<?php
	//Step 1 -Establish DB Connection
	$DBservername = 'localhost' ;
	$DBusername = 'root';
	$DBpassword = '';
	$DBname = 'library_management';

	$conn = mysqli_connect($DBservername, $DBusername, $DBpassword, $DBname);

	//Step 2 - Handling connection error
	if(mysqli_connect_errno()) {
		die("Failed to connect to mySQL:".mysqli_connect_errrno());
	}
	else
		echo '<script>alert("CONNECTION SUCCESSFUL!");</script>';

?>
