<?php
include('header.php');
include('sidebar.php');

if (isset($_POST['del_order'])) {
    $order_id = $_POST['order_id'];
	$sql = "DELETE FROM `orders` WHERE `order_id`='$order_id'";

	$result = $connect->query($sql);

	if($result){ 
		echo'<br>'; 
		echo ' '; 
		echo "<script>alert('Order has been deleted from the record')</script>";
	} else {
		echo "<script>alert('Some error occurred. Try again')</script>";
	}
}
?>  
      
<div class="main-panel">        
	<div class="content-wrapper">          
		<div class="row">            
			<div class="col-sm-12">              
				<div class="home-tab">                
					<div class="d-sm-flex align-items-center justify-content-between border-bottom">                  
						<ul class="nav nav-tabs" role="tablist">                    
							<li class="nav-item">                      
								<a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
									Overview
								</a>                    
							</li>                                    
						</ul>                  
						<div>                                   
						</div>                
					</div>
                
					<div class="tab-content tab-content-basic">                  
						<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">   
							<div class="row">                      
								<div class="col-lg-12 d-flex flex-column">                                                
									<div class="row flex-grow">                          
										<div class="col-12 grid-margin stretch-card">                            
											<div class="card card-rounded">                              
												<div class="card-body">                                
													<div class="d-sm-flex justify-content-between align-items-start">                                  
														<div>                                    
															<h4 class="card-title card-title-dash">All Customer Orders</h4>                          
														</div>                                                          
													</div>
                                
													<div class="table-responsive  mt-1">                                  
														<table class="table select-table">                                    
															<thead>                                      
																<tr>                                        
																	<th> # </th>                                        
																	<th>Image</th>                                        
																	<th>Product Name</th>                                       
																	<th>Customer Name</th>                                        
																	<th>Status</th>										   
																	<th>Actions</th>										                                      
																</tr>                                    
															</thead>                                    
															<tbody>										
																<?php                    
																$n = 0;										
																$orderSql=mysqli_query($connect,"SELECT * FROM `orders`");										 
																while($orow = mysqli_fetch_array($orderSql)){
                      
																	$n++;
                      
																	$productId = $orow['product_id'];
                      
																	$productSql = "SELECT * FROM `products` WHERE product_id = '$productId'"; 
                      
																	$productResult = $connect->query($productSql);
                      
																	$prow = mysqli_fetch_array($productResult);

                     
																	$productCategory = $prow['product_category'];
                     
																	$categorySql = "SELECT * FROM `category` WHERE category_id = '$productCategory'"; 
                     
																	$categoryResult = $connect->query($categorySql);
                     
																	$crow = mysqli_fetch_array($categoryResult);

                     
																	$productBrand = $prow['product_brand'];
                     
																	$brandSql = "SELECT * FROM `brands` WHERE brand_id = '$productBrand'"; 
                      
																	$brandResult = $connect->query($brandSql);
                      
																	$brow = mysqli_fetch_array($brandResult);

                      
																	$customerId = $orow['cus_id'];
                      
																	$customerSql = "SELECT * FROM `customers` WHERE cus_id = '$customerId'"; 
                      
																	$customerResult = $connect->query($customerSql);
                      
																	$cusrow = mysqli_fetch_array($customerResult);

										
																?>								
										
                                      
																
																<tr>
                                        
																	<td>
                                          
																		<?php echo $n; ?>
                                       
																	</td>
                                        
																	<td>
                                          
																		<div class="d-flex ">
                                            
																			<?php 
                                            
																	if (!$prow['product_image']) {
                                              
																			?>
                                              
																			<img src="uploads/dp.png" alt="">
                                              
																			<?php
                                           
																	} else {
                                             
																			?>
                                             
																			<img src="uploads/products/<?php echo $prow['product_image'];?>" alt="">
                                             
																			<?php
                                            
																	}
																			?>
                                            
																			
                                            
                                          
																		</div>
                                        
																	</td>
                                        
																	<td>
                                          
																		<h6><?php echo $prow['product_name']; ?></h6>
                                         
                                        
																	</td>
                                        
																	<td>
                                         
																		<?php 
                                           
																	echo $cusrow['first_name']; 
                                           
																	echo " ";
                                           
																	echo $cusrow['last_name'];
                                        
																		?>
                                        
																	</td>
                                        
																	<td>
																		
																		
																		<?php 
											$order_status =$orow['order_status'];
											if($order_status == 'pending' ){  
											
												?>
												
												
											<div class="badge badge-opacity-warning">Pending</div>
											<?php
											
											
											} elseif ($order_status == 'Completed' ){
											
											?>
											
											<div class="badge badge-opacity-success">Completed</div>
											
											
											
											<?php
												} elseif ($order_status == 'Cancelled' ){
												
												?>
																		
																		<div class="badge badge-opacity-danger">
																			Cancelled
																		</div>
																	
																	<?php
																	}
																	?>
																	
																	
																	</td>
										  
										   
																	<td>  
										  
										  
																		
																		<a href="order-detail.php?order_id=<?php echo $orow['order_id'];?>">
																			<button class="btn btn-info btn-lg text-white mb-0 me-0" name="del_prod">
																				<i class="mdi mdi-eye"></i>
																			</button>
																		</a>
											   
																		<form method="post" action="#">
																			<input type="hidden" name="order_id" value="<?php echo $orow['order_id'];?>">
																		<button class="btn btn-danger btn-lg text-white mb-0 me-0" type="submit" name="del_order">
																			<i class="mdi mdi-delete"></i>
																		</button>
																			</form>
										  
										  
										  
										  
										  
										  </td>
										  
										  
                                      </tr></a>
										
										<?php
                                    }		
                                ?>									
										
										
                                 
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
						  
                        
                      </div>
                      
                    </div>
					  
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   <?php
		  include('footer.php');
		  ?>