<?php
include('header.php');
$category_id = $_GET['category_id'];

$csql = "SELECT * FROM category WHERE category_id ='$category_id'"; 												
$cresult = $connect->query($csql);												
$crow = mysqli_fetch_array($cresult);
?>
        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="product-categories.php">Categories</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $crow['category_name'];?></li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="boxed-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
							<?php
							$bsql = "SELECT * FROM `category_banner` WHERE `category_id`='$category_id'"; 												

							$bresult = $connect->query($bsql);												

							$brow = mysqli_fetch_array($bresult);
							?>
                            <div class="boxed-slide boxed-slide-1">
                                <figure>
                                    <img class="slide-bg owl-lazy" data-src="img/category-banners/<?php echo $brow['banner1']; ?>" src="img/category-banners/<?php echo $brow['banner1']; ?>" alt="banner" width="870" height="300">
                                </figure>
                                <div class="slide-content">
                                   <!-- <h4>Fashion</h4>
                                    <h5>mega sale</h5>
                                    <span>extra</span>
                                    <b>60<i>%</i> OFF</b>
                                    <p>On order above $555</p>-->
                                </div>
                            </div>

                           
							
							
                        </div>

                  

                        <div class="row">
						<section class="simple-section mt-5">
					<h4 class="heading-bottom-border text-uppercase">Sub Categories</h4>
					<div class="row">
						<?php
							$subsql = "SELECT * FROM `sub_categories` WHERE `category_id`='$category_id'"; 												

							$subresult = $connect->query($subsql);												

							while($subrow = mysqli_fetch_array($subresult)){
							?>
						
						<div class="col-lg-4 col-sm-4 col-6">
							<div class="product-category">
								<a href="sub-category-products.php?sub_category_id=<?php echo $subrow['sub_ctg_id'] ?>">
									<figure>
										<img src="img/sub-categories/<?php echo $subrow['sub_ctg_img'] ?>" width="300" height="300"
											alt="category">
									</figure>
									<div class="category-content">
										<h3><?php echo $subrow['sub_ctg_name'] ?></h3>
										
										<?php
													$sub_ctg_id = $subrow['sub_ctg_id'];
													$psql = "SELECT * FROM `products` WHERE `sub_category`='$sub_ctg_id'"; 
								
												$presult = $connect->query($psql);
														//$prow = mysqli_fetch_array($presult)
													$rowcount=mysqli_num_rows($presult);	
													
													?>
										
										
										<span><mark class="count"><?php echo $rowcount; ?></mark> products</span>
									</div>
								</a>
							</div>
						</div>
						
						<?php
						}
						?>
						
						
					</div>
				</section>
							
                        </div>
                      

                        
                    </div>
                 

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                          <?php
											$ctsql = "SELECT * FROM `category`"; 
								$ctresult = $connect->query($ctsql);
									
								while($ctrow = mysqli_fetch_array($ctresult)){
											
											?>
                                            <li>
												<a href="category-details.php?category_id=<?php echo $ctrow['category_id'] ?>">
													<?php  echo $ctrow['category_name']; ?>
												</a>
												
											</li>
											<?php
								}
									?>
                                        </ul>
                                    </div>
                                   
                                </div>
                                
                            </div>
                         


                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/small/product-4.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-4-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Blue Backpack for
															the Young - S</a> </h3>
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
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/small/product-5.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-5-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Casual Spring Blue
															Shoes</a> </h3>
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
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/small/product-6.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-6-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Men Black Gentle
															Belt</a> </h3>
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
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/small/product-1.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-1-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D
															Bluetooth Speaker</a> </h3>
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
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/small/product-2.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-2-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual
															HandBag</a> </h3>
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
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="assets/images/products/small/product-3.jpg" width="75" height="75" alt="product" />
                                                        <img src="assets/images/products/small/product-3-2.jpg" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate
															3D Speaker</a> </h3>
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
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->
                                    </div>
                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                            </div>
                           
							
                        </div>
                        
                    </aside>
                   
                </div>
                
            </div>
           

            <div class="mb-4"></div>
           
        </main>
        
<?php
include('footer.php');
?>