<?php
	$servername = "153.92.15.26"; // Change this to your database server
	$username = "u271593949_ossmdb"; // Change this to your database username
	$password = "UcMPAq^5"; // Change this to your database password
	$dbname = "u271593949_ossmdb"; // Change this to your database name
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}

?>