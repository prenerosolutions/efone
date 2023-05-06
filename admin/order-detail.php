<?php
//include('config.php');
$order_id = $_GET['order_id'];

include('header.php');
include('sidebar.php');

if (isset($_POST['update_order'])) {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];
		$date = date("Y-m-d h:i:s");



$sql = "UPDATE `orders` SET  `order_status`='$status', 
							`order_date`='$date' WHERE `order_id`='$order_id'";



$result = $connect->query($sql);

if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('Order has been Updated from the List')</script>";
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
															<h4 class="card-title card-title-dash">Order Details</h4>                                 
														</div>                                       
													</div>                                
													<div class="table-responsive  mt-1">                                  
														<table class="table select-table">                                    
															<thead>                                      
																<tr>                                        
																	<th colspan="4"> Customer Details </th>                         
																</tr>                                    
															</thead>
								  								<?php
															
																$orderSql=mysqli_query($connect,"SELECT * FROM `orders` WHERE order_id='$order_id'");
																$orow = mysqli_fetch_array($orderSql);
                      														                      
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
                                    
															<tbody>	
																<tr>                                        
																	<td>
                                          								<strong>Customer Name:</strong>		                                        
																	</td>                                        
																	<td>                                          							
																		<?php 
																		echo $cusrow['first_name'];											
																		echo " ";							
																		echo $cusrow['last_name']; 
																		?>                                        
																	</td>							
																	<td><strong>Customer Email:</strong></td>
																	<td> <?php echo $cusrow['email']; ?></td>                                     
																</tr>
																	
																<tr>	
																	<td><strong>Contact Number:</strong></td>
																	<td> <?php echo $cusrow['phone']; ?></td> 
																	<td><strong>Company:</strong></td>
																	<td> <?php echo $cusrow['company']; ?></td>  
																	                                     
																</tr>
																<tr>	
																	<td>  <strong>Customer Address:</strong>	</td>
																	<td colspan="3">  	<?php 
																		echo $cusrow['street_address'];											
																		echo " ";							
																		echo $cusrow['town'];
																		echo " ";							
																		echo $cusrow['country'];
																		?>   	</td>                                     
																</tr>
															</tbody>                                  
														</table>
														
														
														<table class="table select-table">
                                    
															<thead>
                                      
																<tr>
                                        
																	<th colspan="4"> Shipping Details </th>
                                        
																	
                                      
																</tr>
                                    
															</thead>								  							
                                    
															<?php
															$shipping_id = $orow['shipping_id'];   
															
															//echo $shipping_id;
															//die;
																	$shippingSql = "SELECT * FROM `shipping_address` WHERE `shipping_id`='$shipping_id'";                       
																	$shippingResult = $connect->query($shippingSql);                      
																	$shiprow = mysqli_fetch_array($shippingResult);
															
															
															
															?>
															<tbody>
																<tr>                                       
																	<td><strong>Street Address</strong></td>                                        
																	<td> <?php echo $shiprow['street_address']; ?></td>
																	<td><strong>City</strong></td>                                        
																	<td> <?php echo $shiprow['city']; ?></td>
																</tr>
																<tr>                                       
																	<td><strong>State</strong></td>                                        
																	<td> <?php echo $shiprow['state']; ?></td>
																	<td><strong>Country/ Postal Code</strong></td>                                        
																	<td> 
																		<?php 
																		echo $shiprow['country'];
																		echo " ";							
																		echo $cusrow['postal_code'];
																		?>
																	</td>
																</tr>
																
																
																	
                                    																										
															</tbody>
                                  
														</table>
														
														
														<table class="table select-table">
                                    
															<thead>
                                      
																<tr>                                        
																	<th colspan="4"> Orders Details </th>                         
																</tr>
																<tr>
                                        
																	<th> Product Name </th>
																	<th> Unit Price </th>
																	<th> Quantity </th>
																	<th> Total Amount </th>
                                        
																	
                                      
																</tr>
                                    
															</thead>								  							
                                    
															
															<tbody>
																<tr>                                       
																	<td><?php echo $orow['product_name']; ?></td>                                        
																	<td><?php echo $orow['product_price']; ?> </td>
																	<td><?php echo $orow['quantity']; ?></td>                                        
																	<td> <?php echo $orow['total_amount']; ?></td>
																</tr>
																
																
																
																	
                                    																										
															</tbody>
                                  
														</table>
                                
														<form method="post" action="#">
														<div class="form-group">
															<label for="Order Status">Order Status:</label>															
															<div class="col-md-5">															
																<input type="text" class="form-control" name="order_id" value="<?php echo $orow['order_id']  ?>"	>													
															</div>	
															
															</div>
															<div class="form-group">
															<label for="Order Status">Order Status:</label>															
															<div class="col-md-5">															
																<select class="form-control" name="status">																	<option value="<?php echo $orow['order_status']  ?>" selected><?php echo $orow['order_status']  ?> </option>
																	<option value="" disabled> Change Order Status </option>								
																	<option value="Pending"> Pending </option>
																	<option value="Cancelled"> Cancelled </option>												
																	<option value="Completed"> Completed </option>
																</select>															
															</div>	
															
															</div>
														
														 <button type="submit" class="btn btn-info" name="update_order"><i class="mdi mdi-file-plus"></i> Update Order</button>
														</form>
														
														
														
														
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