<?php
include('config.php');

    $sub_id = $_GET['sub_id'];
  

$sql = "DELETE FROM `sub_categories` WHERE `sub_ctg_id` = '$sub_id'";



$result = $connect->query($sql);

if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('Record has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('sub-categories.php'); </script>";;

?>