<?php
include('config.php');

$ctg_id = $_POST['ctg_id'];
$ctg_name = $_POST['ctg_name'];
$ctg_desc = $_POST['ctg_desc'];
$date = date("Y-m-d");

if (!empty($_FILES["ctg_img"]["name"])) {
    $targetDir = "../img/categories/";
    $ctg_img = $_FILES["ctg_img"]["name"];
    $targetFilePath1 = $targetDir . $ctg_img;
    $fileType1 = pathinfo($targetFilePath1, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType1, $allowTypes)) {
        if (move_uploaded_file($_FILES["ctg_img"]["tmp_name"], $targetFilePath1)) {
            // Insert image file name into database
            $sql = "UPDATE `category` SET  `category_name`='$ctg_name',
                                            `category_desc`='$ctg_desc',
                                            `category_image`='$ctg_img',
                                            `date_added`='$date' WHERE `category_id`='$ctg_id'";
            $result = $connect->query($sql);
            if ($result) {
                $statusMsg = "Category edited successfully.";
            } else {
                $statusMsg = "Category not edited, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your image.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
} else {
    $sql = "UPDATE `category` SET  `category_name`='$ctg_name',
                                    `category_desc`='$ctg_desc',
                                    `date_added`='$date' WHERE `category_id`='$ctg_id'";
    $result = $connect->query($sql);
    if ($result) {
        $statusMsg = "Category edited successfully.";
    } else {
        $statusMsg = "Category not edited, please try again.";
    }
}

echo "<script>alert('$statusMsg')</script>";
echo "<script> location.replace('all-category.php'); </script>";
?>
