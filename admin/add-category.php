<?php
include('header.php');
include('sidebar.php');
?>
      

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Category</h4>
                  <p class="card-description">
                    Fill The Form Below
                  </p>
                  <form class="forms-sample" action="category-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Category Name">Category Name</label>
                      <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Category Name" required>
                    </div>
					  
					  
					 <div class="form-group">
                      <label for="Category Descrition">Category Descrition:</label>
                      <input type="text" class="form-control" name="cdesc" placeholder="Category Descrition">
                    </div>
					  
					 <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="fileImage" class="file-upload-browse btn btn-primary">
                      <!--<div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>-->
                    </div>
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="addcategory"> <i class="mdi mdi-file-plus"></i>Add Category</button>
                    
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
	
	<?php
		  include('footer.php');
		  ?>