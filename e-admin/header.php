<?php
session_start(); 
include('config.php');
ini_set("display_errors","off");
 

	if (!isset($_SESSION['username'])) {
		$_SESSION['first_name'] = $fname;
		$_SESSION['last_name'] = $lname;
		$_SESSION['user_pic'] = $user_pic;
		$_SESSION['user_role'] = $user_role;
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
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />	
		
		<title>Dashboard | E-fone </title>
	
		<link rel="icon" href="../img/icon.png" type="image/png">
		<link rel="stylesheet" href="css/bootstrap1.min.css" />
		<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
		<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
		<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
		<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
		<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />
		<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
		<link rel="stylesheet" href="vendors/scroll/scrollable.css" />
		<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
		<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
		<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
		<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
		<link rel="stylesheet" href="vendors/morris/morris.css">
		<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />
		<link rel="stylesheet" href="css/metisMenu.css">
		<link rel="stylesheet" href="css/style1.css" />
		<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">

	</head>

	<body class="crm_body_bg">




		<?php
		include('side-navbar.php');
		?>



		<section class="main_content dashboard_part large_header_bg">
	
			<div class="container-fluid g-0">

				<div class="row">

					<div class="col-lg-12 p-0 ">

						<div class="header_iner d-flex justify-content-between align-items-center">

							<div class="sidebar_icon d-lg-none">

								<i class="ti-menu"></i>

							</div>

							<div class="serach_field-area d-flex align-items-center">

								<div class="search_inner">


								</div>

								<span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>

							</div>

							<div class="header_right d-flex justify-content-between align-items-center">

								<div class="header_notification_warp d-flex align-items-center">

									<li>

										<a class="bell_notification_clicker nav-link-notify" href="#"> 
											<img src="img/icon/bell.svg" alt="">

										</a>


										<div class="Menu_NOtification_Wrap">

											<div class="notification_Header">

												<h4>Notifications</h4>

											</div>

											<div class="Notification_body">


												<div class="single_notify d-flex align-items-center">

													<div class="notify_thumb">

														<a href="#"><img src="img/staf/2.png" alt=""></a>
 
													</div>

													<div class="notify_content">

														<a href="#"><h5>Cool Marketing </h5></a>

														<p>Lorem ipsum dolor sit amet</p>

													</div>

												</div>


											</div>

											<div class="nofity_footer">

												<div class="submit_button text-center pt_20">

													<a href="#" class="btn_1">See More</a>
 
												</div>

											</div>

										</div>


									</li>

									
									<li>

										<a class="CHATBOX_open nav-link-notify" href="#"> 
											<img src="img/icon/msg.svg" alt=""> 
										</a>

									</li>

								</div>

								
								<div class="profile_info">

									<img src="../img/users/<?php echo $_SESSION['user_pic']; ?>" alt="#">

									<div class="profile_info_iner">

										<div class="profile_author_name">

											<p><?php echo $_SESSION['user_role'];   ?>   </p>

											<h5><?php echo $_SESSION['first_name'];   ?>  <?php echo $_SESSION['last_name'];   ?></h5>

										</div>

										<div class="profile_info_details">

											<a href="#">My Profile </a>

											<a href="#">Settings</a>

											<?php  if (isset($_SESSION['username'])) : ?>   <a href="index.php?logout='1'">Log Out </a> <?php endif ?>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>