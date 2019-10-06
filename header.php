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

<br>
<body >
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
<br>;
<br>;
<br>;
<br>;

<!-- Javascript -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/owl-carousel.min.js"></script>
<script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
<script src="assets/js/vendor/jquery.nice-select.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>


