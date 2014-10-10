<?php

	$host = "localhost";
	$database_username = "root";
	$database_password = "";
	$database_name = "tracker";
	
	$con = mysqli_connect($host, $database_username, $database_password) or die('Cannot connect to database');
	mysqli_select_db($con, $database_name) or die('cannot select database ' + $database_name);

?>