<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Bootstrap eCommerce Template</title>

	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


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
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
	<div class="page-wrapper">
		<div class="top-notice bg-primary text-white">
			<div class="container text-center">
				<h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
				<a href="category.html" class="category">MEN</a>
				<a href="category.html" class="category ml-2 mr-3">WOMEN</a>
				<small>* Limited time only.</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block">
						<p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
						<div class="header-dropdown dropdown-expanded d-none d-lg-block">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="dashboard.html">My Account</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="wishlist.html">My Wishlist</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="login.html" class="login-link">Log In</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="header-dropdown">
							<a href="#"><i class="flag-us flag"></i>ENG</a>
							<div class="header-menu">
								<ul>
									<li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
									</li>
									<li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
							<a href="#">USD</a>
							<div class="header-menu">
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">USD</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
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
											
											
											<option value="4">Fashion</option>
											
											
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-magnifier p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex pl-4 pr-4">
							<img alt="phone" src="assets/images/phone.png" width="30" height="30" class="pb-1">
							<h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+123 5678 890</a></h6>
						</div>

						<a href="login.html" class="header-icon" title="login"><i class="icon-user-2"></i></a>

						<a href="wishlist.html" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

						<div class="dropdown cart-dropdown">
							<a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="minicart-icon"></i>
								<span class="cart-count badge-circle">3</span>
							</a>


							<div class="cart-overlay"></div>

							<div class="dropdown-menu mobile-cart">
								<a href="#" title="Close (Esc)" class="btn-close">×</a>

								<div class="dropdownmenu-wrapper custom-scrollbar">
									<div class="dropdown-cart-header">Shopping Cart</div>
									<!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Ultimate 3D Bluetooth Speaker</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													× $99.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-1.jpg" alt="product"
														width="80" height="80">
												</a>

												<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Brown Women Casual HandBag</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													× $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-2.jpg" alt="product"
														width="80" height="80">
												</a>

												<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Circled Ultimate 3D Speaker</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													× $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-3.jpg" alt="product"
														width="80" height="80">
												</a>
												<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
											</figure>
										</div><!-- End .product -->
									</div><!-- End .cart-product -->

									<div class="dropdown-cart-total">
										<span>SUBTOTAL:</span>

										<span class="cart-total-price float-right">$134.00</span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="cart.html" class="btn btn-gray btn-block view-cart">View
											Cart</a>
										<a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
									</div><!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
				<div class="container">
					<nav class="main-nav w-100">
						<ul class="menu">
							<li>
								<a href="demo4.html">Home</a>
							</li>
							<li>
								<a href="category.html">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 1</a>
											<ul class="submenu">
												<li><a href="category.html">Fullwidth Banner</a></li>
												<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a>
												</li>
												<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a>
												</li>
												<li><a href="category.html">Left Sidebar</a></li>
												<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
												<li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
												<li><a href="category-horizontal-filter1.html">Horizontal Filter1</a>
												</li>
												<li><a href="category-horizontal-filter2.html">Horizontal Filter2</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 2</a>
											<ul class="submenu">
												<li><a href="category-list.html">List Types</a></li>
												<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a>
												</li>
												<li><a href="category.html">3 Columns Products</a></li>
												<li><a href="category-4col.html">4 Columns Products</a></li>
												<li><a href="category-5col.html">5 Columns Products</a></li>
												<li><a href="category-6col.html">6 Columns Products</a></li>
												<li><a href="category-7col.html">7 Columns Products</a></li>
												<li><a href="category-8col.html">8 Columns Products</a></li>
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
													<a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="product.html">Products</a>
								<div class="megamenu megamenu-fixed-width">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">PRODUCT PAGES</a>
											<ul class="submenu">
												<li><a href="product.html">SIMPLE PRODUCT</a></li>
												<li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
												<li><a href="product.html">SALE PRODUCT</a></li>
												<li><a href="product.html">FEATURED & ON SALE</a></li>
												<li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
												<li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
												<li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
												<li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-4">
											<a href="#" class="nolink">PRODUCT LAYOUTS</a>
											<ul class="submenu">
												<li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
												<li><a href="product-grid-layout.html">GRID IMAGE</a></li>
												<li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
												<li><a href="product-sticky-info.html">STICKY INFO</a></li>
												<li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
												<li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
												<li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
												<li><a href="#">BUILD YOUR OWN</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-4 p-0">
											<div class="menu-banner menu-banner-2">
												<figure>
													<img src="assets/images/menu-banner-1.jpg" width="182" height="317"
														alt="Menu banner" class="product-promo">
												</figure>
												<i>OFF</i>
												<div class="banner-content">
													<h4>
														<span class="">UP TO</span><br />
														<b class="">50%</b>
													</h4>
												</div>
												<a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
											</div>
										</div><!-- End .col-lg-4 -->
									</div><!-- End .row -->
								</div><!-- End .megamenu -->
							</li>
							<li class="active">
								<a href="#">Pages</a>
								<ul>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="cart.html">Shopping Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="single.html">Blog Post</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							<li>
								<a href="#">Elements</a>
								<ul class="custom-scrollbar">
									<li><a href="element-accordions.html">Accordion</a></li>
									<li><a href="element-alerts.html">Alerts</a></li>
									<li><a href="element-animations.html">Animations</a></li>
									<li><a href="element-banners.html">Banners</a></li>
									<li><a href="element-buttons.html">Buttons</a></li>
									<li><a href="element-call-to-action.html">Call to Action</a></li>
									<li><a href="element-countdown.html">Count Down</a></li>
									<li><a href="element-counters.html">Counters</a></li>
									<li><a href="element-headings.html">Headings</a></li>
									<li><a href="element-icons.html">Icons</a></li>
									<li><a href="element-info-box.html">Info box</a></li>
									<li><a href="element-posts.html">Posts</a></li>
									<li><a href="element-products.html">Products</a></li>
									<li><a href="element-product-categories.html">Product Categories</a></li>
									<li><a href="element-tabs.html">Tabs</a></li>
									<li><a href="element-testimonial.html">Testimonials</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact Us</a></li>
							<li class="float-right"><a href="https://1.envato.market/DdLk5" class="pl-5"
									target="_blank">Buy Porto!</a></li>
							<li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->