<?php
include('header.php');

$product_id = $_GET['product_id'];

?>

<div class="main_content_iner ">
	<div class="container-fluid p-0 sm_padding_15px">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Edit Product</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<?php
						$query=mysqli_query($connect,"SELECT * FROM `products` WHERE `product_id`='$product_id'");
										$prow = mysqli_fetch_array($query);
						
						?>
						<form method="post" enctype="multipart/form-data" action="update-product.php">
							<div class="mb-3">
								<label class="form-label" for="Product Name">Product ID:</label>
								<input type="text" class="form-control" value="<?php echo $prow['product_id']; ?>" name="prod_id">
							</div>
							<div class="mb-3">
								<label class="form-label" for="Product Name">Product Name:</label>
								<input type="text" class="form-control" value="<?php echo $prow['product_name']; ?>" name="prod_name">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="SKU Code">SKU Code:</label>
								<input type="text" class="form-control" value="<?php echo $prow['sku_code']; ?>" name="sku">
							</div>
							
							<div class=" mb-3">
								<label class="form-label" for="Product Brand">Product Brand:</label>								
								<select class="form-control" name="prod_brand">
									<?php
									$brand_id = $prow['product_brand'];
									$bnquery=mysqli_query($connect,"SELECT * FROM `brands` WHERE `brand_id`='$brand_id'");
										$bnrow = mysqli_fetch_array($bnquery);
									
									?>
									
									<option value="<?php echo $bnrow['brand_id']; ?>" selected><?php echo $bnrow['brand_name']; ?></option>
									
									
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
								<select name="category" id="category_id" class="form-control" onchange="checkit(this)">
									<?php
									$ctg_id = $prow['product_category'];
									$ctquery=mysqli_query($connect,"SELECT * FROM `category` WHERE `category_id`='$ctg_id'");
										$ctrow = mysqli_fetch_array($ctquery);
									
									?>
									
									<option value="<?php echo $ctrow['category_id']; ?>" selected><?php echo $ctrow['category_name']; ?></option>
									
									
									
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
							
							<script type="text/javascript">
                    // $(document).ready(function() { //wait until body loads

                    function checkit(that) {
                      if (that.value != "") {
                        document.getElementById("ifYes").style.display = "block";

                        if(window.XMLHttpRequest) {
                          xmlhttp = new XMLHttpRequest();
                        } else {
                          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                          if(this.readyState == 4 && this.status == 200) {
                            document.getElementById("sub_category_id").innerHTML = this.responseText;
                          }
                        }
                        xmlhttp.open("GET","product_helper.php?value="+that.value, true);
                        xmlhttp.send();
                        
                      } else {
                        document.getElementById("ifYes").style.display = "none";
                        document.cookie = "myJavascriptVar = 0";
                      }
                    }

                    function checkSubit(that){
                       if(window.XMLHttpRequest) {
                          xmlhttp = new XMLHttpRequest();
                        } else {
                          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                         
                          if(this.readyState == 4 && this.status == 200) {
                            document.getElementById("").innerHTML = this.responseText;
                          }
                        }
                        xmlhttp.open("GET","sub_catg_helper.php?value="+that.value, true);
                        xmlhttp.send();
                        
                      } 
                    

                   
                    </script>
							
							
							<div class=" mb-3" id="ifYes"  style="display: none;">
								<label class="form-label" for="Sub Category">Product Sub Category:</label>
								<select name="sub_ctg_id" id="sub_category_id" class="form-control" onchange="checkSubit(this)">
									<option selected><?php echo $prow['sub_category']; ?></option>									
																
								</select>							
							
							</div>
							
							
							
							<div class=" mb-3">
								<label class="form-label" for="Short Description">Short Description:</label>
								<textarea class="form-control" maxlength="325" rows="3" name="short_desc"><?php echo $prow['short_desc']; ?></textarea>
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Quantity">Quantity:</label>
								<input type="number" class="form-control" name="qty" value="<?php echo $prow['product_qty']; ?>">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="General Price">General Price:</label>
								<input type="number" class="form-control" value="<?php echo $prow['product_price']; ?>" name="g_price">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Shop-Keeper">Shop-Keeper Price:</label>
								<input type="number" class="form-control" value="<?php echo $prow['shopkeeper_price']; ?>" name="shop_price">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Condition">Condition:</label>
								<select name="condition"  class="form-control">
									<option value="<?php echo $prow['product_condition']; ?>" selected><?php echo $prow['product_condition']; ?></option>
									<option>New</option>
									<option>Used</option>
															
								</select>							
							</div>
							<div>
							<img src="../img/products/<?php echo $prow['product_image']; ?>" style="width: 120px;">
							
							</div>
							
							<div class="input-group mb-3">
								
								<input type="file" class="form-control" name="prod_img">
								<label class="input-group-text" for="Product Image">Product Image</label>
							</div>
							
							<div>
							<img src="../img/products/<?php echo $prow['product_img1']; ?>" style="width: 120px;">
							
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img1">
								<label class="input-group-text" for="Product Img1">Product Img1</label>
							</div>
							
							<div>
							<img src="../img/products/<?php echo $prow['product_img2']; ?>" style="width: 120px;">
							
							</div>
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img2">
								<label class="input-group-text" for="Product Img2">Product Img2</label>
							</div>
							<div>
							<img src="../img/products/<?php echo $prow['product_img3']; ?>" style="width: 120px;">
							
							</div>
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img3">
								<label class="input-group-text" for="Product Img3">Product Img3</label>
							</div>
							<div>
							<img src="../img/products/<?php echo $prow['product_img4']; ?>" style="width: 120px;">
							
							</div>
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img4">
								<label class="input-group-text" for="Product Img4">Product Img4</label>
							</div>
							<div>
							<img src="../img/products/<?php echo $prow['product_img5']; ?>" style="width: 120px;">
							
							</div>
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="img5">
								<label class="input-group-text" for="Product Img5">Product Img5</label>
							</div>
							
							<div class=" mb-3">
								<label class="form-label" for="Long Description">Long Description:</label>
								<textarea class="form-control" maxlength="325" rows="7" name="long_desc"><?php echo $prow['long_desc']; ?></textarea>
							</div>

							<button type="submit" class="btn btn-primary" name="update-product">Update Product</button>
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