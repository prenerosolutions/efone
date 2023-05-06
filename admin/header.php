<?php
session_start(); 
include('config.php');
ini_set("display_errors","off");

//$myId = $_SESSION['cus_id'];
 

	if (!isset($_SESSION['username'])) {
		$_SESSION['first_name'] = $fname;
		$_SESSION['last_name'] = $lname;
		//$_SESSION['cus_id'] = $cus_id;
		//$_SESSION['last_name'] = $last_name;
				
				//$_SESSION['user_mobile'] = $user_mobile;
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel | Efone.co.uk </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../img/fevicon.png" />
</head>
<body>
  <div class="container-scroller">
   <?php
	  include('top_bar.php');
	  ?>
    
    <div class="container-fluid page-body-wrapper">