<?php
       
       require('includes/connection.php');
       
       
        ?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require('includes/connection.php');

$product = mysqli_real_escape_string($db, $_POST['product']);
$qntty = mysqli_real_escape_string($db, $_POST['qntty']);
$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
$available = mysqli_real_escape_string($db, $_POST['available']);
$price = mysqli_real_escape_string($db, $_POST['price']);
$profit = mysqli_real_escape_string($db, $_POST['profit']);
$sale = mysqli_real_escape_string($db, $_POST['sale']);
$date = mysqli_real_escape_string($db, $_POST['date']);
$cat = mysqli_real_escape_string($db, $_POST['cat']);
$user = mysqli_real_escape_string($db, $_POST['user']);
$nq = mysqli_real_escape_string($db, $_POST['nq']);
$supplier = mysqli_real_escape_string($db, $_POST['supplier']);

// Handle image upload
if(isset($_FILES['cakeimg']) && $_FILES['cakeimg']['error'] === UPLOAD_ERR_OK) {
    $tmpFileName = $_FILES['cakeimg']['tmp_name'];
    $cakeimg = mysqli_real_escape_string($db, file_get_contents($tmpFileName));
} else {
    // Handle the case when no image is uploaded or if there is an error in the upload process
    die('Error: Image upload failed.');
}

$action = $_GET['action'];

switch ($action) {
    case 'add':
        $query = "INSERT INTO tblproducts 
                  (product_id, product_name, quantity, available, price, profit, selling_price, date_in, category_id, user_id, supplier_id, product_code, cakeimg, status) 
                  VALUES 
                  (NULL, '$product', '$quantity', '$available', '$price', '$profit', '$sale', '$date', '$cat', '$user', '$supplier', '$nq', '$cakeimg', 'available')";

        if (mysqli_query($db, $query)) {
            ?>
            <script type="text/javascript">
                alert("Successfully added.");
                window.location = "product.php";
            </script>
            <?php
        } else {
            die('Error in updating Database: ' . mysqli_error($db));
        }
        break;
}
?>

    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "product.php";
		</script>
</body>
</html>