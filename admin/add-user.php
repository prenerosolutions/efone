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
                  
						<h4 class="card-title">Add New User</h4>
                  
						<p class="card-description">
                   
							Fill The Form Below
                  
						</p>
                 
						<form class="forms-sample" action="user-process.php" method="post" enctype="multipart/form-data">
                   
							<div class="form-group">
                      
								<label for="First Name">First Name</label>
                      
								<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" required>
                    
							</div>
					  
					 
							<div class="form-group">
                      
								<label for="Last Name">Last Name</label>
                      
								<input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" required>
                   
							</div>
							
							
							<div class="form-group">
                      
								<label for="Last Name">Username</label>
                      
								<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
                   
							</div>
							
							<div class="form-group">
                      
								<label for="Last Name">Password</label>
                      
								<input type="password" class="form-control" name="password" id="password" required>
                   
							</div>
							
							<div class="form-group">
                      
								<label for="Last Name">Email</label>
                       
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                   
							</div>
							
							<div class="form-group">
                      
								<label for="Last Name">Phone</label>
                       
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" required>
                   
							</div>
					  
					  
					  
					 
							

                     
							<!--<div class="form-group">
                      
								<label>User Image upload</label>
                      
								<input type="file" name="fileImage" class="file-upload-browse btn btn-primary">
                      
                    
							</div>-->
					  
					
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="addcategory"><i class="mdi mdi-file-plus"></i> Add New User</button>
                    
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