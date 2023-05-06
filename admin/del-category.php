<?php
include('header.php');
include('config.php');

    $categoryId = $_GET['category_id'];
    // $categoryName = $_POST['product_name'];

echo $categoryId;
 
  $sql = "SELECT `category_name` FROM `category` WHERE `category_id` = '$categoryId'"; 
  $result = $connect->query($sql);
  $prow = mysqli_fetch_array($result);
  $categoryName = $prow['category_name'];

$sql = "DELETE FROM `category` WHERE `category_id` = '$categoryId'";

$sqlSub = "DELETE FROM `sub_categories` WHERE `category_id` = '$categoryId'";



$result = $connect->query($sql);
$result1 = $connect->query($sqlSub);
//echo($sql);
//die;
if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('$categoryName has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('all-categories.php'); </script>";;

?>