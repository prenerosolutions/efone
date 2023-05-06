<?php
include('header.php');
include('sidebar.php');
?>
      
     
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  
                  </ul>
                  <div>
                   <!-- <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>-->
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Bounce Rate</p>
                            <h3 class="rate-percentage">32.53%</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                          </div>
                          <div>
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                          </div>
                        </div>
                      </div>
                    </div> 
					  
					  <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">All Customer Orders</h4>
                                  <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>-->
                                  </div>
                                  <div>
                                    <!--<button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>-->
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          #
                                        </th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Customer Name</th>
                                        <th>Status</th>
										
                                      </tr>
                                    </thead>
                                    <tbody>
                    <?php
                    $n = 0;
                    $orderSql=mysqli_query($connect,"SELECT * FROM `orders`");
                     while($orow = mysqli_fetch_array($orderSql)){
                      $n++;
                      $productId = $orow['product_id'];
                      $productSql = "SELECT * FROM `products` WHERE product_id = '$productId'"; 
                      $productResult = $connect->query($productSql);
                      $prow = mysqli_fetch_array($productResult);

                      $productCategory = $prow['product_category'];
                      $categorySql = "SELECT * FROM `category` WHERE category_id = '$productCategory'"; 
                      $categoryResult = $connect->query($categorySql);
                      $crow = mysqli_fetch_array($categoryResult);

                      $productBrand = $prow['product_brand'];
                      $brandSql = "SELECT * FROM `brands` WHERE brand_id = '$productBrand'"; 
                      $brandResult = $connect->query($brandSql);
                      $brow = mysqli_fetch_array($brandResult);

                      $customerId = $orow['cus_id'];
                      $customerSql = "SELECT * FROM `customers` WHERE cus_id = '$customerId'"; 
                      $customerResult = $connect->query($customerSql);
                      $cusrow = mysqli_fetch_array($customerResult);

                    ?>                
                    
                                      <a href="order-detail.php?order_id=<?php echo $crow['order_id'];?>"><tr>
                                        <td>
                                          <?php echo $n; ?>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <?php 
                                            if (!$prow['product_image']) {
                                              ?>
                                              <img src="uploads/dp.png" alt="">
                                              <?php
                                            } else {
                                              ?>
                                             <img src="uploads/products/<?php echo $prow['product_image'];?>" alt="">
                                             <?php
                                            }?>
                                            <!--  -->
                                            
                                          </div>
                                        </td>
                                        <td>
                                          <h6><?php echo $prow['product_name']; ?></h6>
                                         
                                        </td>
                                        <td>
                                         <?php 
                                           echo $cusrow['first_name']; 
                                           echo " ";
                                           echo $cusrow['last_name'];
                                         ?>
                                        </td>
                                        <td><div class="badge badge-opacity-warning"><?php echo $orow['order_status']; ?></div></td>
                      
                      
                                      </tr></a>
                    
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
					  
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Closed Value</p>
                                    <h2 class="text-info">357</h2>
                                  </div>
                                  <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Total Visitors</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Visits per day</p>
                                        <h4 class="mb-0 fw-bold">9065</h4>
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
            </div>
          </div>
        </div>
   <?php
		  include('footer.php');
		  ?>