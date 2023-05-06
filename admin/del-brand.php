<?php
include('header.php');
// include('config.php');

    $brandId = $_GET['brand_id'];
    // $brandName = $_POST['product_name'];

echo $brandId;
 
  $sql = "SELECT `brand_name` FROM `brands` WHERE `brand_id` = '$brandId'"; 
  $result = $connect->query($sql);
  $prow = mysqli_fetch_array($result);
  $brandName = $prow['brand_name'];

$sql = "DELETE FROM `brands` WHERE `brand_id` = '$brandId'";

$sqlSub = "DELETE FROM `sub_categories` WHERE `brand_id` = '$brandId'";



$result = $connect->query($sql);
$result1 = $connect->query($sqlSub);
//echo($sql);
//die;
if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('$brandName has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('all-brands.php'); </script>";;

?>