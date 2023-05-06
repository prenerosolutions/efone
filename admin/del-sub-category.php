<?php
include('header.php');
include('config.php');

    $subCategoryId = $_GET['sub_category_id'];
    // $categoryName = $_POST['product_name'];

echo $subCategoryId;
 
  $sql = "SELECT `sub_ctg_name` FROM `sub_categories` WHERE `sub_ctg_id` = '$subCategoryId'"; 
  $result = $connect->query($sql);
  $prow = mysqli_fetch_array($result);
  $categoryName = $prow['sub_ctg_name'];

$sql = "DELETE FROM `sub_categories` WHERE `sub_ctg_id` = '$subCategoryId'";



$result = $connect->query($sql);
//echo($sql);
//die;
if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('$categoryName has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('all-sub-categories.php'); </script>";;

?>