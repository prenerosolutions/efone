<?php
include('header.php');
$sub_id = $_GET['sub_category_id'];

$csql = "SELECT * FROM `sub_categories` WHERE `sub_ctg_id`='$sub_id'"; 												
$cresult = $connect->query($csql);												
$crow = mysqli_fetch_array($cresult);
?>
        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="product-categories.php">Categories</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $crow['sub_ctg_name'];?></li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9">
                                       

                        <div class="row">
						<?php
							$sql = "SELECT * FROM `products` WHERE `sub_category`= '$sub_id' ORDER BY  products.product_id DESC "; 
								$result = $connect->query($sql);
									
								while($prow = mysqli_fetch_array($result)){
							?>
							
                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.php?product_id=<?php echo $prow['product_id'];?>">
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

                                        <h3 class="product-title"> <a href="product.php?product_id=<?php echo $prow['product_id'];?>"><?php echo $prow['product_name'] ;?></a> </h3>

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