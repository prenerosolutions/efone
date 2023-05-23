<?php

// Include the database configuration file.
include "config.php";

// Get the banner ID from the POST request.
$bannerId = $_POST["bannerId"];

// Check if the banner ID is valid.
if (!empty($bannerId)) {

  // Delete the banner from the database.
  $sql = "DELETE FROM `category_banner` WHERE `banner_id` = $bannerId";
  $stmt = $connect->prepare($sql);
  $stmt->execute();

  // Close the database connection.
  $stmt->close();
  $connect->close();

  // Redirect the user to the main page.
  header("Location: category-banners.php");

} else {

  // Display an error message.
  echo "Invalid banner ID.";

}

?>
