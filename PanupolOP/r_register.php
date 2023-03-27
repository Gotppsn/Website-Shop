<?php
	session_start();
	include("inc/connect.php");

	if(isset($_POST['btnsave'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];

		$sql = "insert into login_tb(user_user,user_pass,user_name) VALUES (";
		$sql .= "'" . $user . "',";
		$sql .= "'" . $pass . "',";
		$sql .= "'" . $name . "')";
		$rs = mysqli_query($con,$sql);

		if($rs) {
			header("location:login.php");
			exit();
		}else{
			header("location:register.php");
			exit();
	}
		}else{
			header("location:error.php");
			exit();
		}
		?>
