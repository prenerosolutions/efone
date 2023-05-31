<?php
include('header.php');
$sub_id = $_GET['sub_id'];
?>
<div class="main_content_iner ">
	<div class="container-fluid p-0 sm_padding_15px">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Edit Sub Category</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<?php
						$query=mysqli_query($connect,"SELECT * FROM `sub_categories` WHERE `sub_ctg_id`='$sub_id'");
										$srow = mysqli_fetch_array($query);
						?>
						<form method="post" action="update-sub-category.php" enctype="multipart/form-data">
							<div class="mb-3">								
								
								<input type="hidden" class="form-control" value="<?php echo $sub_id; ?>" name="sub_id">
							</div>
							<div class=" mb-3">
								<label class="form-label">Product Category</label>
								<select class="form-control" name="prod_ctg">
									<?php
									$ctg_id = $srow['category_id'];
										$ctquery=mysqli_query($connect,"SELECT * FROM `category` WHERE `category_id`='$ctg_id'");
									$ctrow = mysqli_fetch_array($ctquery)	;
									?>
									<option value="<?php $ctrow['category_id'];?>" selected><?php
														
										echo $ctrow['category_name']
										?></option>									
									<?php								
									$cquery=mysqli_query($connect,"SELECT * FROM `category`");
									while($crow = mysqli_fetch_array($cquery)){								
									?>																		
									<option value="<?php echo $crow['category_id']; ?>">
										<?php echo $crow['category_name']; ?>
									</option>									
									<?php										
									}									
									?>								
								</select>							
							</div>														
							<div class="mb-3">								
								<label class="form-label" for="Sub Category name">Sub Category Name</label>
								<input type="text" class="form-control" value="<?php echo $srow['sub_ctg_name']?>" name="sub_name">
							</div>
							
							<div>
							<img src="../img/sub-categories/<?php echo $srow['sub_ctg_img']; ?>" style="width: 120px;">
							
							</div>
																																	
							<div class="input-group mb-3">							
								<input type="file" class="form-control" name="subctg_img">
								<label class="input-group-text" for="category image">Sub Category Image</label>
							</div>
							
							<button type="submit" class="btn btn-primary" name="update-subctg">Update Sub Category</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>