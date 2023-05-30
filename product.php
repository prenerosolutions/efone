<?php
include('header.php');
$product_id=$_GET['product_id'];
?>


<main class="main">
            
	<div class="container">
				
		<?php

				
		$sql = "select * from products where product_id = '$product_id'"; 							
		
				
		$result = $connect->query($sql);				
		
				
		$prow = mysqli_fetch_array($result);	
				
				
		?>
                
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
                   
			<ol class="breadcrumb">
                       
				<li class="breadcrumb-item">
					<a href="index.php">
						<i class="icon-home"></i>
					</a>
				</li>
                        
				<li class="breadcrumb-item">
					<a href="#"><?php echo $prow['product_name'] ?></a>
				</li>
                    
			</ol>
                
		</nav>

                
		<div class="product-single-container product-single-default">
                    
			

                    
			<div class="row">
                       
				<div class="col-lg-5 col-md-6 product-single-gallery">
                           
					<div class="product-slider-container">
                              
						<div class="label-group">
                                   
							<div class="product-label label-hot">HOT</div>

                                   
							<div class="product-label label-sale">
                                        -16%
                                   
							</div>
                               
						</div>

                              
						<div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    
							<div class="product-item">
                                       
								<img class="product-single-image" src="img/products/<?php echo $prow['product_image'] ?>" data-zoom-image="img/products/<?php echo $prow['product_image'] ?>" width="468" height="468" alt="product" />
                                    
							</div>
                                    
							<div class="product-item">
                                        
								<img class="product-single-image" src="img/products/<?php echo $prow['product_img1'] ?>" data-zoom-image="img/products/<?php echo $prow['product_img1'] ?>" width="468" height="468" alt="product" />
                                    
							</div>
                                   
							<div class="product-item">
                                       
								<img class="product-single-image" src="img/products/<?php echo $prow['product_img2'] ?>" data-zoom-image="img/products/<?php echo $prow['product_img2'] ?>" width="468" height="468" alt="product" />
                                   
							</div>
                                    
							<div class="product-item">
                                       
								<img class="product-single-image" src="img/products/<?php echo $prow['product_img3'] ?>" data-zoom-image="img/products/<?php echo $prow['product_img3'] ?>" width="468" height="468" alt="product" />
                                    
							</div>
                                   
							<div class="product-item">
                                       
								<img class="product-single-image" src="img/products/<?php echo $prow['product_img4'] ?>" data-zoom-image="img/products/<?php echo $prow['product_img4'] ?>" width="468" height="468" alt="product" />
                                   
							</div>
							<div class="product-item">
                                       
								<img class="product-single-image" src="img/products/<?php echo $prow['product_img5'] ?>" data-zoom-image="img/products/<?php echo $prow['product_img5'] ?>" width="468" height="468" alt="product" />
                                   
							</div>
							
                               
						</div>
                               
						
                                
						<span class="prod-full-screen">
									
							<i class="icon-plus"></i>
								
						</span>
                           
					</div>

                           
					<div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="img/products/<?php echo $prow['product_image'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="img/products/<?php echo $prow['product_img1'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="img/products/<?php echo $prow['product_img2'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="img/products/<?php echo $prow['product_img3'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="img/products/<?php echo $prow['product_img4'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
						
						<div class="owl-dot">
                                    <img src="img/products/<?php echo $prow['product_img5'] ?>" width="110" height="110" alt="product-thumbnail" />
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?php echo $prow['product_name'] ?></h1>

                          

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                   
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                               

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                            </div>
                           

                            <hr class="short-divider">

                            <div class="price-box">
                              
                                <span class="new-price">
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
						?></span>
                            </div>
                            

                            <div class="product-desc">
                                <p>
                                    <?php echo $prow['short_desc'] ?>
                                </p>
                            </div>
                            

                            <ul class="single-info-list">

                                <li>
                                    SKU: <strong><?php echo $prow['sku_code'] ?></strong>
                                </li>

                                <li>
                                    PRODUCT BRAND:
						
									<strong>							
							
										<a href="#" class="product-category">								
								
											<?php	
									$brand_id = $prow['product_brand'] ;						
									$bsql = "SELECT * FROM `brands` WHERE `brand_id`='$brand_id'"; 							
									$bresult = $connect->query($bsql);				
									$brow = mysqli_fetch_array($bresult);						
									echo $brow['brand_name'];								
								?>							
							</a>						
						</strong>	
                                </li>

                                <li>
                                    Condition:
						<strong>
							<?php echo $prow['product_condition'] ?>
						</strong>
                                </li>
                            </ul>

                            <div class="product-action">
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text">
                                </div>
                                

                                <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to
									Cart</a>

                                <a href="cart.php" class="btn btn-gray view-cart d-none">View cart</a>
                            </div>
                            

                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-3">
                                <label class="sr-only">Share:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                    <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                                </div>
                              

                                
                            </div>
                           
                        </div>
                       
                    </div>
                   
                </div>
               

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                               <?php echo $prow['long_desc'] ?>
                            </div>
                            
                        </div>
                       


                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <h3 class="reviews-title">1 review for <?php echo $prow['product_name'] ?></h3>

                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
													<strong>Joe Doe</strong> – April 12, 2018
												</span>
                                            </div>

                                            <div class="comment-content">
                                                <p>Excellent.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="add-product-review">
                                    <h3 class="review-title">Add a review</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Your rating <span class="required">*</span></label>
                                            <span class="rating-stars">
												<a class="star-1" href="#">1</a>
												<a class="star-2" href="#">2</a>
												<a class="star-3" href="#">3</a>
												<a class="star-4" href="#">4</a>
												<a class="star-5" href="#">5</a>
											</span>

                                            <select name="rating" id="rating" required="" style="display: none;">
												<option value="">Rate…</option>
												<option value="5">Perfect</option>
												<option value="4">Good</option>
												<option value="3">Average</option>
												<option value="2">Not that bad</option>
												<option value="1">Very poor</option>
											</select>
                                        </div>

                                        <div class="form-group">
                                            <label>Your review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <!-- End .form-group -->


                                        <div class="row">
                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="save-name" />
                                                    <label class="custom-control-label mb-0" for="save-name">Save my
														name, email, and website in this browser for the next time I
														comment.</label>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                                <!-- End .add-product-review -->
                            </div>
                            <!-- End .product-reviews-content -->
                        </div>
                       
                    </div>
                   
                </div>
               

                <div class="products-section pt-0">
                    <h2 class="section-title">Related Products</h2>

                    <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                       <?php
	$category_id = $prow['product_category'];
		$csql = "SELECT * FROM `products` WHERE `product_category`='$category_id' "; 
								$cresult = $connect->query($csql);
									
								while($crow = mysqli_fetch_array($cresult)){
	?>
						
						<div class="product-default">
                            <figure>
                                <a href="product.php?product_id=<?php echo $crow['product_id'];?>">
                                    <img src="img/products/<?php echo $crow['product_image'] ?>" width="280" height="280" alt="product">
                                    <img src="img/products/<?php echo $crow['product_img1'] ?>" width="280" height="280" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                  
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-list">
                                    <a href="#" class="product-category"><?php 
								$category = $crow['product_category']; 
											$cgsql = "SELECT * FROM `category` WHERE `category_id`='$category'"; 
								$cgresult = $connect->query($cgsql);
								$cgrow = mysqli_fetch_array($cgresult);	
												
												
										echo $cgrow['category_name']		;
												
												?></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="product.php?product_id=<?php echo $crow['product_id'];?>"><?php echo $prow['product_name'] ?></a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    
                                </div>
                              
                                <div class="price-box">
                                  
                                    <span class="product-price"> <?php


					
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
                                <!-- End .price-box -->
                                <div class="product-action">
                                          
                                            <a href="#" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>Add to Cart</span></a>
                                            <a href="ajax/product-quick-view.php?product_id=<?php echo $crow['product_id'];?>" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                            </div>
                           
                        </div>
<?php
								}
									?>
                       
                    </div>
                   
                </div>
               

             

                
                
            </div>
           
        </main>

<?php
include('footer.php');
?>