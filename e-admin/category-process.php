<?php
include "config.php";

if (isset($_POST["ctg_name"])) {
    $ctg_name = $_POST['ctg_name'];
    $ctg_desc = $_POST['ctg_desc'];
    $date = date("Y-m-d");

    if (!empty($_FILES["ctg_img"]["name"])) {
        $targetDir = "../img/categories/";
        $catImage = $_FILES["ctg_img"]["name"];
        $targetFilePath = $targetDir . $catImage;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["ctg_img"]["tmp_name"], $targetFilePath)) {
                $sql = "INSERT INTO `category`(`category_name`, `category_desc`, `category_image`, `date_added`) VALUES (?, ?, ?, ?)";
                $stmt = $connect->prepare($sql);
                $stmt->bind_param("ssss", $ctg_name, $ctg_desc, $catImage, $date);

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
        $sql = "INSERT INTO `category`(`category_name`, `category_desc`, `date_added`) VALUES (?, ?, ?)";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param("sss", $ctg_name, $ctg_desc, $date);

        if ($stmt->execute()) {
            $statusMsg = "New category has been added successfully.";
        } else {
            $statusMsg = "Failed to add a new category. Please try again.";
        }
        $stmt->close();
    }

    echo "<script>alert('$statusMsg')</script>";
    header('location: all-category.php');
}
?>
