<?php
	session_start();
	include('connect.php');
	include('functions.php');
	$funcs= new Functions();
	$table_name = "";  // user-defined
	$username_field ="username"; // user-defined
	$password_field = "password"; // user-defined (jkjkk)
	
	$username = addslashes($_REQUEST['username']);
	$password = addslashes($_REQUEST['$password']);
	
	$query = "Select * from $table_name where $username_field='$username' AND $password_field='$password'";
	$result_set = $funcs->get_result_set($query, $con, "Cannot connect for logging in !");
	
	if( mysqli_num_rows($result_set) > 0 ){
		$_SESSION['logged_in'] = "true";
		header("location: index.php");
	}
	else{
		$_SESSION['logged_in'] = "false";
		$_SESSION['error_msg'] = "Invalid Username/Password";
		header("location: login.php");
	}
	
?>