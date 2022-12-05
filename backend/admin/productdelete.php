<?php
include "/xampp/htdocs/E-Motorbike-2.3-main/admin/class/product_class.php";
$product = new product;
$product_id = $_GET['product_id'];
$delete_product = $product -> delete_product($product_id);

?>

