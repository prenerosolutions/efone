<?php
include('header.php');
// include('config.php');

    $brand_id = $_GET['brand'];
   

$sql = "DELETE FROM `brands` WHERE `brand_id` = '$brand_id'";

$result = $connect->query($sql);

if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('Record has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('product-brands.php'); </script>";;

?>