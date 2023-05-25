<?php
include('header.php');
?>
<div class="main_content_iner ">
	<div class="container-fluid p-0">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Pending Orders</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Pending Orders List</h4>								
							</div>
							<div class="QA_table mb_30">
								<table class="table lms_table_active ">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Image</th>
											<th scope="col">Customer Name</th>
											<th scope="col">Order Amount</th>											
											<th scope="col">Status</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php										
										$n=0;															
										$query=mysqli_query($connect,"SELECT * FROM `orders` WHERE `order_status`='cancelled'");
										while($orow = mysqli_fetch_array($query)){
											$n++;											
											$cus_id = $orow['customer_id'];
											$cquery=mysqli_query($connect,"SELECT * FROM `customers` WHERE `cus_id`='$cus_id'");	
                      						$crow = mysqli_fetch_array($cquery);											
											?>
										<tr>
											<th scope="row"> 
												<a href="#" class="question_content">  
													<?php echo $n; ?>
												</a>
											</th>											
											<td>
												<img src="../img/customers/<?php echo $crow['customer_pic']; ?>" alt="<?php echo $crow['customer_pic']; ?>" style="height: 100px; border-radius: 15px;">
											</td>
											<td>
												<?php echo $crow['first_name']; ?> 
												<?php echo $crow['last_name']; ?>											
											</td>											
											<td>
												<?php echo $orow['order_total']; ?>											 
											</td>
											<td>
												<?php echo $orow['order_status']; ?>											 
											</td>											
											<td>
												<button class="btn btn-info" style="float: left; color: white; margin-right: 5px;"><i class="ti-pencil-alt"></i></button>
												
												<button class="btn btn-danger" style="float: left; color: white;"><i class="ti-trash"></i></button>
											</td>
										</tr>
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
			<div class="col-12">
			</div>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>