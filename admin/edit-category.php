<?php
include('header.php');
include('sidebar.php');
$categoyId = $_GET['category_id'];
// edit category
?>
      

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category Update</h4>
                  <!--<p class="card-description">
                    Fill The Form Below
                  </p>-->
					
					
										<?php
				
				 		
				$sql = "select * from category where category_id = '$categoyId'"; 
				$result = $connect->query($sql);
				$prow = mysqli_fetch_array($result);
				
				?>
                  <form class="forms-sample" action="edit-category-process.php" method="post" enctype="multipart/form-data">
                  	
                  		<div class="center">
                  			
                  		</div>
                  	<div class="form-group">
                  		
              			<img src="uploads/categories/<?php echo $prow['category_image']; ?>" width="150px" height="150px">
              		
              			<input type="file" name="fileImage" class="file-upload-browse btn btn-primary">
                  		
                    </div>
                  	
					<div class="form-group">
                     <!-- <label for="Product Name">Product Name</label>-->
                      <input type="hidden" class="form-control" name="cat_id" id="cat_id" value="<?php echo $categoyId; ?>" >
                    </div>
                    <div class="form-group">
                      <label >Category Name</label>
                      <input type="text" class="form-control" name="cname" id="cname" value="<?php echo $prow['category_name']; ?>" >
                    </div>
					  
					<div class="form-group">
                      <label>Category Description</label>
                      <input type="text" class="form-control" name="cdesc" id="cdesc" value="<?php echo $prow['category_desc']; ?>" >
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