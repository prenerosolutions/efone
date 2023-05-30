<?php
include "config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prod_id = $_POST['prod_id']; 
    $prod_name = $_POST['prod_name'];
    $sku = $_POST['sku'];
    $category = $_POST['category'];
    $sub_ctg = $_POST['sub_ctg_id'];
    $prod_brand = $_POST['prod_brand'];
    $short_desc = $_POST['short_desc'];
    $qty = $_POST['qty'];
    $g_price = $_POST['g_price'];
    $shop_price = $_POST['shop_price'];
    //$desc = $_POST['desc'];
    $condition = $_POST['condition'];
    $long_desc = $_POST['long_desc'];
    $date = date("Y-m-d h:i:s");

    // Validate and process file uploads if any
    $targetDir = "../img/products/";
    $allowedExtensions = array('jpg', 'png', 'jpeg', 'gif');
    $uploadedFiles = [];

    function processUpload($fileKey, $targetDir)
    {
        if (!isset($_FILES[$fileKey]) || !is_uploaded_file($_FILES[$fileKey]['tmp_name'])) {
            return null;
        }

        $file = $_FILES[$fileKey];
        $filename = basename($file['name']);
        $targetFilePath = $targetDir . $filename;
        $fileExtension = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        global $allowedExtensions;

        if (!in_array($fileExtension, $allowedExtensions)) {
            return null;
        }

        if (!move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            return null;
        }

        return $filename;
    }

    $prod_img = processUpload('prod_img', $targetDir);
    $img1 = processUpload('img1', $targetDir);
    $img2 = processUpload('img2', $targetDir);
    $img3 = processUpload('img3', $targetDir);
    $img4 = processUpload('img4', $targetDir);
    $img5 = processUpload('img5', $targetDir);

    // Update the product information
    $sql = "UPDATE `products` SET 
                `sku_code`='$sku',
                `product_name`='$prod_name',
                `product_category`='$category',
                `sub_category`='$sub_ctg',
                `product_brand`='$prod_brand',
                `short_desc`='$short_desc',
                `product_qty`='$qty',
                `shopkeeper_price`='$shop_price',
                `product_condition`='$condition',
                `product_price`='$g_price',
                `long_desc`='$long_desc',
                `date_added`='$date' WHERE `product_id`='$prod_id'";

    $result = $connect->query($sql);

    if ($result) {
        $statusMsg = "Product information has been updated successfully.";

        // Update product image if a new one is uploaded
        if ($prod_img !== null) {
            $sql = "UPDATE `products` SET `product_image`='$prod_img' WHERE `product_id`='$prod_id'";
            $connect->query($sql);
        }

        // Update additional images in the database if available
        $sql = "UPDATE `products` SET 
                    `product_img1`='$img1',
                    `product_img2`='$img2',
                    `product_img3`='$img3',
                    `product_img4`='$img4',
                    `product_img5`='$img5' WHERE `product_id`='$prod_id'";

        $connect->query($sql);

        header('Location: all-products.php');
        exit();
    } else {
        $statusMsg = "Failed to update the product. Please try again.";
        header('Location: add-new-product.php');
        exit();
    }

    // Display status message
    echo $statusMsg;
    echo "<script>alert('$statusMsg')</script>";
}
?>
