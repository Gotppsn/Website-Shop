<?php
	$host = "localhost";
	$user = "root";
	$pass = "1234";
	$dbname = "PanupolOP";

	$con = mysqli_connect($host,$user,$pass,$dbname);
	if(!$con){
		echo "Connect error";
	}
 	mysqli_query($con,"SET NAMES UTF8");
 	?>