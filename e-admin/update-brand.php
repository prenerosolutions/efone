<?php
include "config.php";

if (isset($_POST["brand_name"])) {
    $brand_id = $_POST['brand_id'];
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
                $sql = "UPDATE brands SET brand_name=?, brand_desc=?, brand_img=?, date_added=? WHERE brand_id=?";
                $stmt = $connect->prepare($sql);
                $stmt->bind_param("ssssi", $brand_name, $brand_desc, $brandImage, $date, $brand_id);

                if ($stmt->execute()) {
                    $statusMsg = "Brand information has been updated successfully.";
                } else {
                    $statusMsg = "Failed to update brand information. Please try again.";
                }
                $stmt->close();
            } else {
                $statusMsg = "Sorry, there was an error uploading your image.";
            }
        } else {
            $statusMsg = "Only JPG, JPEG, PNG, and GIF files are allowed to upload.";
        }
    } else {
        $sql = "UPDATE brands SET brand_name=?, brand_desc=?, date_added=? WHERE brand_id=?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("sssi", $brand_name, $brand_desc, $date, $brand_id);

        if ($stmt->execute()) {
            $statusMsg = "Brand information has been updated successfully.";
        } else {
            $statusMsg = "Failed to update brand information. Please try again.";
        }
        $stmt->close();
    }

    echo "<script>alert('$statusMsg')</script>";
    header('location: product-brands.php');
}
?>
