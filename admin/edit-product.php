<?php
include('header.php');
include('sidebar.php');


if (isset($_POST['pid1'])) {
	$productId = $_POST['pid1'];
$imageId = $_POST['image_id'];

$date = date("Y-m-d h:i:s");

// File upload path
$targetDir = "uploads/product-images/";
$image1 = time().($_FILES["image1"]["name"]);
$targetFilePath1 = $targetDir . $image1;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
		
				$query = "SELECT * FROM `product_images` WHERE `image_id`='1' AND `product_id` = '$productId'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) >= 1) {

    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "UPDATE `product_images` SET `image_name`='$image1', `date_added`='$date' WHERE `image_id`='1' AND `product_id` = '$productId'";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image updated successfully.";
            }else{
                $statusMsg = "Product Image not updated, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
echo "<script>alert('$statusMsg')</script>";

				}else {

    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "INSERT INTO `product_images`(`image_id`, `image_name`, `product_id`, `date_added`) VALUES ('1','$image1','$productId','$date')";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image added successfully.";
            }else{
                $statusMsg = "Product Image not added, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
echo "<script>alert('$statusMsg')</script>";
}
}

if (isset($_POST['pid2'])) {
	$productId = $_POST['pid2'];
$imageId = $_POST['image_id'];

$date = date("Y-m-d h:i:s");

// File upload path
$targetDir = "uploads/product-images/";
$image2 = time().($_FILES["image2"]["name"]);
$targetFilePath1 = $targetDir . $image2;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
		
				$query = "SELECT * FROM `product_images` WHERE `image_id`='2' AND `product_id` = '$productId'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) >= 1) {

    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "UPDATE `product_images` SET `image_name`='$image2', `date_added`='$date' WHERE `image_id`='2' AND `product_id` = '$productId'";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image updated successfully.";
            }else{
                $statusMsg = "Product Image not updated, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
echo "<script>alert('$statusMsg')</script>";

				}else {

    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "INSERT INTO `product_images`(`image_id`, `image_name`, `product_id`, `date_added`) VALUES ('2','$image2','$productId','$date')";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image added successfully.";
            }else{
                $statusMsg = "Product Image not added, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
echo "<script>alert('$statusMsg')</script>";
}
}

if (isset($_POST['pid3'])) {
	$productId = $_POST['pid3'];
$imageId = $_POST['image_id'];

$date = date("Y-m-d h:i:s");

// File upload path
$targetDir = "uploads/product-images/";
$image3 = time().($_FILES["image3"]["name"]);
$targetFilePath1 = $targetDir . $image3;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
		
				$query = "SELECT * FROM `product_images` WHERE `image_id`='3' AND `product_id` = '$productId'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) >= 1) {

    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "UPDATE `product_images` SET `image_name`='$image3', `date_added`='$date' WHERE `image_id`='3' AND `product_id` = '$productId'";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image updated successfully.";
            }else{
                $statusMsg = "Product Image not updated, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
echo "<script>alert('$statusMsg')</script>";

				}else {

    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "INSERT INTO `product_images`(`image_id`, `image_name`, `product_id`, `date_added`) VALUES ('3','$image3','$productId','$date')";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "Product image added successfully.";
            }else{
                $statusMsg = "Product Image not added, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
echo "<script>alert('$statusMsg')</script>";
}
}
?>
      

<div class="main-panel">    
	
	
	
	<div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
					
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#pdetail" role="tab" aria-controls="pdetail" aria-selected="true">Product Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#seo" role="tab" aria-selected="false">SEO Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#img" role="tab" aria-selected="false">Product Images</a>
                    </li>
                    <!--<li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                    </li>-->
                  </ul>
					
					
                  <!--<div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>-->
                </div>
                <div class="tab-content tab-content-basic">
					
                  <div class="tab-pane fade show active" id="pdetail" role="tabpanel" aria-labelledby="pdetail"> 
                     <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Details</h4>
                  <!--<p class="card-description">
                    Fill The Form Below
                  </p>-->
					
					
										<?php
				
				$product_id = $_GET['product_id']; 		
				$sql = "select * from products where product_id = '$product_id'"; 
				$result = $connect->query($sql);
				$prow = mysqli_fetch_array($result);
				
				?>
                  <form class="forms-sample" action="edit-product-process.php" method="post" enctype="multipart/form-data">
					  <div class="form-group">
                     <!-- <label for="Product Name">Product Name</label>-->
                      <input type="hidden" class="form-control" name="pid" id="pid" value="<?php echo $prow['product_id'] ?>" >
                    </div>
                    <div class="form-group">
                      <label for="Product Name">Product Name</label>
                      <input type="text" class="form-control" name="pname" id="pname" value="<?php echo $prow['product_name'] ?>" >
                    </div>
					  
					    <div class="form-group">
							<label>Product Category</label>
							<select name="category" class="form-control">
                            <?php
								 $category =  $prow['product_category'];
								$sql = "SELECT * FROM `category` WHERE category_id = $category "; 
								$result = $connect->query($sql);
									
								$ctrow = mysqli_fetch_array($result)
									
?>
                            
								<option value="<?php echo $ctrow['category_id'] ?>"> <?php echo $ctrow['category_name'] ?>  </option>
								<?php
								 
								$sql = "SELECT * FROM `category`"; 
								$result = $connect->query($sql);
									
								while($crow = mysqli_fetch_array($result)){
									
?>
									
									<option value="<?php echo $crow['category_id'] ?>"> <?php echo $crow['category_name'] ?> </option>
								<?php
        }
        ?>
								
								</select>
							
					  </div>
                      <div class="form-group">
							<label>Sub Category</label>
							<select name="sub_category" class="form-control">
                            <?php
								 $subcategory =  $prow['sub_category'];
								$sql = "SELECT * FROM `sub_categories` WHERE `sub_ctg_id` = $subcategory "; 
								$result = $connect->query($sql);
									
								$scrow = mysqli_fetch_array($result)
									
?>
                            
								<option value="<?php echo $scrow['sub_ctg_id'] ?>"> <?php echo $scrow['sub_ctg_name'] ?>  </option>
                            
									
								<?php
								 
								$sql = "SELECT * FROM `sub_categories`"; 
								$result = $connect->query($sql);
									
								while($crow = mysqli_fetch_array($result)){
									
?>
									
									<option value="<?php echo $crow['sub_ctg_id'] ?>"> <?php echo $crow['sub_ctg_name'] ?> </option>
								<?php
        }
        ?>
								
								</select>
							
					  </div>
					  
					  <div class="form-group">
						  <label>Product Brand</label>
						 <select name="brands" class="form-control">
                         	
                         
                          <?php
								 $probrand =  $prow['product_brand'];
								$sql = "SELECT * FROM `brands` WHERE `brand_id` = $probrand "; 
								$result = $connect->query($sql);
									
								$brow = mysqli_fetch_array($result)
									
?>
                            
								<option value="<?php echo $brow['brand_id'] ?>"> <?php echo $brow['brand_name'] ?>  </option>
                            
                         
									
								<?php
								 
								$sql = "SELECT * FROM `brands`"; 
								$result = $connect->query($sql);
									
								while($brow = mysqli_fetch_array($result)){
									
?>
									
									<option value="<?php echo $brow['brand_id'] ?>"> <?php echo $brow['brand_name'] ?> </option>
								<?php
        }
        ?>
								
								</select>
					  </div>
					  <div class="form-group">
                      <label for="Short Description">Short Description</label>
                      <textarea class="form-control" style="height: 100px;" name="sdesc" value=""  id="sdesc" rows="4"><?php echo $prow['short_desc'] ?></textarea>
                    </div>
					  
					 <div class="form-group">
                      <label for="Quantity">Quantity:</label>
                      <input type="text" class="form-control" name="qty" id="qty" value="<?php echo $prow['product_qty'] ?>">
                    </div>
					  
					  <div class="form-group">
                      <label for="Price">Price:</label>
                      <input type="text" class="form-control" name="price" id="price" value="<?php echo $prow['product_price'] ?>">
                    </div>
					  
					  <div class="form-group">
                      <label for="Price">Shopkeeper Price:</label>
                      <input type="text" class="form-control" id="sprice" name="sprice" value="<?php echo $prow['shopkeeper_price'] ?>">
                    </div>
					  
					   <div class="form-group">
                      <label for="Condition">Condition:</label>
                      <input type="text" class="form-control" id="cond" name="cond" value="<?php echo $prow['product_condition'] ?>">
                    </div>
					  <div class="form-group">
                      <label for="Condition">Featured Image:</label>
						   <!--<input type="file" name="fileToUpload" class="file-upload-default" title="Select Image">-->
                      <input type="file" class="btn btn-default" name="fileToUpload" title="Select file">
                    </div>
                    
					   <div class="form-group">
                      <label for="Long Description">Long Description</label>
                      <textarea class="form-control" style="height: 200px;"  name="desc" value="" id="sdesc" rows="8"><?php echo $prow['long_desc'] ?></textarea>
                    </div>
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="UpdateProduct">Update Product</button>
                    
                  </form>
                </div>
              </div>
            </div>
					  
					  
                  </div>
					<div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo"> 
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">SEO Details</h4>
                  <!--<p class="card-description">
                    Fill The Form Below
                  </p>-->
					
					
										<?php
				
				//$product_id = $_GET['product_id']; 		
				$sql = "SELECT * FROM `product_seo` WHERE `product_id` = '$product_id'"; 
				$result = $connect->query($sql);
				$srow = mysqli_fetch_array($result);
				
				?>
                  <form class="forms-sample" action="edit-seo-process.php" method="post" enctype="multipart/form-data">
					  <div class="form-group">
                     <!-- <label for="Product Name">Product Name</label>-->
                      <input type="hidden" class="form-control" name="pid" id="pid" value="<?php echo $prow['product_id'] ?>" >
                    </div>
                    <div class="form-group">
                      <label for="Product Title">Product Title</label>
                      <input type="text" class="form-control" name="ptitle"  value="<?php echo $srow['product_title'] ?>" >
                    </div>
					  
					   
					  
					 
					  <div class="form-group">
                      <label for="Meta Description">Meta Description</label>
                      <textarea class="form-control" style="height: 100px;" name="mdesc" value=""   rows="4"><?php echo $srow['meta-description'] ?></textarea>
                    </div>
					  
					 <div class="form-group">
                      <label for="Focus Keyword">Focus Keyword:</label>
                      <input type="text" class="form-control" name="fk" id="fk" value="<?php echo $srow['focus-keywords'] ?>">
                    </div>
					  
				 <div class="form-group">
                      <label for="Additional Keywords">Additional Keywords:</label>
                      <textarea class="form-control" style="height: 100px;" name="ak" value="" rows="4"><?php echo $srow['additional-keywords'] ?></textarea>
                    </div>
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="UpdateProduct">Update</button>
                    
                  </form>
                </div>
              </div>
            </div>
					  
					  
                  </div>
					
					<div class="tab-pane fade" id="img" role="tabpanel" aria-labelledby="img"> 
                      
					  <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Gallery</h4>
                  <!--<p class="card-description">
                    Fill The Form Below
                  </p>-->
					
					
									
                  
					  <!-- <div class="form-group">
                      <label for="Product Name">Product Name</label>
                      
                    </div> -->

                    <table>
                    		

                    	<tr>
                    		<td>
                    			<?php
				
				$product_id = $_GET['product_id']; 		
				$productSql = "SELECT * FROM `product_images` WHERE `product_id` = '$product_id' AND image_id = '1'"; 
				$productResult = $connect->query($productSql);
				if (mysqli_num_rows($productResult) > 0) {
				$srow = mysqli_fetch_array($productResult);
				
					?>
					<img src="uploads/product-images/<?php echo $srow['image_name'] ; ?>" height="200px" width="200px">
					<?php
				}
				?>
                    			
                    		</td>
                    		<td>
                    			<?php
				
				$product_id = $_GET['product_id']; 		
				$productSql = "SELECT * FROM `product_images` WHERE `product_id` = '$product_id' AND image_id = '2'"; 
				$productResult = $connect->query($productSql);
				if (mysqli_num_rows($productResult) > 0) {
				$srow = mysqli_fetch_array($productResult);
				
					?>
					<img src="uploads/product-images/<?php echo $srow['image_name'] ; ?>" height="200px" width="200px">
					<?php
				}
				?>
                    		</td>
                    		<td>
                    			<?php
				
				$product_id = $_GET['product_id']; 		
				$productSql = "SELECT * FROM `product_images` WHERE `product_id` = '$product_id' AND image_id = '3'"; 
				$productResult = $connect->query($productSql);
				if (mysqli_num_rows($productResult) > 0) {
				$srow = mysqli_fetch_array($productResult);
				
					?>
					<img src="uploads/product-images/<?php echo $srow['image_name'] ; ?>" height="200px" width="200px">
					<?php
				}
				?>
                    		</td>
                    	</tr>
                    	<tr>
                    		<td>
                    			<form class="forms-sample" name="form1" id="image1" action="#" method="post" enctype="multipart/form-data">
                    				<input type="hidden" class="form-control" name="pid1" id="pid" value="<?php echo $prow['product_id'] ?>" >

                    				<!-- <input type="hidden" class="form-control" name="image_id" id="image_id" value="1" > -->

	                    			<div class="form-group">
				                      <label for="Product Title">Image 1</label>
				                      <input type="file" class="form-control btn btn-info" name="image1"  value="" >
				                    </div>
			                	</form>
                    		</td>
                    		<td>
                    			<form class="forms-sample" id="image2" action="#" method="post" enctype="multipart/form-data">
                    				<input type="hidden" class="form-control" name="pid2" id="pid" value="<?php echo $prow['product_id'] ?>" >

                    				<!-- <input type="hidden" class="form-control" name="image_id" id="image_id" value="2" > -->

	                    			<div class="form-group">
				                      <label for="Product Title">Image 2</label>
				                      <input type="file" class="form-control btn btn-info" name="image2" >
				                    </div>
			                	</form>
                    		</td>
                    		<td>
                    			<form class="forms-sample" id="image3" action="#" method="post" enctype="multipart/form-data">
                    				<input type="hidden" class="form-control" name="pid3" id="pid" value="<?php echo $prow['product_id'] ?>" >

                    				<!-- <input type="hidden" class="form-control" name="image_id" id="image_id" value="3" > -->

	                    			<div class="form-group">
				                      <label for="Product Title">Image 3</label>
				                      
				                      <input type="file" class="form-control btn btn-info" name="image3" >
				                    </div>
			                	</form>
                    		</td>
                    	</tr>
                    </table>
                    
					  
					   
					  
					 
			
                    
                   <!--  <button type="submit" class="btn btn-primary me-2" name="UpdateProduct">Update</button> -->
                    
                  <!-- </form> -->
                </div>
              </div>
            </div>
					  
                  </div>
					
					<!--<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                      
					  
					  
                  </div>-->
					
					
                </div>
              </div>
            </div>
          </div>
        </div>
	
	
	
	
	
	
	
	
        <div class="content-wrapper">
          <div class="row">
            
           
          </div>
        </div>
        <!-- content-wrapper ends -->
	
	<?php
		  include('footer.php');
		  ?>

		  <script type="text/javascript">
		  	
		  	$('input[name=image1]').change(function(){
			 $("#image1").submit();
			});

			$('input[name=image2]').change(function(){
			 $("#image2").submit();
			});

			$('input[name=image3]').change(function(){
			 $("#image3").submit();
			});
		  </script>
