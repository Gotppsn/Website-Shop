<?php
    include("inc/connect.php");
    session_start();

    if (!isset($_SESSION['name'])) {
        $a = "nothave";
    }else{
        $a = "have";
        $name = $_SESSION['name'];
    }

    $sql = "select * from product_tb";
    $rs = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/Luffys-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="logo">
                                        <h2><a href="#">ONE-PIECE</a></h2>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="menu">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="index.php">HOME</a></li>
                                            <li><a href="product.php">PRODUCT</a></li>
                                            <li><a href="login.php">LOGIN</a></li>
                                            <li><a href="register.php">REGISTER</a></li>
                                            <li><a href="contact.php">CONTACT</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <div class="sc-prd">
            <div class="inner-wrapper">
                <h2><a name="product"> สินค้าทั้งหมด </h2></a>
                <?php while ($row = mysqli_fetch_array($rs)) { ?>
                <div class="prd">
                    <img src="img/<?= $row['prd_img'] ?>"alt="">
                    <div>
                        <p> ซื่อสินค้า :: <?= $row['prd_name'] ?></p>
                        <p> สินค้า :: <?= $row["prd_price"] ?>บาท</p>
                        <form action="confirm.php" method="POST">
                            <input type="number" name="num">
                            <input type="hidden" name="hdid" value="<?=$row['prd_price'] ?>"> 
                            <input type="submit" name="btnpay" value="สั่งซื้อ">
                        </form>
                    </div>
                </div>
            <?php } ?>
            <div class="clear"></div>
        </div>
    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/active.js"></script>
</body>
 </html>
