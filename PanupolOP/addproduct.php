<?php
    session_start();

    if(!isset($_SESSION['name'])) {
    header("loacation:addproduct.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/Luffys-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สมัครสมาชิก</title>
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
            <section class="contact-area">
            <h2>ADD PRODUCT</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">

                          <form action="r_addproduct.php"
        method="POST" enctype="multipart/form-data">
                                <label for="">IMG</label>
                                <input type="file"  name="fiupload">
                                <label for="">NAME PD</label>
                                <input type="text" placeholder="NAME PRODUCT" name="name">
                                <label for="">PRICE</label>
                                <input type="number" placeholder="REICE PRODUCT" name="price"> 
                                <input type="submit" value="Send" name="btnsave">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <div class="text">
                            <p><span><a href="#">Pickthemes</a></span> &copy; 2019 PanupolOP_ATC</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-4">
                        <div class="footer-logo">
                            <p><a href="#">ONE-PIECE</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-2">
                        <div class="icon">
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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