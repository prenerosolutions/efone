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
								<h3 class="m-0">All Product Brands</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Brands List</h4>
								<div class="box_right d-flex lms_block">									
									<div class="add_button ms-2">
										<a href="add-brand.php" class="btn_1">Add New</a>
									</div>
								</div>
							</div>

							<div class="QA_table mb_30">
								<table class="table lms_table_active ">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Thumbnail</th>
											<th scope="col">Category Name</th>											
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php										
										$n=0;															
										$query=mysqli_query($connect,"SELECT * FROM `brands` ORDER BY `brands`.`brand_id` DESC");										
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
												<img src="../img/brands/<?php echo $crow['brand_img']; ?>" alt="<?php echo $crow['brand_img']; ?>" style="width: 100px; border-radius: 15px;">
											</td>											
											<td>
												<?php echo $crow['brand_name']; ?>											 
												<p>
													<?php echo $crow['brand_desc']; ?>
												</p>											
											</td>																						
											<td>	
												<a href="edit-brand.php?brand=<?php echo $crow['brand_id'];  ?>">
												<button class="btn btn-info" style="float: left; color: white; margin-right: 10px;"><i class="ti-pencil-alt"></i></button>					
													</a>
												<a href="del-brand.php?brand=<?php echo $crow['brand_id'];  ?>">
												<button class="btn btn-danger" style="float: left; color: white;"><i class="ti-trash"></i></button>							</a>																								
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