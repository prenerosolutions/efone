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
								<h3 class="m-0">All Sub Categories</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Sub Category List</h4>
								<div class="box_right d-flex lms_block">																	
									<div class="add_button ms-2">
										<a href="add-sub-category.php" class="btn_1">Add New</a>
									</div>
								</div>
							</div>
							<div class="QA_table mb_30">
								<table class="table lms_table_active ">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Thumbnail</th>
											<th scope="col">Sub Category Name</th>											
											<th scope="col">Category Name</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php										
										$n=0;															
										$query=mysqli_query($connect,"SELECT * FROM `sub_categories` ORDER BY `sub_categories`.`sub_ctg_id` DESC");										
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
												<img src="../img/sub-categories/<?php echo $crow['sub_ctg_img']; ?>" alt="<?php echo $crow['sub_ctg_img']; ?>" style="width: 60px; border-radius: 15px;">
											</td>

											
											<td>
												<?php echo $crow['sub_ctg_name']; ?>
											
											</td>
											
											<td>
												<?php 
											$category_id = $crow['category_id']; 
											$squery=mysqli_query($connect,"SELECT * FROM `category` WHERE `category_id`='$category_id'");										
										
											$srow = mysqli_fetch_array($squery);
											
											echo $srow['category_name'];
												
												
												
												
												?>
											 
											</td>

											

											<td>
												<a href="edit-sub-category.php?sub_id=<?php echo $crow['sub_ctg_id']  ?>">
												<button class="btn btn-info" style="float: left; color: white; margin-right: 5px;"><i class="ti-pencil-alt"></i></button></a>
												<a href="del-sub-category.php?sub_id=<?php echo $crow['sub_ctg_id']  ?>">
												<button class="btn btn-danger" style="float: left; color: white;"><i class="ti-trash"></i></button>
													</a>							
											
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