<?php

include('config.php');

$sub_id= $_POST['sub_id'];
	
$sub_name = $_POST['sub_name'];

$prod_ctg =$_POST['prod_ctg'];

	
$date = date("Y-m-d");


	
if( !empty($_FILES["subctg_img"]["name"]) ){

	
// File upload path

	$targetDir = "../img/sub-categories/";


	$subctg_img = $_FILES["subctg_img"]["name"];

	$targetFilePath1 = $targetDir . $subctg_img;

	$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    
	// Allow certain file formats
   
	$allowTypes = array('jpg','png','jpeg','gif');
   
	if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["subctg_img"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "UPDATE `sub_categories` SET  `category_id`='$prod_ctg',
												`sub_ctg_name`='$sub_name',
												`sub_ctg_img`='$subctg_img',
												`date_added`='$date' WHERE `sub_ctg_id`='$sub_id'";
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
echo "<script> location.replace('sub-categories.php'); </script>";
} else {
	$sql = "UPDATE `sub_categories` SET  `category_id`='$prod_ctg',
												`sub_ctg_name`='$sub_name',												
												`date_added`='$date' WHERE `sub_ctg_id`='$sub_id'";
            $result = $connect->query($sql);
             if($result){
                $statusMsg = "Sub Category edit successfully.";
            }else{
                $statusMsg = "Sub Category not edit, please try again.";
            } 
            echo "<script>alert('$statusMsg')</script>";
// header('location: all-categories.php');
echo "<script> location.replace('sub-categories.php'); </script>";
}
	


?>