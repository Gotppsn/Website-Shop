<?php

	session_start();
	include("inc/connect.php");

	if(isset($_POST['btnsave'])) {
		$str_filename = "";
		$bool_hasnewupload = false;
		if(file_exists($_FILES['fiupload']['tmp_name'])|| is_uploaded_file($_FILES['fiupload']['tmp_name'])) {
			$bool_hasnewupload = true;
			$str_filename = $_FILES['fiupload']['name'];
		}

		$name = $_POST['name'];
		$price = $_POST['price'];
		$img = $str_filename;

		$sql = "insert into product_tb(prd_name,prd_img,prd_price)VALUES(";
		$sql .="'" .$name . "',";
		$sql .="'" .$img . "',";
		$sql .="'" .$price . "')";
		$rs = mysqli_query($con,$sql);

		if($rs) {
			if($bool_hasnewupload) {
				$str_uploadfile = "img/" . $str_filename;

				if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$str_uploadfile)){

				}else{

			}
		}
		header("location:index.php");
		exit();
	}else{
		header("location:addproduct.php");
		exit();
		}
	}else{
		header("location:error.php");
		exit();
	}
	?>