<?php

	$host = "localhost";
	$user = "root";
	$pass = "1234";
	$dbname = "PanupolOP";

	$con = mysqli_connect($host,$user,$pass,$dbname);

	if(!$con){
		echo "connect error";
	}

	 mysqli_query($con,"SET NAMES UTF8");

?>