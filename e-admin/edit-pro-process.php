<?php
include('config.php');


	$prod_id = $_POST['prod_id']; 
	$prod_name = $_POST['prod_name'];
$sku = $_POST['sku'];
	$category = $_POST['category'];
	$sub_ctg = $_POST['sub_category'];
	$prod_brand = $_POST['prod_brand'];
	$sdesc = $_POST['sdesc'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$sprice = $_POST['sprice'];
	
	$desc = $_POST['desc'];
	$cond = $_POST['cond'];
	$long_desc = $_POST['desc'];
	$date = date("Y-m-d h:i:s");


if( !empty($_FILES["fileToUpload"]["name"]) ){
		
  // File upload path
$targetDir = "uploads/products/";

$profile = time().($_FILES["fileToUpload"]["name"]);
$targetFilePath1 = $targetDir . $profile;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database
            // $insert = $connect->query("UPDATE `employee` SET `dp`= '$profile' WHERE `employee_code`= $employee_code");


$sql = "UPDATE `products` SET `product_name`='$pname',
							`product_category`= '$category',
							`sub_category` = '$sub_ctg', 
							`product_brand`='$brand',
							`short_desc`='$sdesc',
							`product_qty`='$qty',
							`product_image`='$profile',
							`product_price`='$price',
							`product_condition`='$cond',
							`shopkeeper_price`='$sprice',
							`long_desc`='$long_desc',
							`date_added`='$date' WHERE `product_id`=$product_id";

$result = $connect->query($sql);


            if($result){
                $statusMsg = "Profile image has been uploaded successfully.";
            }else{
                $statusMsg = "Fial to add Product, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
}




$result = $connect->query($sql);
//echo($sql);
//die;
if($result){
	echo'<br>';
	echo ' ';
	header('location: all-products.php');
} else {
	echo'error';
}



?>