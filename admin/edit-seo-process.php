<?php
include('config.php');


	$product_id = $_POST['pid']; 
	$ptitle = $_POST['ptitle'];
	$mdesc = $_POST['mdesc'];
	$fk = $_POST['fk'];
	$ak = $_POST['ak'];
	$date = date("Y-m-d h:i:s");

	$querycheck = "SELECT * FROM `product_seo` WHERE `product_id` = $product_id";
	$checkresult = $connect->query($querycheck);
	$chrow = mysqli_fetch_array($checkresult);

	$p_id = $chrow['product_id'];

if($p_id == 0){
	$sql = "INSERT INTO `product_seo`(
								`product_id`, 
								`product_title`, 
								`meta-description`, 
								`focus-keywords`, 
								`additional-keywords`, 
								`date_added`
								) VALUES (
								'$product_id',
								'$ptitle',
								'$mdesc',
								'$fk',
								'$ak',
								'$date')";
	
	
}else{
	
	$sql = "UPDATE `product_seo` SET  `product_id`='$product_id',
										`product_title`='$ptitle',
										`meta-description`='$mdesc',
										`focus-keywords`='$fk',
										`additional-keywords`='$ak',
										`date_added`='$date' WHERE `product_id` = $product_id";

	
}



$result = $connect->query($sql);
///echo($sql);
//die;
if($result){
	echo'<br>';
	echo ' ';
	header('location: all-products.php');
} else {
	echo'error';
}



?>