<?php
include('header.php');
$brand_id = $_GET['brand'];
?>
<div class="main_content_iner ">
	<div class="container-fluid p-0 sm_padding_15px">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Add New Brand</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<?php
						$query=mysqli_query($connect,"SELECT * FROM `brands` WHERE `brand_id`='$brand_id'");
										$brow = mysqli_fetch_array($query);
						?>
						
						<form method="post" action="update-brand.php" enctype="multipart/form-data">
							<div class="mb-3">
								<label class="form-label" for="brand name">Brand Name</label>
								<input type="text" class="form-control" value="<?php echo $brand_id ?>" name="brand_id">
							</div>
							<div class="mb-3">
								<label class="form-label" for="brand name">Brand Name</label>
								<input type="text" class="form-control" value="<?php echo $brow['brand_name'] ?>" name="brand_name">
							</div>
						
							<div class=" mb-3">
								<label class="form-label" for="description">Brand Description:</label>
								<textarea class="form-control" maxlength="325" rows="3" name="brand_desc"><?php echo $brow['brand_desc'] ?></textarea>
							</div>
							
							<div>
							<img src="../img/brands/<?php echo $brow['brand_img']; ?>" style="width: 120px;">
							
							</div>
																					
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="brand_img">
								<label class="input-group-text" for="Brand image">Brand Image</label>
							</div>
							
							<button type="submit" class="btn btn-primary" name="add-brand">Add Brand</button>

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