<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();

//check if the user is authenticated
require_once('auth.php');

//set title and load header
$title = 'Order Lists';
require_once('header.php');

try {
//    //check if we have a student ID in the querystring
    if (!empty($_GET['id'])) {

        //if we do, store in a variable
        $id = $_GET['id'];

        //connect
        require_once('connect.php');

        //select all the data for the selected student
        $sql = "SELECT * FROM orderlist WHERE id = $id";
        $result = $conn -> query($sql);

        //store each value from the database into a variable
        foreach ($result as $row) {
            $item = $row['item'];
            $date_of_order = $row['date_of_order'];
            $quantity = $row['quantity'];
            $amount = $row['amount'];
            $status = $row['status'];
            $photo = $row['photo'];
        }

        //disconnect
        $conn = null;

    }
}
catch (exception $e) {
    //mail ourselves the error
    mail('xx@gmail.com', 'Get Order Error', $e, 'From:xx@georgiancollege.ca');

    //redirect to the error page
    header('location:error.php');

}
?>



    <div class="container">
        <h1 style="color:black;">Edit Current Food Stock</h1>

        <form method="post" action="update_order.php" class="form-horizontal"
              enctype="multipart/form-data">


            <div class="form-group">
                <label for="item" class="col-sm-3">Item:</label>
                <input name="item" value="<?php echo $item; ?>"/>
            </div>

            <div class="form-group">
                <label for="item" class="col-sm-3">Date Of Order:</label>
                <input name="date_of_order" type = "date" value="<?php echo $date_of_order; ?>"  />
            </div>

            <div class="form-group">
                <label for="quantity" class="col-sm-3">Quantity:</label>
                <input name="quantity" value="<?php echo $quantity; ?>"  />
            </div>

            <div class="form-group">
                <label for="amount" class="col-sm-3">Buying Cost:</label>
                <input name="amount" value="<?php echo $amount; ?>"  />
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