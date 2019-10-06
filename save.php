<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

//check if the user is authenticated
require_once('auth.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Saving Item Details...</title>
</head>

<body>

<?php
require 'connect.php';
//store the post inputs in variables
$item = $_POST['item'];
$date_of_order = $_POST['date_of_order'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];
$status = $_POST['status'];
$photo = $_POST['photo'];
$ok = true;

//process photo if there is one
$photo = $_FILES['photo']['name'];

if (!empty($photo)) {
    //get and check the type
    $type = $_FILES['photo']['type'];

    if (($type == "image/jpeg") || ($type == "image/png")) {
        //valid image, so save the file
        session_start();

        //create a unique name
        $photo = session_id() . "-" . $photo;

        //save the image
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, "images/$photo");
    }
}
else {
    //user did not upload a new photo.  set current photo equal to the old photo
    $photo = $_POST['current_photo'];
}
if ($ok == true){
    $sql = "INSERT INTO orderlist(item, date_of_order, quantity, amount, status, photo) VALUES ('$item', '$date_of_order','$quantity', '$amount', '$status', '$photo')";

    //execute the insert
    //Execute the save
    if ( ($conn -> query ($sql) ) )   {
        echo "New course information created successfully. ";
    }
    else {
        echo "Error:" . $sql . "<br>" .$conn->error;
    }
    $conn -> close ();
    // Disconnect
    $conn = null;
    //Display a confirmation message
    echo "Your update was saved";
}

//redirect
header('location:display.php');
?>

</body>

</html>
<?php ob_flush(); ?>
