<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>E-fone CO UK</title>

	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="Prenero Solutions">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="img/icon.png">


	<script>
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400' ] }
		};
		( function ( d ) {
			var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore( wf, s );
		} )( document );
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!--<link rel="stylesheet" href="assets/css/theme.css">-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
	<div class="page-wrapper">
		<div class="top-notice bg-primary text-white">
			<div class="container text-center">
				<h5 class="d-inline-block">Get Up to <b>20% OFF</b> New-Arrivals</h5>
				<a href="#" class="category">Apple Watches</a>
				<a href="#" class="category ml-2 mr-3">Headphones</a>
				<small>* Limited time only.</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block">
						<p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders £99+</p>
					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
						<div class="header-dropdown dropdown-expanded d-none d-lg-block">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="dashboard.php">My Account</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Blog</a></li>									
									<li><a href="cart.php">Cart</a></li>
									<li><a href="login.php" class="login-link">Log In</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

				

						<div class="social-icons">
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
							<a href="#" class="social-icon social-linked-in icon-linked-in" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="fas fa-bars"></i>
						</button>
						<a href="index.php" class="logo">
							<img src="img/logo.png" width="111" height="44" alt="Porto Logo">
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max">
						<div
							class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="#" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..."
										required>
									<div class="select-custom">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<?php
											$csql = "SELECT * FROM `category`"; 
								
												$cresult = $connect->query($csql);
								
												while($crow = mysqli_fetch_array($cresult)){
									
												?>
												
                                                
												<option value="<?php echo $crow['category_id'];?>">
													<?php echo $crow['category_name'] ?>
												</option>
												
												
												<?php
								
												}
								
									
												?>
											
											
										</select>
									</div>
									<button class="btn icon-magnifier p-0" type="submit"></button>
								</div>
							</form>
						</div>

						<div class="header-contact d-none d-lg-flex pl-4 pr-4">
							<img alt="phone" src="assets/images/phone.png" width="30" height="30" class="pb-1">
							<h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+44 7535 467381</a></h6>
						</div>

						<a href="dashboard.php" class="header-icon" title="login"><i class="icon-user-2"></i></a>

						

						<div class="dropdown cart-dropdown">
							<a href="fetch_cart.php" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="minicart-icon"></i>
								<span class="cart-count badge-circle">3</span>
							</a>


							<div class="cart-overlay"></div>

							
						</div>
					</div>
				</div>
			</div>

			<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
				<div class="container">
					<nav class="main-nav w-100">
						<ul class="menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">Products</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">Mobile Accessories</a>
											<ul class="submenu">
												<li><a href="category-details.php?category_id=1">Data Cables</a></li>
												<li><a href="#">OTG</a></li>
												<li><a href="#">Phone Chargers</a></li>
												<li><a href="#">Phone Covers</a></li>
												<li><a href="#">Card Readers</a></li>
												
											</ul>
										</div>
										<div class="col-lg-4">
											<a href="#" class="nolink">Car Accessories</a>
											<ul class="submenu">
												<li><a href="#">Travel Adopters</a></li>
												<li><a href="#">Car Mp3</a></li>
												<li><a href="#">Car Holders</a></li>
												<li><a href="#">Power Banks</a></li>
												<li><a href="#">Gaming Accessories</a></li>
												
											</ul>
										</div>
										<div class="col-lg-4 p-0">
											<div class="menu-banner">
												<figure>
													<img src="assets/images/menu-banner.jpg" width="192" height="313"
														alt="Menu banner">
												</figure>
												<div class="banner-content">
													<h4>
														<span class="">UP TO</span><br />
														<b class="">50%</b>
														<i>OFF</i>
													</h4>
													<a href="shop.php" class="btn btn-sm btn-dark">SHOP NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							
							
							<li><a href="#">Today's Deal</a></li>
							
							<li><a href="#">Trending Products</a></li>
							
							<li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>