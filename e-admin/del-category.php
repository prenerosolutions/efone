<?php
include('config.php');

    $ctg_id = $_GET['category'];
 
 
$sql = "DELETE FROM `category` WHERE `category_id` = '$ctg_id'";

$sqlSub = "DELETE FROM `sub_categories` WHERE `category_id` = '$ctg_id'";



$result = $connect->query($sql);
$result1 = $connect->query($sqlSub);

if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('Item has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('all-category.php'); </script>";;

?>