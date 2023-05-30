<?php 
include('header.php');
include('config.php');

$prod_id = $_GET['product_id'];

// echo $prodId;
 
	$sql = "DELETE FROM `products` WHERE `product_id`='$prod_id'"; 
	$result = $connect->query($sql);
	

echo "<script>alert('Product has been deleted from the record')</script>";
echo "<script> location.replace('all-products.php'); </script>";
?>