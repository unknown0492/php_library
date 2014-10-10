<?php

	class Functions{
		
		function insert($query, $con, $error_msg){
			$rows = mysqli_query($con, $query) or die($error_msg);
			return $rows;
		}
		
		function get_result_set($query, $con, $error_msg){
			$result_set = mysqli_query($con, $query) or die($error_msg);
			return $result_set;
		}

		
		
	}

?>