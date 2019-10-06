<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

$title = 'Log In';
require_once('header.php');
?>

    <div class="container">
        <h1 style="color:black;">Log In</h1>
        <form method="post" action="validate.php" class="form-horizontal">
            <div class="form-group">
                <label for="username" class="col-sm-2">Username:</label>
                <input name="username" />
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2">Password:</label>
                <input type="password" name="password" />
            </div>
            <div class="col-sm-offset-2">
                <input type="submit" value="Login" class="btn btn-primary" />
            </div>

        </form>
    </div>
<?php
require_once('footer.html');
ob_flush(); ?>