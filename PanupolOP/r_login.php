<?php
	session_start();
	include("inc/connect.php");

	if(isset($_POST['btnsign'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
	
		$sql = "select * from login_tb where user_user ='" . $user . "' and user_pass = '" . $pass . "'";
		$rs = mysqli_master_query($con,$sql);
		$count = mysqli_num_rows($rs);
		$row = mysqli_fetch_array($rs);
		$id = $row['name'];
		$name = $row['user_name'];

		if($count == 1) {
			$_SESSION['name'] = $name;
			$_SESSION['id'] = $id;
		}
			header("location:login.php");
			exit();
		}else{
			header("location:error.php");
			exit();
		}
?>