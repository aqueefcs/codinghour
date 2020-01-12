<?php
		ob_start();
		session_start();

		//this code is to connect with db
		$timezone = date_default_timezone_set("Asia/kolkata");
		$con = mysqli_connect("remotemysql.com","356BUMVrlI", "xMfcq5e44N","356BUMVrlI");

		if(mysqli_connect_errno()){
			echo "Failed to Connect ".mysqli_connect_errno();
		}
		else{
			
		}


?>
