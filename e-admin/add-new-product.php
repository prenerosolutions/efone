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
								<h3 class="m-0">Add New Product</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<form method="post" enctype="multipart/form-data" action="product-process.php">
							<div class="mb-3">
								<label class="form-label" for="Product Name">Product Name:</label>
								<input type="text" class="form-control" placeholder="Enter Product Name" name="prod_name">
							</div>
							
							<div class=" mb-3">
								<label class="form-label" for="Product Brand">Product Brand:</label>								
								<select class="form-control" name="prod_brand">
									<option selected="">Choose Brands</option>
									<?php								
									$bquery=mysqli_query($connect,"SELECT * FROM `brands`");
									while($brow = mysqli_fetch_array($bquery)){								
									?>																		
									<option value="<?php echo $brow['brand_id']; ?>">
										<?php echo $brow['brand_name']; ?>
									</option>									
									<?php										
									}											
									?>								
								</select>							
							</div>
							
							<div class=" mb-3">
								<label class="form-label" for="Product Category">Product Category:</label>
								<select class="form-control" name="prod_ctg">
									<option selected="">Choose Category</option>
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
							
							<div class=" mb-3">
								<label class="form-label" for="Sub Category">Product Sub Category:</label>
								<select class="form-control" name="prod_sub">
									<option selected="">Choose Sub Category</option>									
									<?php								
									$squery=mysqli_query($connect,"SELECT * FROM `sub_categories`");
									while($srow = mysqli_fetch_array($squery)){								
									?>																											
									<option value="<?php echo $srow['sub_ctg_id']; ?>">
										<?php echo $srow['sub_ctg_name']; ?>
									</option>									
									<?php										
									}											
									?>								
								</select>							
							</div>
							
							
							
							<div class=" mb-3">
								<label class="form-label" for="Short Description">Short Description:</label>
								<textarea class="form-control" maxlength="325" rows="3" name="short_desc" placeholder=""></textarea>
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Quantity">Quantity:</label>
								<input type="text" class="form-control" name="qty" placeholder="Enter Quantity">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="General Price">General Price:</label>
								<input type="text" class="form-control" placeholder="Enter General Price" name="g_price">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Shop-Keeper">Shop-Keeper Price:</label>
								<input type="text" class="form-control" placeholder="Enter Shop-keeper Price" name="shop_price">
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="prod_img">
								<label class="input-group-text" for="Product Image">Product Image</label>
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img1">
								<label class="input-group-text" for="Product Img1">Product Img1</label>
							</div>
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img2">
								<label class="input-group-text" for="Product Img2">Product Img2</label>
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img3">
								<label class="input-group-text" for="Product Img3">Product Img3</label>
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img4">
								<label class="input-group-text" for="Product Img4">Product Img4</label>
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img5">
								<label class="input-group-text" for="Product Img5">Product Img5</label>
							</div>
							
							<div class=" mb-3">
								<label class="form-label" for="Long Description">Long Description:</label>
								<textarea class="form-control" maxlength="325" rows="7" name="long_desc" placeholder=""></textarea>
							</div>

							<button type="submit" class="btn btn-primary" name="add-product">Add Product</button>
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