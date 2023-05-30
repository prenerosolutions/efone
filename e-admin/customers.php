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
								<h3 class="m-0">All Customers</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Customers List</h4>								
							</div>
							<div class="QA_table mb_30">
								<table class="table lms_table_active ">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Thumbnail</th>
											<th scope="col">Customer Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">User Type</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php										
										$n=0;															
										$query=mysqli_query($connect,"SELECT * FROM `customers`");										
										while($crow = mysqli_fetch_array($query)){
											$n++;                      											
											?>
										<tr>
											<th scope="row"> 
												<a href="#" class="question_content">  
													<?php echo $n; ?>
												</a>
											</th>											
											<td>
												<img src="../img/customers/<?php echo $crow['customer_pic']; ?>" alt="<?php echo $crow['customer_pic']; ?>" style="width: 100px; border-radius: 15px;">
											</td>
											<td>
												<?php echo $crow['first_name']; ?>
												<?php echo $crow['last_name']; ?>											
											</td>
											<td>
												<?php echo $crow['email']; ?>											
											</td>
											<td>
												<?php echo $crow['phone']; ?>											
											</td>
											<td>
												<?php echo $crow['user_role']; ?>											
											</td>											
											<td>																								
												<a href="del-customer.php?customer_id=<?php echo $crow['cus_id'] ?>"><button class="btn btn-danger" style="float: left; color: white;"><i class="ti-trash"></i></button>	</a>
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