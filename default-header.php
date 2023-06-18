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

                        
                        <?php
						include('fetch_cart.php');
						?>
                       
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
									<a href="category-details.php?category_id=6">
										<img src="img/category-icons/watch.png" style="width: 20px; margin-right: 5px;">
										Apple Watch
									</a>
									<a href="category-details.php?category_id=7">
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
        