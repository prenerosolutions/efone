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
								<h3 class="m-0">All Products</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Product Lists</h4>
								<div class="box_right d-flex lms_block">									
									<div class="add_button ms-2">
										<a href="add-new-product.php"  class="btn_1">Add New</a>
									</div>
								</div>
							</div>

							<div class="QA_table mb_30">
								<table class="table lms_table_active ">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Thumbnail</th>
											<th scope="col" style="width: 35%;">Product Name</th>
											<th scope="col">Category/ Brand</th>
											<th scope="col">Price</th>
											<th scope="col">Status</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php										
										$n=0;															
										$query=mysqli_query($connect,"SELECT * FROM `products` ORDER BY `products`.`product_id` DESC");
										while($crow = mysqli_fetch_array($query)){                      											
											$n++;                      
											$categoryId = $crow['product_category'];                      
											$brandId = $crow['product_brand'];                      
											$categoryQuery = mysqli_query($connect, "SELECT * FROM `category` WHERE `category_id` = '$categoryId'");
											$catRow = mysqli_fetch_array($categoryQuery);                     
											$brandQuery = mysqli_query($connect, "SELECT * FROM `brands` WHERE `brand_id` = '$brandId'");                      
											$brandRow = mysqli_fetch_array($brandQuery);
											?>
										<tr>
											<th scope="row"> 
												<a href="#" class="question_content">  
													<?php echo $n; ?>
												</a>
											</th>
											<td>
												<img src="../img/products/<?php echo $crow['product_image']; ?>" alt="<?php echo $crow['product_image']; ?>" style="width: 100px; border-radius: 15px;">
											</td>											
											<td>
												<?php echo $crow['product_name']; ?>											 
												<p>
													<?php echo $catRow['category_name']; ?>
												</p>											
											</td>											
											<td>
												<?php echo $brandRow['brand_name']; ?>
											</td>											
											<td>
												<?php echo $crow['product_price']; ?>
											</td>
											<td>
												<?php 											
											$qty =$crow['product_qty'];										
											if($qty == 0 ){  																							
												?>					
												<div class="badge badge-opacity-warning">Out of Stock</div>											
												<?php				
											} else {																						
												?>																						
												<div class="badge badge-opacity-success">In Stock</div>
												<?php												
											}												
												?>
											</td>
											<td>
												<a href="edit-product.php?product_id=<?php echo $crow['product_id']  ?>">
												<button class="btn btn-info" style="float: left; color: white; margin-right: 5px;">
													<i class="ti-pencil-alt"></i>
												</button>					</a>							
												<button class="btn btn-danger" style="float: left; color: white;">
													<i class="ti-trash"></i>
												</button>		
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