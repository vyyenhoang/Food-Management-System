<!--Vy Hoang | vyhoang@vyhoang.me-->

<?php
//authentication check
session_start();

if ($_SESSION ['logged'] == false) {
    echo 'You do not have access, please log in first ';
    header('location:login.php');
    exit();
}

?>