<?php
include('config.php');

   

$user_id = $_GET['user_id'];
 
 
$sql = "DELETE FROM `users` WHERE `user_id`='$user_id'";


$result = $connect->query($sql);


if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('User has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
echo "<script> location.replace('users.php'); </script>";;

?>