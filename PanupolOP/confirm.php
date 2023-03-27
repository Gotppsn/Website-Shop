<?php
	if(isset($_POST['btnpay'])) {
		$price = $_POST['hdid'];
		$num = $_POST['num'];
		$total = $price * $num;
	}
	?>
	<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Confirm</title>
	</head>
	<body>
		<h1>สินค้าทั้งหมดราคา <?php echo $total ?></h1>
	</body>
	</html>