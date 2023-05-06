<?php 
include('header.php');
include('config.php');

$prodId = $_GET['product_id'];

// echo $prodId;
 
	$sql = "SELECT `product_name` FROM `products` WHERE `product_id` = '$prodId'"; 
	$result = $connect->query($sql);
	$prow = mysqli_fetch_array($result);
	$productName = $prow['product_name'];

// $sql = "DELETE FROM `products` WHERE `product_id` = '$prodId'";

echo "<script>alert('$productName has been deleted from the record')</script>";

// $result = $connect->query($sql);
// //echo($sql);
// //die;
// if($result){
// 	echo'<br>';
// 	echo ' ';
// 	echo "<script>alert('Hello')</script>";
// 	header('location: all-products.php');
// } else {
// 	echo'error';
// }
echo "<script> location.replace('all-products.php'); </script>";
?>