<?php
include "config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prod_name = $_POST['prod_name'];
    $sku_code = $_POST['sku'];
    $prod_brand = $_POST['prod_brand'];
    $category = $_SESSION['category_id'];
    $subCategory = $_SESSION['sub_ctg_id'];
    $short_desc = $_POST['short_desc'];
    $condition = $_POST['condition'];
    $qty = $_POST['qty'];
    $g_price = $_POST['g_price'];
    $shop_price = $_POST['shop_price'];
    $long_desc = $_POST['long_desc'];
    $date = date("Y-m-d h:i:s");

    // Validate and process file uploads
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

    if ($prod_img === null) {
        $statusMsg = "Please select a valid profile image.";
    } else {
        // Insert the product into the database
        $sql = "INSERT INTO `products` (
                `sku_code`, 
                `product_name`, 
                `product_category`, 
                `sub_category`, 
                `product_brand`, 
                `short_desc`, 
                `product_qty`, 
                `product_image`, 
                `product_img1`, 
                `product_img2`, 
                `product_img3`, 
                `product_img4`, 
                `product_img5`, 
                `shopkeeper_price`, 
                `product_condition`, 
                `product_price`, 
                `long_desc`, 
                `date_added`
            ) VALUES (
                '$sku_code',
                '$prod_name',
                '$category',
                '$subCategory',
                '$prod_brand',
                '$short_desc',
                '$qty',
                '$prod_img',
                '$img1',
                '$img2',
                '$img3',
                '$img4',
                '$img5',
                '$shop_price',
                '$condition',
                '$g_price',
                '$long_desc',
                '$date'
            )";

        $result = $connect->query($sql);

        if ($result) {
            $statusMsg = "Product has been added successfully.";
            header('Location: all-products.php');
            exit();
        } else {
            $statusMsg = "Failed to add the product. Please try again.";
			 header('Location: add-new-product.php');
        }
    }

    // Display status message
    echo $statusMsg;
    echo "<script>alert('$statusMsg')</script>";
}
?>
