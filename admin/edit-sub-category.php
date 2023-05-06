<?php
include('header.php');
include('sidebar.php');
$subCategoyId = $_GET['sub_category_id'];
// edit category
?>
      

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sub Category Update</h4>
                  <!--<p class="card-description">
                    Fill The Form Below
                  </p>-->
					
					
										<?php
				
				 		
				$sql = "select * from sub_categories where sub_ctg_id = '$subCategoyId'"; 
				$result = $connect->query($sql);
				$prow = mysqli_fetch_array($result);

        $categoryId= $prow['category_id'];
				
      
        $ctgsql = "select * from category where category_id = '$categoryId'"; 
        $ctgresult = $connect->query($ctgsql);
        $ctgrow = mysqli_fetch_array($ctgresult);
        
        
				?>
                  <form class="forms-sample" action="edit-sub-category-process.php" method="post" enctype="multipart/form-data">
                  	
                  		<div class="center">
                  			
                  		</div>
                  	<div class="form-group">
                  		
              			<img src="uploads/sub-categories/<?php echo $prow['sub_ctg_img']; ?>" width="150px" height="150px">
              		
              			<input type="file" name="fileImage" class="file-upload-browse btn btn-primary">
                  		
                    </div>
                  	
					<div class="form-group">
                     <!-- <label for="Product Name">Product Name</label>-->
                      <input type="hidden" class="form-control" name="sub_ctg_id" id="sub_ctg_id" value="<?php echo $subCategoyId; ?>" >
                    </div>


                    <div class="form-group">
                      <label >Category Name</label>
                      <input type="text" class="form-control" name="cname" id="cname" value="<?php echo $ctgrow['category_name']; ?>" readonly="true">
                    </div>

                    <div class="form-group">
                      <label >Sub Category Name</label>
                      <input type="text" class="form-control" name="scname" id="scname" value="<?php echo $prow['sub_ctg_name']; ?>" >
                    </div>
					  
					<!-- <div class="form-group">
                      <label>Sub Category Description</label>
                      <input type="text" class="form-control" name="cdesc" id="cdesc" value="<?php //echo $prow['category_desc']; ?>" >
                    </div> -->
					    
					  
					 
                  
                    
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