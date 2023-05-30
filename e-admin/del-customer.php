<?php
include('config.php');

   

$cus_id = $_GET['customer_id'];
 
 
$sql = "DELETE FROM `customers` WHERE `cus_id`='$cus_id'";


$result = $connect->query($sql);


if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('Customer has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('customers.php'); </script>";;

?>