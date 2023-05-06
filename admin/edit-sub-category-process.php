<?php
include('header.php');
// include('config.php');
// edit category process

	$subCategoryId= $_POST['sub_ctg_id'];
	$sub_cat_name = $_POST['scname'];

	$date = date("Y-m-d h:i:s");

	echo $subCategoryId;
	echo "  -name-  ";
	echo $sub_cat_name;
	echo "  -description-  ";
	// echo $cat_desc;
	echo "  -image-  ";
		$statusMsg = '';
	if( !empty($_FILES["fileImage"]["name"]) ){
	


	// $date = date("Y-m-d");

	
// File upload path
$targetDir = "uploads/sub-categories/";

$catImage = time().($_FILES["fileImage"]["name"]);
$targetFilePath1 = $targetDir . $catImage;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileImage"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "UPDATE `sub_categories` SET `sub_ctg_name`='$sub_cat_name',`sub_ctg_img`='$catImage',`date_added`='$date' WHERE `sub_ctg_id`='$subCategoryId'";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Sub Category edit successfully.";
            }else{
                $statusMsg = "Sub Category not edit, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }


echo "<script>alert('$statusMsg')</script>";
// header('location: all-categories.php');
echo "<script> location.replace('all-sub-categories.php'); </script>";
} else {
	$sql = "UPDATE `sub_categories` SET `sub_ctg_name`='$sub_cat_name',`date_added`='$date' WHERE `sub_ctg_id`='$subCategoryId'";
            $result = $connect->query($sql);
             if($result){
                $statusMsg = "Sub Category edit successfully.";
            }else{
                $statusMsg = "Sub Category not edit, please try again.";
            } 
            echo "<script>alert('$statusMsg')</script>";
// header('location: all-categories.php');
echo "<script> location.replace('all-sub-categories.php'); </script>";
}
	


?>