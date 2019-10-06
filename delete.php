<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

//check if the user is authenticated
require_once('auth.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Delete Item</title>
</head>


<body>

<?php
//get the student_id from the url querystring
$id = $_GET['id'];

try {
    //connect
    require_once('connect.php');

    //write the sql delete command
    $sql = "DELETE FROM orderlist WHERE id = '$id'";

    //fill the parameter and execute the sql
    $retval = mysqli_query($conn, $sql);
    if ($retval){
//        die('could not delete data: '. mysqli_error($conn));
        echo "Deleted data successfully\n";
    }
    else {
        die('could not delete data: '. mysqli_error($conn));
    }

    header('location: display.php');
}
catch (exception $e) {
    //mail ourselves the error
    mail('xx@yahoo.com', 'Delete Item Error', $e, 'From:xx@georgiancollege.ca');

    //redirect to the error page
    header('location:error.php');

}

?>
</body>

</html>
<?php ob_flush(); ?>
