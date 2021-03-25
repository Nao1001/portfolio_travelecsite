<?php
include 'ECTravel-action.php';

$product_id = $_GET['product_id'];
$travelObj->delete_product($product_id);
?>
