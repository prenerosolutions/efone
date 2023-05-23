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
								<h3 class="m-0">All Category Banners</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<div class="QA_section">
							<div class="white_box_tittle list_header">
								<h4>Banner List</h4>
								<div class="box_right d-flex lms_block">									
									<div class="add_button ms-2">
										<a href="add-category-banner.php" class="btn_1">Add New</a>
									</div>
								</div>
							</div>

							<div class="QA_table mb_30">
								<table class="table lms_table_active ">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Category Name</th>
											<th scope="col">Banner1</th>
											<th scope="col">Banner2</th>
											<th scope="col">Banner3</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php																				
										$n=0;																									
										$query=mysqli_query($connect,"SELECT * FROM `category_banner`");
										while($brow = mysqli_fetch_array($query)){											
											$n++;                      											
											?>
										<tr>
											<th scope="row"> 
												<a href="#" class="question_content">  
													<?php echo $n; ?>
												</a>
											</th>											
											<td>
												<?php											
											$ctg_id =$brow['category_id'];											
											$cquery=mysqli_query($connect,"SELECT * FROM `category` WHERE `category_id`='$ctg_id'");
											$crow = mysqli_fetch_array($cquery);												
											echo $crow['category_name'];						
												?>
											
											</td>
											<td>
												<img src="../img/category-banners/<?php echo $brow['banner1']; ?>" alt="<?php echo $brow['brand_img']; ?>" style="width: 100px; border-radius: 15px;"></td>
											<td>
												<img src="../img/category-banners/<?php echo $brow['banner2']; ?>" alt="<?php echo $brow['brand_img']; ?>" style="width: 100px; border-radius: 15px;"></td>
											<td>
												<img src="../img/category-banners/<?php echo $brow['banner3']; ?>" alt="<?php echo $brow['brand_img']; ?>" style="width: 100px; border-radius: 15px;"></td>						
											<td>
												<!--<button class="btn btn-info" style="float: left; color: white;"><i class="ti-pencil-alt"></i></button>-->
												
												<button class="btn btn-danger" style="float: left; color: white;" onclick="deleteBanner()">
  <i class="ti-trash"></i>
</button>

																				
											
											</td>

										</tr>
										<?php
										}
											?>


									</tbody>

								</table>

								<script>
function deleteBanner() {
  // Get the ID of the banner to be deleted.
  const bannerId = $(this).closest("tr").data("banner-id");

  // Create a confirmation dialog.
  const confirmDelete = confirm("Are you sure you want to delete this banner?");

  // If the user confirms, delete the banner from the database.
  if (confirmDelete) {
    $.ajax({
      url: "banner-delete.php",
      type: "POST",
      data: {
        bannerId: bannerId
      },
      success: function() {
        // Successfully deleted the banner.
        alert("Banner deleted successfully.");
      },
      error: function() {
        // Failed to delete the banner.
        alert("An error occurred while deleting the banner.");
      }
    });
  }
}
</script>
								
								
								
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