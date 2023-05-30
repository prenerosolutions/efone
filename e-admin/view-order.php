<?php
include('header.php');
$order_id = $_GET['order_id'];

								
$query=mysqli_query($connect,"SELECT * FROM `orders` WHERE `order_id`='$order_id'");										
										
								
$orow = mysqli_fetch_array($query);
											
								
?>
<div class="main_content_iner ">
	<div class="container-fluid p-0">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Order Details</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Order Details</h4>
<div class="box_right d-flex lms_block">									
									<div class="add_button ms-2">
										Order Date: <?php echo $orow['order_date'];  ?>
									</div>
								</div>
							</div>
							<div class="QA_table mb_30">
								
								<table class="table ">
									<tbody>
										<tr>
											<td><strong>Cutomer Name</strong></td>
											<td>
												
												<?php 
												$cus_id = $orow['customer_id'];
												$cquery=mysqli_query($connect,"SELECT * FROM `customers` WHERE `cus_id`='$cus_id'");										
										
								

												$crow = mysqli_fetch_array($cquery);
												
												
												echo $crow['first_name'].' '.$crow['last_name'] ;
												
												 ?>
											
											</td>
											<td><strong>Order Amount</strong></td>
											<td><?php echo $orow['order_total'];  ?></td>
											<td><strong>Order Status</strong></td>
											<td><?php echo $orow['order_status'];  ?></td>											
											
										</tr>
									
									
										
										<tr>
											<td > 
												Shipping Address:
											</td>											
											<td colspan="5">
												<?php
												$ship_id = $orow['shipping_id'];
												$squery=mysqli_query($connect,"SELECT * FROM `shipping_address` WHERE `shipping_id`='$ship_id'");										
										
								

												$srow = mysqli_fetch_array($squery);
												
												echo $srow['street_address'].' '.$srow['city'].' '.$srow['state'].' '.$srow['country'].' '.$srow['postal_code'];
												
												?>
											</td>
											

										</tr>
										
									</tbody>
								</table>
								
								
								<h4>Product Details:</h4>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Product</th>
											<th scope="col">Price</th>											
											<th scope="col">Quantity</th>
											<th scope="col">Total</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$n=0;															
										$iquery=mysqli_query($connect,"SELECT * FROM `order_items` WHERE `order_id`='$order_id'");
										while($irow = mysqli_fetch_array($iquery)){
											$n++; 
										?>
										
										<tr>
											<th scope="row"> 
												<a href="#" class="question_content">  
													<?php echo $n; ?>
												</a>
											</th>											
											<td>
												<?php echo $irow['product_id'];?>
											</td>											
											<td>
												<?php echo $irow['price'];?>										
											</td>																						
											<td>
												<?php echo $irow['quantity'];?>
																					
											</td>
											<td>
												<?php echo $irow['total'];?>									
											</td>
										</tr>										
										<?php										
										}											
										?>
									</tbody>
								</table>
								
								<table class="table">
								<tr>
									<td>Order Note:</td>
									<td><?php   echo $orow['order_note']; ?></td>
									<td>Change Order Status:</td>
									<td>
										<form method="post" action="update-status.php">
											<input type="hidden" value="<?php echo $order_id;  ?>" class="form-control" name="order_id">
										<select name="status" class="form-control">
											<option>Select Status</option>
										<option>Completed</option>
										<option>Cancelled</option>
										
										
										
										
										
										</select></td>
									</tr>
									<tr>
									<td></td>
									<td></td>
									<td></td>
									<td><button class="btn btn-info" type="submit">Change Status</button></form></td>
									</tr>
								
								</table>
								
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