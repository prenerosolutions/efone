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
							<?php
							$sql = "SELECT products.* FROM products WHERE products.product_category = '$category_id' ORDER BY  products.product_id DESC "; 
								$result = $connect->query($sql);
									
								while($prow = mysqli_fetch_array($result)){
							?>
							
                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="img/products/<?php echo $prow['product_image'] ;?>" width="280" height="280" alt="product" />
                                            <img src="img/products/<?php echo $prow['product_img1'] ;?>" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                           
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category-details.php?category_id=<?php echo $prow['product_category'];?>" class="product-category"><?php echo $prow['product_category'] ;?></a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="#"><?php echo $prow['product_name'] ;?></a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>                                           
                                        </div>                                      

                                        <div class="price-box">
                                       
                                            <span class="product-price"><?php					
						if($_SESSION['user_role']== "Shop Keeper"){					
						?>					  
						£<?php echo $productPrice = $prow['shopkeeper_price'] ?>						
						<?php														
						}else {						
						?>						
						£<?php echo $productPrice = $prow['product_price'] ?>												
						<?php											
							}									
						?></span>
                                        </div>
                                       

                                        <div class="product-action">
                                          
                                            <a href="#" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>Add to Cart</span></a>
                                            <a href="ajax/product-quick-view.php?product_id=<?php echo $prow['product_id'];?>" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                          <?php
								}
									?>
							
							
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
									</select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End .col-lg-9 -->

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
                                    <!-- End .widget-body -->
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