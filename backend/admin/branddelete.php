<?php
include "/xampp/htdocs/E-Motorbike-2.3-main/backend/admin/class/brand_class.php";
$brand = new brand;
$brand_id = $_GET['brand_id'];
$delete_brand = $brand -> delete_brand($brand_id);

?>

