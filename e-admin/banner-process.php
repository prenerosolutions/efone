<?php
include('config.php');
// Check if the form is submitted
if(isset($_POST['add-banner'])) {
   

    // Get the selected category ID
    $categoryID = $_POST['ctg_id'];

    // Upload and process the banners
    $uploadDir = "uploads/"; // Directory to store the uploaded images
    $banner1 = $_FILES['banner1']['name'];
    $banner2 = $_FILES['Banner2']['name'];
    $banner3 = $_FILES['Banner3']['name'];

    // Move uploaded files to the upload directory
    move_uploaded_file($_FILES['banner1']['tmp_name'], $uploadDir . $banner1);
    move_uploaded_file($_FILES['Banner2']['tmp_name'], $uploadDir . $banner2);
    move_uploaded_file($_FILES['Banner3']['tmp_name'], $uploadDir . $banner3);

    // Insert the banner details into the database
    $sql = "INSERT INTO `category_banner`( `category_id`, `banner1`, `banner2`, `banner3`) 
            VALUES ('$categoryID', '$banner1', '$banner2', '$banner3')";
    if (mysqli_query($connect, $sql)) {
        echo "Banners uploaded successfully.";
		header('location: category-banners.php');	
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		header('location: add-category-banner.php');	
    }

    // Close the database connection
    mysqli_close($connect);
}
?>
