<?php
include('config.php');

   

$order_id = $_GET['order_id'];
 
 
$sql = "DELETE FROM `orders` WHERE `order_id`='$order_id'";


$result = $connect->query($sql);


if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('Order has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('pending-order.php'); </script>";;

?>