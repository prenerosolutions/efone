<?php 
include 'config.php';
$productId = $_POST['pid'];
$imageId = $_POST['image_id'];

echo($productId);
echo "  ----  ";
echo($imageId);

$date = date("Y-m-d");

// File upload path
$targetDir = "uploads/product-images/";

$image1 = time().($_FILES["image1"]["name"]);
echo $image1;
$targetFilePath1 = $targetDir . $image1;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "INSERT INTO `product_images`(`image_name`, `product_id`, `date_added`) VALUES ('$image1','$productId','$date')";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image added successfully.";
            }else{
                $statusMsg = "Product Image not added, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }


 ?>