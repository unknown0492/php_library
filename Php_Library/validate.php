<?php

	session_start();
	if( isset($_SESSION['logged_in']) ){
		if( $_SESSION['logged_in'] == "false" ){
			header("location: login.php");
		}
	}
	
	if( !isset($_SESSION['logged_in']) ){
		header("location: login.php");
	}

?>