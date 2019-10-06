<!--Vy Hoang | vyhoang@vyhoang.me-->
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Order List|Vy Hoang|200408803</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- Preloader Starts -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- Preloader End -->

<!-- Header Area Starts -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo-area">
                    <a href="index.php"><img src="assets/images/logo/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="custom-navbar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="main-menu">
                    <ul>
                        <?php

                            session_start();

                            if ($_SESSION ['logged'] == true) {

                                echo " Welcome to Order List ";
                                echo $_SESSION['username'];

                                echo '
                        <li><a href="index.php">Home</a></li>
                        <li><a href="display.php">Food stock table list</a></li>
                        <li><a href="add.php">Add New Food Stock</a></li>
                        <li><a href="logout.php">Log Out</a></li>'
                        ;

                        }
                        else {
                        echo '
                        <li><a href="index.php">Home</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="display.php">Food stock table list</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

<!-- Banner Area Starts -->
<section class="banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>This website helps to store, add, edit, delete food stock in the database</h6>
                <h1>Welcome to  <span class="prime-color">Food Stock Management</span><br>
                    <span class="style-change">by <span class="prime-color">Vy</span>Hoang</span></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Welcome Area Starts -->
<section class="welcome-area section-padding2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="welcome-img">
                    <img src="assets/images/welcome-bg.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="welcome-text mt-5 mt-md-0">
                    <h3><span class="style-change">Welcome</span> <br>to Food Stock Database</h3>
                    <p class="pt-3">Table list of food stock purchased </p>
                    <p>Log in/Sign up to get access in adding, editing, deleting item in database</p>
                    <a href="display.php" class="template-btn mt-3">View Food stock List</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->




<!-- Javascript -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/owl-carousel.min.js"></script>
<script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
<script src="assets/js/vendor/jquery.nice-select.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<?php require_once('footer.html'); ?>
</html>
