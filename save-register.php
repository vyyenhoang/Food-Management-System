<!--Vy Hoang | vyhoang@vyhoang.me-->
<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Saving Registration</title>
</head>

<body>
<?php
//store inputs in variables
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$ok = true;

//validate
if (empty($username)) {
    echo 'Username is required<br />';
    $ok = false;
}

if (empty($password)) {
    echo 'Password is required<br />';
    $ok = false;
}

if ($password != $confirm) {
    echo 'Passwords must match<br />';
    $ok = false;
}



if ($ok == true) {
    //connect
    require_once('connect.php');

    //hash the password
    $password = hash('sha512', $password);

    //run the sql insert
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn -> query($sql);

    //disconnect
    $conn = null;

    //show a message
    Header('Location: login.php');
}
?>
</body>

</html>
