<?php
include('header.php');
// include('config.php');
// edit category process

	$brandId= $_POST['brand_id'];
	$cat_name = $_POST['cname'];
	$cat_desc = $_POST['cdesc'];

	$date = date("Y-m-d h:i:s");

	// ;echo $brandId;
	// echo "  -name-  ";
	// echo $cat_name;
	// echo "  -description-  ";
	// echo $cat_desc;
	// echo "  -image-  ";
		$statusMsg = '';
	if( !empty($_FILES["fileImage"]["name"]) ){
	


	// $date = date("Y-m-d");

	
// File upload path
$targetDir = "uploads/brands/";

$catImage = time().($_FILES["fileImage"]["name"]);
$targetFilePath1 = $targetDir . $catImage;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileImage"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "UPDATE `brands` SET `brand_name`='$cat_name',`brand_desc`='$cat_desc',`brand_image`='$catImage',`date_added`='$date' WHERE `brand_id`='$brandId'";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Brand Item edit successfully.";
            }else{
                $statusMsg = "Brand Item not edit, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }


echo "<script>alert('$statusMsg')</script>";
// header('location: all-categories.php');
echo "<script> location.replace('all-brands.php'); </script>";
} else {
	$sql = "UPDATE `brands` SET `brand_name`='$cat_name',`brand_desc`='$cat_desc',`date_added`='$date' WHERE `brand_id`='$brandId'";
            $result = $connect->query($sql);
             if($result){
                $statusMsg = "Brand Item edit successfully.";
            }else{
                $statusMsg = "Brand Item not edit, please try again.";
            } 
            echo "<script>alert('$statusMsg')</script>";
// header('location: all-categories.php');
echo "<script> location.replace('all-brands.php'); </script>";
}
	


?>