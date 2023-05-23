<?php
include('header.php');
?>

<div class="main_content_iner ">
	<div class="container-fluid p-0 sm_padding_15px">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Add New Banner</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<form action="banner-process.php" enctype="multipart/form-data" method="post">
							<div class=" mb-3">
								<label class="form-label" for="inputState">Category Name</label>
								<select id="inputState" class="form-control" name="ctg_id">									
									<option selected="" >Choose Category</option>									
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
																																		
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="banner1">
								<label class="input-group-text" for="Banner1">Banner1</label>
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="Banner2">
								<label class="input-group-text" for="Banner2">Banner2</label>
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="Banner3">
								<label class="input-group-text" for="Banner3">Banner3</label>
							</div>																					
							<button type="submit" class="btn btn-primary" name="add-banner">Add Banner</button>
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