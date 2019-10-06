<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

//access the existing session
session_start();

//remove any session variables
session_unset();

//remove the user's session
session_destroy();

//redirect to the login page
header('location:display.php');
exit();

ob_flush();
?>


