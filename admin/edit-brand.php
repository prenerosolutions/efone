<?php
include('header.php');
include('sidebar.php');
$brandId = $_GET['brand_id'];
// edit category
?>
      

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Brand Update</h4>
                  <!--<p class="card-description">
                    Fill The Form Below
                  </p>-->
					
					
										<?php
				
				 		
				$sql = "select * from brands where brand_id = '$brandId'"; 
				$result = $connect->query($sql);
				$prow = mysqli_fetch_array($result);
				
				?>
                  <form class="forms-sample" action="edit-brand-process.php" method="post" enctype="multipart/form-data">
                  	
                  		<div class="center">
                  			
                  		</div>
                  	<div class="form-group">
                  		
              			<img src="uploads/brands/<?php echo $prow['brand_image']; ?>" width="150px" height="150px">
              		
              			<input type="file" name="fileImage" class="file-upload-browse btn btn-primary">
                  		
                    </div>
                  	
					<div class="form-group">
                     <!-- <label for="Product Name">Product Name</label>-->
                      <input type="hidden" class="form-control" name="brand_id" id="cat_id" value="<?php echo $brandId; ?>" >
                    </div>
                    <div class="form-group">
                      <label >Brand Name</label>
                      <input type="text" class="form-control" name="cname" id="cname" value="<?php echo $prow['brand_name']; ?>" >
                    </div>
					  
					<div class="form-group">
                      <label>Brand Description</label>
                      <input type="text" class="form-control" name="cdesc" id="cdesc" value="<?php echo $prow['brand_desc']; ?>" >
                    </div>
					    
					  
					 
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="UpdateCategory">Update Category</button>
                    
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
	
	<?php
		  include('footer.php');
		  ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>