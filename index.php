<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Efone Co Uk</title>

    <meta name="keywords" content="Efone co uk" />
    <meta name="description" content=" ">
    <meta name="author" content="Prenero Solutions">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Oswald:300,400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">      
        <header class="header">
            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left">
                        <a href="index.php" class="logo">
                            <img src="img/logo.png" alt="E-fone Logo" width="150" height="55">
                        </a>
                        <div class="header-col">
                            <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                                <!--<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>-->
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required>
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
                                       
                                        <button class="btn icon-magnifier" title="search" type="submit"></button>
                                    </div>
                                   
                                </form>
                            </div>
                           
                        </div>
                    </div>

                    <div class="header-right ml-0 ml-lg-auto">
                        <a href="dashboard.php" class="header-icon d-md-block d-none mr-0">
                            <div class="header-user">
                                <i class="icon-user-2"></i>
                                <div class="header-userinfo">
                                    <span class="d-inline-block line-height-1 ls-10">Hello!</span>
                                    <h4 class="font1 mb-0">My Account</h4>
                                </div>
                            </div>
                        </a>

                        
                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
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
                                                    <a href="demo22-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> × £99.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo22-product.html" class="product-image">
                                                    <img src="assets/images/products/product-1.jpg" alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo22-product.html">Brown Women Casual HandBag</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> × £35.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo22-product.html" class="product-image">
                                                    <img src="assets/images/products/product-2.jpg" alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                        <!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo22-product.html">Circled Ultimate 3D Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span> × £35.00
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo22-product.html" class="product-image">
                                                    <img src="assets/images/products/product-3.jpg" alt="product" width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">£134.00</span>
                                    </div>
                                  

                                    <div class="dropdown-cart-action">
                                        <a href="cart.php" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.php" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                   
                                </div>
                               
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>

            
			<div class="header-bottom sticky-header" data-sticky-options="{'mobile': false, 'offset': 684}">
                
				<div class="container">
                    
					<div class="header-center">
                        
						<button class="mobile-menu-toggler" type="button">
                            
							<i class="fas fa-bars"></i>
                        
						</button>

                       
						<nav class="main-nav d-none d-lg-flex flex-wrap">
                            
							<div class="menu-depart show-always">
                               
								<a href="#" class="toggle"><i class="fas fa-bars"></i>Shop by Category</a>
                                
								<div class="submenu">
                                    
									<a href="index.php" class="active">
										<i class="icon-category-home"></i>Home
									</a>
                                    
									<a href="category-details.php?category_id=1">
										<img src="img/category-icons/cables.png" style="width: 20px; margin-right: 5px;">
										Data Cables
									</a>
									<a href="category-details.php?category_id=2">
										<img src="img/category-icons/car-holder.png" style="width: 20px; margin-right: 5px;">
										Car Holders
									</a>
									<a href="category-details.php?category_id=3">
										<img src="img/category-icons/otg.png" style="width: 20px; margin-right: 5px;">
										OTG Cables
									</a>
									<a href="category-details.php?category_id=4">
										<img src="img/category-icons/chragers.png" style="width: 20px; margin-right: 5px;">
										Chargers
									</a>
									<a href="category-details.php?category_id=5">
										<img src="img/category-icons/phone-covers.png" style="width: 20px; margin-right: 5px;">
										Phone Covers
									</a>
									<a href="category-details.php?category_id=11">
										<img src="img/category-icons/watch.png" style="width: 20px; margin-right: 5px;">
										Apple Watch
									</a>
									<a href="category-details.php?category_id=13">
										<img src="img/category-icons/card-reader.png" style="width: 20px; margin-right: 5px;">
										Card Reader
									</a>
                                  
                                    <a href="product-categories.php">VIEW ALL <i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                            <ul class="menu">
                                <li class="active">
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Today's Deal</a>
                                    
                                </li>
                                <li>
                                    <a href="#">Trending Products</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">Mobile Accessories</a>
                                                <ul class="submenu">
                                                    <li><a href="category-details.php?category_id=1">Data Cables</a></li>
                                                    <li><a href="category-details.php?category_id=3">OTG</a>
                                                    </li>
                                                    <li><a href="category-details.php?category_id=4">Phone Chargers</a>
                                                    </li>
                                                    <li><a href="category-details.php?category_id=5">Phone Covers</a></li>
                                                    <li><a href="category-details.php?category_id=13">Card Readers</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">Car Accessories</a>
                                                <ul class="submenu">
                                                    <li><a href="category-details.php?category_id=16">Travel Adaptors</a></li>
                                                    <li><a href="category-details.php?category_id=19">Car MP3</a>
                                                    </li>
                                                    <li><a href="category-details.php?category_id=20">Car Holders</a></li>
                                                    <li><a href="category-details.php?category_id=21">Power Banks</a></li>
                                                    <li><a href="category-details.php?category_id=22">Gaming </a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner">
                                                    <figure>
                                                        <img src="assets/images/menu-banner.jpg" alt="Menu banner" width="300" height="300">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">20%</b>
                                                            <i>OFF</i>
                                                        </h4>
                                                        <a href="shop.php" class="btn btn-sm btn-dark">SHOP NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li><a href="#">Special Offers</a></li>
                                
                            </ul>
                        </nav>
                        
                    </div>
                </div>
            </div>
        </header>
        
		
        
<main class="main">
            
	<section class="intro-section">
                
		<div class="container">
                    <div class="row">
                        <div class="col-lg-9 mb-2">
                            <div class="home-slider slide-animate owl-carousel owl-theme custom-nav" data-owl-options="{
                                'loop': false
                            }">
                                <div class="home-slide home-slide-1 banner">
                                    <img class="slide-bg" src="img/banners/slide1.png" alt="slider image" width="772" height="434">
                                    <div class="banner-layer banner-layer-middle banner-layer-right">
                                        <div class="appear-animate" data-animation-name="rotateInUpLeft">

                                            <h2 class="font1 ls-10 text-uppercase text-right m-b-4">BOROFONE <br>BG3 Warrior
                                            </h2>
                                            <div class="coupon-sale-text">
                                                <h4 class="m-b-2 font1 d-block text-white bg-dark skew-box">Exclusive COUPON
                                                </h4>
                                                <h5 class="mb-0 font1 d-inline-block bg-dark skew-box"><i class="text-dark ls-0">UP
                                                        TO</i><b class="text-white">£100</b><sub class="text-dark">OFF</sub>
                                                </h5>
                                            </div>

                                            <a href="shop.php" class="btn btn-light btn-lg ls-10">View All
                                                Now</a>
                                        </div>
                                    </div>
                                    <div class="banner-layer banner-layer-bottom banner-layer-right">
                                        <p class="ls-0 mb-0">* Only 200 Available</p>
                                    </div>
                                </div>
                                <div class="home-slide home-slide-2 banner">
                                    <img class="slide-bg" src="assets/images/demoes/demo22/slider/home_slide2.jpg" alt="slider image" width="772" height="434">
                                    <div class="banner-layer banner-layer-middle banner-layer-left">
                                        <div class="appear-animate" data-animation-name="rotateInUpLeft">
                                            <h2 class="font1 ls-10 text-uppercase m-b-4">Top Brands
                                                <br>Smartphones</h2>
                                            <div class="coupon-sale-text d-flex flex-column align-items-start">
                                                <h4 class="m-b-2 font1 d-block text-uppercase text-white bg-dark skew-box">
                                                    Starting From
                                                </h4>
                                                <h5 class="mb-0 font1 d-inline-block bg-dark skew-box"><b class="text-white">£199</b>
                                                </h5>
                                            </div>

                                            <a href="#" class="btn btn-light btn-lg ls-10">View All
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2">
                            <div class="featured-products-slider owl-carousel owl-theme dot-inside dots-small">
                                <div class="product-default count-down">
                                    <h3 class="product-name">Flash Deals</h3>
                                    <figure>
                                        <a href="demo22-product.html">
                                            <img src="img/banners/slide2.png" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <span class="product-label label-sale">- 34%</span>
                                        </div>
                                        <div class="product-countdown-container">
                                            <span class="product-countdown-title">offer ends in:</span>
                                            <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                            </div>
                                            <!-- End .product-countdown -->
                                        </div>
                                        <!-- End .product-countdown-container -->
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-title">
                                            <a href="#">Hoco Z44 Leading PD20W+QC</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">£596.00</span>
                                            <span class="product-price">£299.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <div class="product-default count-down">
                                    <h3 class="product-name">Flash Deals</h3>
                                    <figure>
                                        <a href="#">
                                            <img src="img/banners/slide3.png" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <span class="product-label label-sale">- 33%</span>
                                        </div>
                                        <div class="product-countdown-container">
                                            <span class="product-countdown-title">offer ends in: </span>
                                            <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                            </div>
                                            <!-- End .product-countdown -->
                                        </div>
                                        <!-- End .product-countdown-container -->
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-title">
                                            <a href="#">Hoco E64 mini BT</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">£299.00</span>
                                            <span class="product-price">£199.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
	<div class="container">
                
		<div class="info-boxes-container">
                    
			<div class="row m-0 divide-line">
                        
				<div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                            
					<i class="icon-shipping text-primary"></i>

                            
					<div class="info-box-content">
                                
						<h4 class="font1 line-height-1 ls-10">FREE SHIPPING &amp; RETURN</h4>
                                
						<p class="font-weight-light">Free shipping on orders over £99.</p>
                            
					</div>
                           
					
                        
				</div>
                        <!-- End .info-box -->
                        <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                            <i class="icon-money text-primary"></i>

                            <div class="info-box-content">
                                <h4 class="font1 line-height-1 ls-10">MONEY BACK GUARANTEE</h4>
                                <p class="font-weight-light">Money back guarantee under 7 days</p>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <!-- End .info-box -->
                        <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                            <i class="icon-support text-primary"></i>

                            <div class="info-box-content">
                                <h4 class="font1 line-height-1 ls-10">ONLINE SUPPORT 24/7</h4>
                                <p class="font-weight-light">Support online 24 Hours a day</p>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <!-- End .info-box -->
                        <div class="info-box info-box-icon-left col-sm-6 col-lg-3">
                            <i class="icon-secure-payment text-primary"></i>

                            <div class="info-box-content">
                                <h4 class="font1 line-height-1 ls-10">Member Discount</h4>
                                <p class="font-weight-light">on every order over £110</p>
                            </div>
                            <!-- End .info-box-content -->
                        </div>
                        <!-- End .info-box -->
                    </div>
                </div>
            </div>

            <section class="most-viewed-products appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                <div class="container">
                    <h2 class="section-title ls-n-10 pb-3 m-b-4">Most Viewed Products</h2>

                    <div class="row">
                        <div class="products-slider 5col owl-carousel owl-theme owl-nav-outisde show-nav-hover nav-image-center custom-nav" data-owl-options="{
                            'margin': 0,
                            'nav': true
                        }">
							<?php
							
								$sql = "SELECT * FROM products LIMIT 9 "; 
								$result = $connect->query($sql);
									
								while($prow = mysqli_fetch_array($result)){
							
							?>
							
							
                            
							<div class="product-default inner-quickview inner-icon">
                                
								<figure>
                                    <a href="demo22-product.html">
                                        <img src="admin/uploads/products/<?php echo $prow['product_image'] ?>" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.php?product_id=<?php echo $prow['product_id'];?>" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                
								<div class="product-details">
                                    
									<div class="category-wrap">
                                        
										<div class="category-list">
                                            
											<a href="#" class="product-category">
												<?php 
								$category = $prow['product_category']; 
											$csql = "SELECT * FROM `category` WHERE `category_id`='$category'"; 
								$cresult = $connect->query($csql);
								$crow = mysqli_fetch_array($cresult);	
												
												
										echo $crow['category_name']		;
												
												?>
												
											
											</a>
                                        
										</div>
                                        
										<a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish">
											<i class="icon-heart"></i>
										</a>
                                    
									</div>
                                    
									<h3 class="product-title">
                                        
										<a href="#"><?php echo $prow['product_name'] ?></a>
                                    
									</h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">
											
											 <?php


					if($_SESSION['user_role']== "Shop Keeper"){
					?>
					  £<?php echo $productPrice = $prow['shopkeeper_price'] ?>
						<?php
									
					}else {
						?>
						£<?php echo $productPrice = $prow['product_price'] ?>
						
						<?php
						
					}				
					?>
										
										
										
										</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
							
							<?php
								
								}
							?>
						
							
                        </div>
                    </div>
                </div>
            </section>

            <section class="top-categories">
                <div class="container">
                    <div class="row m-b-3">
                        <div class="col-lg-6">
                            <div class="banner banner1 mb-2 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200" style="background-color: #f4f4f4;">
                                <figure>
                                    <img src="img/banners/banner-1.png" alt="banner" width="700" height="236">
                                </figure>
                                <div class="banner-layer banner-layer-middle banner-layer-left">
                                    <h3 class="font1 ls-10 text-uppercase mb-0">Ear<br>Buds</h3>
                                </div>
                                <div class="banner-layer banner-layer-middle banner-layer-right">
                                    <div class="coupon-sale-text">
                                        <h4 class="font1 line-height-1 ls-10 text-white bg-primary skew-box m-b-2">
                                            Starting from</h4>
                                        <h5 class="d-inline-block font1 text-white bg-primary skew-box mb-0">£19<sub class="text-dark">£29</sub>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner banner2 mb-2 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200" style="background-color: #f4f4f4;">
                                <figure>
                                    <img src="img/banners/banner-2.png" alt="banner" width="700" height="236">
                                </figure>
                                <div class="banner-layer banner-layer-middle banner-layer-left">
                                    <h3 class="font1 text-uppercase ls-10 mb-0">For all<br>styles</h3>
                                </div>
                                <div class="banner-layer banner-layer-middle banner-layer-right">
                                    <div class="coupon-sale-text">
                                        <h4 class="font1 line-height-1 ls-10 text-white bg-secondary skew-box m-b-2">
                                            Starting from</h4>
                                        <h5 class="d-inline-block font1 text-white bg-secondary skew-box mb-0">£19<sub class="text-dark">£29</sub>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="section-title line-height-1 ls-10 pb-4 mb-4">Top Categories</h2>

                    <div class="mb-2 appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                        <div class="categories-slider owl-carousel owl-theme" data-owl-options="{
                            'margin': 0,
                            'nav': false,
                            'responsive': {
                                '480': {
                                    'items': 3
                                },
                                '576': {
                                    'items': 4
                                },
                                '768': {
                                    'items': 5
                                },
                                '992': {
                                    'items': 6
                                },
                                '1200': {
                                    'items': 7
                                }
                            }
                        }">
                            <a href="#">
                               <img src="img/category-icons/cables.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Data Cables</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/car-holder.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Car Holders</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/otg.png" style="width: 120px; margin-bottom: 10px;">
                                <span>OTG Cables</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/chragers.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Chargers</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/phone-covers.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Phone Covers</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/watch.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Apple Watches</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/card-reader.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Card Reader</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/travel-chargers.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Travel Adopter</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/headphone.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Headphones</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/car-mp3.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Car MP3</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/holders.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Holders</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/power bank.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Power Bank</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/gaming.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Gaming</span>
                            </a>
							<a href="#">
                               <img src="img/category-icons/pheripharel.png" style="width: 120px; margin-bottom: 10px;">
                                <span>Peripharel Accesories</span>
                            </a>
							
                            
                        </div>
                    </div>
                </div>
            </section>

            <section class="best-sellers bg-gray appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <h2 class="section-title ls-n-10 pb-3 m-b-4">Best Sellers </h2>

                    <div class="grid grid1">
                        <div class="grid-item col-md-8 col-lg-9 col-xl-5col-2 height-x2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-big-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">Smart Watches</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
						<?php
							
								$hsql = "SELECT products.* FROM products WHERE products.product_category = 17 ORDER BY products.product_id ASC LIMIT 6 "; 
								$hresult = $connect->query($hsql);
									
								while($hrow = mysqli_fetch_array($hresult)){
							
							?>
							
                        
						<div class="grid-item col-6 col-md-4 col-lg-3 col-xl-5col height-x1">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="#">
                                        <img src="admin/uploads/products/<?php echo $hrow['product_image'] ?>" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-sale">-33%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                    <!--<div class="product-countdown-container">
                                        <span class="product-countdown-title">offer ends in: </span>
                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                        </div>
                                        
                                    </div>-->
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">HD Camera</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$299.00</span>
                                        <span class="product-price">$199.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
						
						<?php
								}
									?>
						
                      
                        <div class="grid-col-sizer col-1 col-xl-5col"></div>
                    </div>
                </div>
            </section>

            <section class="recent-products">
                <div class="container">
                    <div class="appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                        <h2 class="section-title ls-n-10 pb-3 m-b-4">Recent Products</h2>

                        <div class="row">
                            <div class="products-slider 5col owl-carousel owl-theme owl-nav-outisde show-nav-hover" data-owl-options="{
                            'margin': 0
                        }">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo22-product.html">
                                            <img src="assets/images/demoes/demo22/products/product-20.jpg" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-35%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="#" class="product-category">category</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo22-product.html">HD Camera</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$199.00</span>
                                            <span class="product-price">$129.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo22-product.html">
                                            <img src="assets/images/demoes/demo22/products/product-21.jpg" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-35%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="#" class="product-category">category</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo22-product.html">Black Watches</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$199.00</span>
                                            <span class="product-price">$129.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo22-product.html">
                                            <img src="assets/images/demoes/demo22/products/product-12.jpg" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-89%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="#" class="product-category">category</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo22-product.html">USB Speaker</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$596.00</span>
                                            <span class="product-price">$68.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo22-product.html">
                                            <img src="assets/images/demoes/demo22/products/product-17.jpg" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-89%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="#" class="product-category">category</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo22-product.html">Classic Earphone</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$596.00</span>
                                            <span class="product-price">$68.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo22-product.html">
                                            <img src="assets/images/demoes/demo22/products/product-10.jpg" width="217" height="217" alt="product">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-17%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="demo22-shop.html" class="product-category">category</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo22-product.html">Bluetooth Speaker</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div>
                                        <!-- End .price-box -->
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner banner3 bg-dark appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                        <div class="row m-0 no-gutters align-items-center">
                            <div class="col-md-6 col-lg-3 align-self-baseline">
                                <figure>
                                    <img src="assets/images/demoes/demo22/banners/banner-3.jpg" alt="image" width="380" height="136">
                                </figure>
                            </div>
                            <div class="col-md-6 col-lg-4 py-4 py-lg-5">
                                <div class="px-5 px-md-0">
                                    <h3 class="font1 text-uppercase m-b-2">Check new arrivals</h3>
                                    <h2 class="font1 ls-10 text-uppercase text-white mb-0">Explore Smartphones</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 py-4 py-lg-5 d-flex justify-content-md-center">
                                <div class="px-5 px-md-0">
                                    <div class="coupon-sale-text d-flex flex-column align-items-start">
                                        <h4 class="m-b-2 font1 d-block text-dark bg-white skew-box">Exclusive COUPON
                                        </h4>
                                        <h5 class="mb-0 font1 d-inline-block bg-primary skew-box"><i class="text-white ls-0">UP
                                                TO</i><b class="text-white">$200</b><sub class="text-white">OFF</sub>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 py-4 py-lg-5">
                                <div class="px-5 px-md-0">
                                    <a href="demo22-shop.html" class="btn btn-dark font1 ls-10">View All Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="electronics-container appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <h2 class="section-title border-0 line-height-1 ls-n-10 m-b-4">Electronics</h2>

                    <div class="row no-gutters m-0 bg-gray">
                        <div class="col-md-5 col-lg-2">
                            <div class="category-lists d-flex flex-md-column flex-wrap">
                                <a href="#">3D Printer Kit</a>
                                <a href="#">Arduino Compatible Boards</a>
                                <a href="#">Digital Microscope</a>
                                <a href="#">Furniture</a>
                                <a href="#">IP Camera</a>
                                <a href="#">Toys</a>
                                <a href="#">TV Box</a>
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-3 order-first order-md-0">
                            <div class="banner banner4 h-100" style="background-color: #f4f4f4;">
                                <figure class="h-100">
                                    <img class="h-100" src="assets/images/demoes/demo22/banners/banner-4.jpg" alt="baner" width="360" height="508">
                                </figure>
                                <div class="banner-layer banner-layer-top">
                                    <h3 class="font1 text-center text-uppercase">
                                        Electronic<br>deals
                                    </h3>
                                    <div class="coupon-sale-text d-flex flex-column align-items-start">
                                        <h4 class="m-b-2 font1 d-block text-white bg-dark skew-box">Exclusive COUPON
                                        </h4>
                                        <h5 class="mb-0 font1 d-inline-block bg-dark skew-box"><i class="text-dark ls-0">UP
                                                TO</i><b class="text-white">$100</b><sub class="text-dark">OFF</sub>
                                        </h5>
                                    </div>
                                </div>
                                <div class="banner-layer banner-layer-bottom">
                                    <a href="demo22-shop.html" class="btn btn-light">View All Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="grid grid2">
                                <div class="grid-item col-md-8 height-x1">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-10.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-sale">-17%</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Bluetooth Speaker</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$59.00</span>
                                                <span class="product-price">$49.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="grid-item col-6 col-md-4 height-x2">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-9.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-sale">-17%</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Laptop Case Bag</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$1,999.00</span>
                                                <span class="product-price">$1,699.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="grid-item col-6 col-md-4 height-x1">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-18.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Motor Cap</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$199.00</span>
                                                <span class="product-price">$109.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="grid-item col-6 col-md-4 height-x1">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-23.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Computer Mouse</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$55.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-1 col-md-4 grid-col-sizer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mobile-phones-container appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <h2 class="section-title border-0 line-height-1 ls-n-10 m-b-4">Mobile Phones &amp; Accessories</h2>

                    <div class="row no-gutters m-0 bg-gray">
                        <div class="col-md-5 col-lg-2">
                            <div class="category-lists d-flex flex-md-column flex-wrap">
                                <a href="#">Motors</a>
                                <a href="#">Oneplus 6</a>
                                <a href="#">Power Bank</a>
                                <a href="#">Smart Watch</a>
                                <a href="#">Type-c Cable</a>
                                <a href="#">Xiaomi Mi A2</a>
                                <a href="#">Xiaomi Mi Band 3</a>
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-3 order-first order-md-0">
                            <div class="banner banner5 h-100" style="background-color: #f4f4f4;">
                                <figure class="h-100">
                                    <img class="h-100" src="assets/images/demoes/demo22/banners/banner-5.jpg" alt="baner" width="360" height="508">
                                </figure>
                                <div class="banner-layer banner-layer-top">
                                    <h3 class="font1 text-center text-uppercase">
                                        Top Brands<br>Smartphones
                                    </h3>
                                    <div class="coupon-sale-text d-flex flex-column align-items-start">
                                        <h4 class="m-b-2 font1 d-block text-uppercase text-white bg-dark skew-box">
                                            Starting From</h4>
                                        <h5 class="mb-0 font1 d-inline-block bg-dark skew-box"><b class="text-white">$199</b>
                                        </h5>
                                    </div>
                                </div>
                                <div class="banner-layer banner-layer-bottom">
                                    <a href="demo22-shop.html" class="btn btn-primary">View All Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="grid grid3">
                                <div class="grid-item col-md-8 height-x1">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-12.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-sale">-89%</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">USB Speaker</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$596.00</span>
                                                <span class="product-price">$68.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="grid-item col-6 col-md-4 height-x2">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-17.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="label-group">
                                                <div class="product-label label-sale">-89%</div>
                                            </div>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Classic Earphone</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$596.00</span>
                                                <span class="product-price">$68.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="grid-item col-6 col-md-4 height-x1">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-13.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Casual Blue Shoes</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$101.00 &ndash; $108.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="grid-item col-6 col-md-4 height-x1">
                                    <div class="product-default inner-quickview inner-icon">
                                        <figure>
                                            <a href="demo22-product.html">
                                                <img src="assets/images/demoes/demo22/products/product-11.jpg" width="217" height="217" alt="product">
                                            </a>
                                            <div class="btn-icon-group">
                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                        class="icon-shopping-cart"></i></a>
                                            </div>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="category-wrap">
                                                <div class="category-list">
                                                    <a href="demo22-shop.html" class="product-category">category</a>
                                                </div>
                                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                            <h3 class="product-title">
                                                <a href="demo22-product.html">Blue Gentle Shoes</a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$101.00 &ndash; $111.00</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                </div>
                                <div class="col-1 col-md-4 grid-col-sizer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="top-rated-products appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <h2 class="section-title ls-n-10 pb-3 m-b-4">Top Rated Products</h2>

                    <div class="row">
                        <div class="products-slider 5col owl-carousel owl-theme owl-nav-outisde show-nav-hover" data-owl-options="{
                            'margin': 0
                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-13.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">Casual Blue Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $108.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-22.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-sale">-33%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                    <div class="product-countdown-container">
                                        <span class="product-countdown-title">offer ends in: </span>
                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                        </div>
                                        <!-- End .product-countdown -->
                                    </div>
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">HD Camera</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$299.00</span>
                                        <span class="product-price">$199.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-icon inner-quickview">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-4.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-sale">- 34%</span>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                    <div class="product-countdown-container">
                                        <span class="product-countdown-title">offer ends in:</span>
                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                        </div>
                                        <!-- End .product-countdown -->
                                    </div>
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">1080p Wifi IP Camera</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">$596.00</span>
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-9.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-sale">-17%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">Laptop Case Bag</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:90%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$1,999.00</span>
                                        <span class="product-price">$1,699.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-8.jpg" width="217" height="217" alt="product">
                                        <img src="assets/images/demoes/demo22/products/product-8-2.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">Black Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo22-product.html">
                                        <img src="assets/images/demoes/demo22/products/product-big-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo22-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo22-product.html">Smart Watches</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brands-section">
                <div class="container">
                    <h2 class="section-title line-height-1 ls-10 pb-4 mb-5 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="400">
                        Top Brands</h2>

                    <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-delay="400" data-owl-options="{
                        'margin': 30,
                        'responsive': {
                            '991': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }">
                        <img src="assets/images/demoes/demo22/brands/brand1.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo22/brands/brand2.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo22/brands/brand3.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo22/brands/brand4.png" width="200" height="50" alt="brand">
                        <img src="assets/images/demoes/demo22/brands/brand5.png" width="200" height="50" alt="brand">
                    </div>
                    <!-- End .brands-slider -->
                </div>
            </section>
        </main>
        <!-- End .main -->
<?php
include('footer.php');
?>