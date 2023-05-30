<?php
include('config.php');

$order_id = $_POST['order_id'];
$order_status = $_POST['status'];
	$date = date('Y-M-d');


$sql="UPDATE `orders` SET `order_status`='$order_status',`order_date`='$date' WHERE `order_id`='$order_id'";


$r=$connect->query($sql);

if($r) {
	
	header('location: pending-order.php');
}else { 

header('location: pending-order.php');
}


?>