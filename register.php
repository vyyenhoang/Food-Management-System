<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

$title = 'Register';
require_once('header.php');
?>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="container">
    <h1 style="color:black;">User Registration</h1>
    <form method="post" action="save-register.php" class="form-horizontal">
        <div class="form-group">
            <label for="username" class="col-sm-2">Username:</label>
            <input name="username" type="email" />
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2">Password:</label>
            <input type="password" name="password" />
        </div>
        <div class="form-group">
            <label for="confirm" class="col-sm-2">Confirm Password:</label>
            <input type="password" name="confirm" />
        </div>

        <div class="g-recaptcha" data-sitekey="6LcPmgQTAAAAAO8CDeB-fKKVyUOikLev1GR-LORv"></div>

        <div class="col-sm-offset-2">
            <input type="submit" value="Register" class="btn btn-primary" />
        </div>
    </form>
</div>

<?php
require_once('footer.html');
ob_flush(); ?>
