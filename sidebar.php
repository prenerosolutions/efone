<div class="sidebar-overlay"></div>                    
<aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">                        
	<div class="sidebar-wrapper">                            
		<div class="widget">                                
			<h3 class="widget-title">                                    
				<a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">
					Categories
				</a>                                
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
						<?php							
						$sql = "SELECT * FROM `products` WHERE `sub_category`= '$sub_id' ORDER BY  products.product_id DESC "; 								
						$result = $connect->query($sql);																	
						while($prow = mysqli_fetch_array($result)){							
						?>
                                            
						<div class="product-default left-details product-widget">
                                               
							<figure>
                                                   
								<a href="product.html">
                                                        
									<img src="assets/images/products/small/product-4.jpg" width="75" height="75" alt="product" />
                                                        
									<img src="assets/images/products/small/product-4-2.jpg" width="75" height="75" alt="product" />
                                                    
								</a>
                                                
							</figure>
                                                
							<div class="product-details">
                                                   
								<h3 class="product-title"> 
									<a href="product.html">
										Blue Backpack for
															the Young - S
									</a> 
								</h3>
                                                    
								<div class="ratings-container">
                                                        
									<div class="product-ratings">
                                                            
										<span class="ratings" style="width:100%"></span>
                                                            
										
                                                            
										<span class="tooltiptext tooltip-top"></span>
                                                        
									</div>
                                                       
									
                                                    
								</div>
                                                    
								
                                                    
								<div class="price-box">
                                                        
									<span class="product-price">$49.00</span>
                                                    
								</div>
                                                   
								
                                                
							</div>
                                                
							
                                            
						</div>
                                            
                                        
						<?php
							
						}
									
						?>
                                        
					</div>
                                      

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
                                        
					
                                    </div>
                                   
				
                                </div>
                               
			
                            </div>
                           
							
                        </div>
                        
                    </aside>