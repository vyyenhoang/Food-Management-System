<!--Vy Hoang | vyhoang@vyhoang.me-->


<?php ob_start();

$title = 'Ooops...Please try another page';
require_once('header.php'); ?>

    <div class="container">
        <p class="jumbotron">I am sorry you have navigated to this page...and found nothing!  Try one of the links at the top of the page.</p>
    </div>

<?php require_once('footer.html');
ob_flush(); ?>