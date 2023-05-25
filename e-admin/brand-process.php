<?php
include "config.php";

if (isset($_POST["brand_name"])) {
    $brand_name = $_POST['brand_name'];
    $brand_desc = $_POST['brand_desc'];
    $date = date("Y-m-d");

    if (!empty($_FILES["brand_img"]["name"])) {
        $targetDir = "../img/brands/";
        $brandImage = $_FILES["brand_img"]["name"];
        $targetFilePath = $targetDir . $brandImage;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["brand_img"]["tmp_name"], $targetFilePath)) {
                
				$sql = "INSERT INTO `brands`(`brand_name`, `brand_desc`, `brand_img`, `date_added`) VALUES (?, ?, ?, ?)";
                
				$stmt = $connect->prepare($sql);
                
				$stmt->bind_param("ssss", $brand_name, $brand_desc, $brandImage, $date);

                if ($stmt->execute()) {
                    $statusMsg = "New category has been added successfully.";
                } else {
                    $statusMsg = "Failed to add a new category. Please try again.";
                }
                $stmt->close();
            } else {
                $statusMsg = "Sorry, there was an error uploading your image.";
            }
        } else {
            $statusMsg = "Only JPG, JPEG, PNG, and GIF files are allowed to upload.";
        }
    } else {
        $sql = "INSERT INTO `brands`(`brand_name`, `brand_desc`, `date_added`) VALUES (?, ?, ?)";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("sss", $brand_name, $brand_desc, $date);

        if ($stmt->execute()) {
            $statusMsg = "New category has been added successfully.";
        } else {
            $statusMsg = "Failed to add a new category. Please try again.";
        }
        $stmt->close();
    }

    echo "<script>alert('$statusMsg')</script>";
    header('location: product-brands.php');
}
?>
