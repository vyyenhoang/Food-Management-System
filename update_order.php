<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

//check if the user is authenticated
require_once('auth.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Update Item Details</title>
</head>

<body>

<?php
require 'connect.php';
//store the post inputs in variables
$item = mysqli_real_escape_string($conn,$_POST['item']);
$date_of_order = mysqli_real_escape_string($conn,$_POST['date_of_order']);
$quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
$amount = mysqli_real_escape_string($conn, $_POST['amount']);
$status =  mysqli_real_escape_string($conn,$_POST['status']);
$id = $_POST['id'];
$ok = true;

//process photo if there is one
$photo = $_FILES['photo']['name'];// original file name

if (!empty($photo)) {
    //get and check the type
    $type = $_FILES['photo']['type'];

    if (($type == "image/jpeg") || ($type == "image/png")) {
        //valid image, so save the file
        session_start();

        //create a unique name
        $photo = session_id() . "-" . $photo;

        //save the image
        $tmp_name =$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, "images/$photo");
    }
}
else {
    //user did not upload a new photo.  set current photo equal to the old photo
    $photo = $_POST['current_photo'];
}

if ($ok == true){
    //write / run the sql
    $sql = "UPDATE orderlist SET item= '$item', date_of_order = '$date_of_order', quantity = '$quantity', amount = '$amount', status = '$status', photo = '$photo'  WHERE id = '$id'";
    mysqli_query($conn, $sql) or die('Error updating database.');
    mysqli_close($conn);
    //disconnect
    $conn = null;
    //redirect
    header('location:display.php');
}
else {
    echo 'Invalid Item ID.  Click <a href="javascript:history.go(-1)">HERE</a> to go back.';
}

?>

</body>

</html>
<?php ob_flush(); ?>
