<?php
include('header.php');
include('sidebar.php');
?>
      
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                   
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                     
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Product Brands</h4>
                                   <p class="card-subtitle card-subtitle-dash">All Brands List</p>
                                  </div>
                                  <div>
                                   <a href="add-brand.php"> <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-file-plus"></i>Add new Brands</button></a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          #
                                        </th>
                                        <th>Brand Name</th>
                                       
                                        
										  <th> Action</th>
                                      </tr>
                                    </thead>
								  
                                    <tbody>
										<?php				
                    $n = 0;				
										$query=mysqli_query($connect,"SELECT * FROM `brands`");
										while($crow = mysqli_fetch_array($query)){
                      $n++;
										?>
										<tr>
                                        <td>
                                          <?php echo $n; ?>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <?php 
                                           if (!$crow['brand_image']) {
                                            ?>
                                              <img src="uploads/dp.png" alt="category image">
                                              <?php
                                           } else{
                                            ?>
                                           <img src="uploads/brands/<?php echo $crow['brand_image']; ?>" alt="category image">
                                           <?php
                                           }
                                           ?>
                                            <div>
                                              <h6><?php echo $crow['brand_name']; ?></h6>
                                              <p><?php echo $crow['brand_desc']; ?></p>
                                            </div>
                                          </div>
                                        </td>
                                      
                                        
											<td> 
                          <a href="edit-brand.php?brand_id=<?php echo $crow['brand_id']; ?>">
											      <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-calendar-edit"></i>Edit</button>
                          </a>
												
                        <a href="del-brand.php?brand_id=<?php echo $crow['brand_id']; ?>">
                          <button class="btn btn-danger btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-delete"></i>Delete</button>
                        </a>
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
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   <?php
		  include('footer.php');
		  ?>