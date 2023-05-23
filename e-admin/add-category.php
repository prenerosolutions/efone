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

								<h3 class="m-0">Add New Category</h3>

							</div>

						</div>

					</div>

					<div class="white_card_body">

						<form>

							<div class="mb-3">

								<label class="form-label" for="category name">Category Name</label>

								<input type="text" class="form-control" placeholder="Enter Product Name" name="prod_name">

							</div>
						
							<div class=" mb-3">

								<label class="form-label" for="description">Category Description:</label>

								<textarea class="form-control" maxlength="325" rows="3" name="short_desc" id="maxlength-textarea" placeholder=""></textarea>

							</div>
														
							
							<div class="input-group mb-3">
								

								<input type="file" class="form-control" name="ctg_img" id="inputGroupFile02">

								<label class="input-group-text" for="category image">Product Image</label>

							</div>
							
							<button type="submit" class="btn btn-primary" name="add-product">Add Category</button>

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