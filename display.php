<!--Vy Hoang | vyhoang@vyhoang.me-->
<?php ob_start();
//check if the user is authenticated
//require_once('auth.php');
//set the page title and link to the header
$title = 'Order Lists';
require_once('header.php');
?>
    <h1 style="color:black;">Food List Database</h1>
<?php
//try {
//connect to db & enable SQL debugging
require_once('connect.php');
//set up the SQL SELECT command
$sql = "SELECT * FROM orderlist";

//if we have a sort column in the querystring
if (!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
    //also get the direction from the url
    $current_dir = $_GET['dir'];
    if (empty($current_dir)) {
        $current_dir = "ASC";
    }
    //append order by clause onto sql
    $sql = $sql . " ORDER BY $sort $current_dir";
    //set up the direction for the header links if the user sorts again
    if ($current_dir == "ASC") {
        $next_dir = "DESC";
    }
    else {
        $next_dir = "ASC";
    }
}
//execute the query and store the result in an array / variable
$result = $conn -> query($sql);
echo '
	<table class="table table-striped table-hover" >
		<thead>
			<th style ="background-color: #ffb606">Item</th>
			<th style ="background-color: #ffb606">Date Of Order</th>
			<th style ="background-color: #ffb606">Quantity</th>
			<th style ="background-color: #ffb606">Buying Cost</th>
			<th style ="background-color: #ffb606">Note</th>
			<th style ="background-color: #ffb606">Item Photo</th>
			
			
			
		</thead>
		
		
	<tbody>';

//loop through the data 1 record at a time.
//$result = the whole dataset; $row - current record
foreach ($result as $row) {
    //output the values from the query, starting with first name
    echo '
		<tr>
			<td>' . $row['item'] . '</td>
			<td>' . $row['date_of_order'] . '</td>
			<td>' . $row['quantity'] . '</td>
			<td>' . $row['amount'] . '</td>
			<td>' . $row['status'] . '</td>
			
			<td>
		<a href="images/' . $row['photo'] . '" class="thumbnail">
	        <img src="images/' . $row['photo'] . '" alt="Enlarge" width="150" class="img-thumbnail" />
		</a></td>';

    if ($_SESSION ['logged'] == true) {
        echo'

        <td><a href="edit.php?id=' . $row['id'] . '">Edit Item</a></td>
			<td><a href="delete.php?id=' . $row['id'] . '" 
			onclick="return confirm(\'Are you sure you want to delete this?\');">Delete Item</a></td>
		</tr>';
		}
}
//close the table
echo '
	</tbody>
	</table>';
//disconnect
$conn = null;


?>

<?php
require_once('footer.html');
ob_flush(); ?>