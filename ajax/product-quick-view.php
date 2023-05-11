<?php
include('../config.php');
$product_id= $_GET['product_id'];
?>
<div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">	
	<div class="row">		
		<?php						
		$product_id = $_GET['product_id']; 				
		$sql = "select * from products where product_id = '$product_id'"; 							
		$result = $connect->query($sql);				
		$prow = mysqli_fetch_array($result);			
		?>		
		<div class="col-md-6 product-single-gallery mb-md-0">			
			<div class="product-slider-container">				
				<div class="label-group">					
					<div class="product-label label-hot">HOT</div>														
					<div class="product-label label-sale">
						-16%
					</div>				
				</div>				
				<div class="product-single-carousel owl-carousel owl-theme show-nav-hover">					
					<div class="product-item">						
						<img class="product-single-image" src="admin/uploads/products/<?php echo $prow['product_image'] ?>"
							data-zoom-image="admin/uploads/products/<?php echo $prow['product_image'] ?>" />
					</div>
					<div class="product-item">
						<img class="product-single-image" src="admin/uploads/products/<?php echo $prow['product_img1'] ?>"
							data-zoom-image="admin/uploads/products/<?php echo $prow['product_img1'] ?>" />
					</div>
					<div class="product-item">
						<img class="product-single-image" src="admin/uploads/products/<?php echo $prow['product_img2'] ?>"
							data-zoom-image="admin/uploads/products/<?php echo $prow['product_img2'] ?>" />
					</div>
					<div class="product-item">
						<img class="product-single-image" src="admin/uploads/products/<?php echo $prow['product_img3'] ?>"
							data-zoom-image="admin/uploads/products/<?php echo $prow['product_img3'] ?>" />
					</div>
					<div class="product-item">
						<img class="product-single-image" src="admin/uploads/products/<?php echo $prow['product_img4'] ?>"
							data-zoom-image="admin/uploads/products/<?php echo $prow['product_img4'] ?>" />
					</div>
					<div class="product-item">
						<img class="product-single-image" src="admin/uploads/products/<?php echo $prow['product_img5'] ?>"
							data-zoom-image="admin/uploads/products/<?php echo $prow['product_img5'] ?>" />
					</div>
				</div>							
			</div>
			
			<div class="prod-thumbnail owl-dots">
				<div class="owl-dot">
					<img src="admin/uploads/products/<?php echo $prow['product_image'] ?>" />
				</div>
				<div class="owl-dot">
					<img src="admin/uploads/products/<?php echo $prow['product_img1'] ?>" />
				</div>
				<div class="owl-dot">
					<img src="admin/uploads/products/<?php echo $prow['product_img2'] ?>" />
				</div>
				<div class="owl-dot">
					<img src="admin/uploads/products/<?php echo $prow['product_img3'] ?>" />
				</div>
				<div class="owl-dot">
					<img src="admin/uploads/products/<?php echo $prow['product_img4'] ?>" />
				</div>
				<div class="owl-dot">
					<img src="admin/uploads/products/<?php echo $prow['product_img5'] ?>" />
				</div>
			</div>
		</div>

		<div class="col-md-6">			
			<div class="product-single-details mb-0 ml-md-4">				
				<h1 class="product-title">
					<?php echo $prow['product_name'] ?>
				</h1>				
				<div class="ratings-container">					
					<div class="product-ratings">						
						<span class="ratings" style="width:60%"></span>						
					</div>										
					<a href="#" class="rating-link">( 6 Reviews )</a>				
				</div>								
				<hr class="short-divider">				
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
								
				<div class="product-desc">					
					<p>						
						<?php echo $prow['short_desc'] ?>					
					</p>				
				</div>
								
				<ul class="single-info-list">															
					<li>
						SKU:
						<strong>
							<?php echo $prow['sku_code'] ?>
						</strong>
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
						<input class="horizontal-quantity form-control" type="text" />
					</div>
										
					<a href="javascript:;" name="add_to_cart" id="<?php echo $prow["product_id"] ?>" class="btn btn-dark add-cart mr-2" title="Add to Cart">
						Add to Cart
					</a>					
					<a href="cart.php" class="btn view-cart d-none">
						View cart
					</a>				
				</div>
				
				<hr class="divider mb-0 mt-0">
				
				<div class="product-single-share mb-0">					
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
		<button title="Close (Esc)" type="button" class="mfp-close">
			×
		</button>
	</div>
</div>