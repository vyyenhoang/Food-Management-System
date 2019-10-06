<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start(); ?>
<html>

<body>

<?php
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);
$user_id = $_POST ['user_id'];

require_once('connect.php');

$sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn -> query($sql);

//store the number of results in a variable
$count = $result->num_rows;

//check if any matches found
if ($count == 1) {
    echo 'Logged in Successfully.';
//    foreach ($result as $row) {
        //access the existing session created automatically by the server
        session_start();
        //take the user's id from the database and store it in a session variable
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION ['logged'] = true;


        //redirect the use
        Header('Location: index.php');
//    }
} else {
    $_SESSION ['logged'] = false;
    echo 'Invalid Login';
    Header('Location: register.php');
}
$conn = null;
?>

</body>
</html>
<?php ob_flush(); ?>
