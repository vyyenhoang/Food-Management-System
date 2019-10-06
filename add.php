<!--Vy Hoang | vyhoang@vyhoang.me-->

<?php ob_start();

//check if the user is authenticated
require_once('auth.php');

//set title and load header
$title = 'Add new food item';
require_once('header.php');

//try {
//    //check if we have a student ID in the querystring
    if (!empty($_GET['id'])) {

        //if we do, store in a variable
        $id = $_GET['id'];

        //connect
        require_once('connect.php'); }


?>


    <div class="container">
        <h1 style="color:black;">Add New Food Stock</h1>
        <form method="post" action="save.php" class="form-horizontal"
              enctype="multipart/form-data">

            <div class="form-group">
                <label for="item" class="col-sm-3">Item Name:</label>
                <input name="item"/>
            </div>
            <div class="form-group">
                <label for="date_of_order"  class="col-sm-3">Date of Stocking:</label>
                <input name="date_of_order" required type ="date"/>
            </div>

            <div class="form-group">
                <label for="quantity" class="col-sm-3">Quantity:</label>
                <input name="quantity"/>
            </div>


            <div class="form-group">
                <label for="amount" class="col-sm-3">Buying Cost:</label>
                <input name="amount"/>
            </div>

            <div class="form-group">
                <label for="status" class="col-sm-3">Note:</label>
                <input name="status" value="<?php echo $status; ?>"  />
            </div>

            <div class="form-group">
                <label for="photo" class="col-sm-3">Photo:</label>
                <input type="file" name="photo" />
            </div>
            <div class="col-sm-offset-3">
                <?php
                //show the photo if there is one
                if (!empty($photo)) {
                    echo '<img src="images/' . $photo . '" alt="Profile Photo" width="150" />';
                }
                ?>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="current_photo" value="<?php echo $photo; ?>" />

            <div class="col-sm-offset-3">
                <input type="submit" value="Save" class="btn btn-primary" />
            </div>
        </form>
    </div>
<?php
require_once('footer.html');
ob_flush(); ?>