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
                  <h4 class="card-title">Add New Brands</h4>
                  <p class="card-description">
                    Fill The Form Below
                  </p>
                  <form class="forms-sample" action="add-brand-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Category Name">Brand Name</label>
                      <input type="text" class="form-control" name="bname" id="bname" placeholder="Enter Brand Name" required>
                    </div>
					  
					  
					 <div class="form-group">
                      <label for="Category Descrition">Brand Descrition:</label>
                      <input type="text" class="form-control" name="bdesc" placeholder="Brands Descrition">
                    </div>

                     <div class="form-group">
                      <label>Brand Image upload</label>
                      <input type="file" name="fileImage" class="file-upload-browse btn btn-primary">
                      
                    </div>
					  
					
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="addcategory"><i class="mdi mdi-file-plus"></i> Add New Brand</button>
                    
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