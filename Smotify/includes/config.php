<?php 
	ob_start();
	//allows user to stay logged in by remembering variables across pages
	session_start();

	$timezone = date_default_timezone_set("America/Kentucky/Louisville");

	$con = mysqli_connect("localhost", "root", "", "smotify" );

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}




 ?>