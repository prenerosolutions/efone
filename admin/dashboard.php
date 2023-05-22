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
                                    <h4 class="card-title card-title-dash">All Customer Orders</h4>
                                 
                                  </div>
                                  <div>
                                   
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table" id="order_table">
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
					  <script>   
	$(document).ready(function(){        
		$('#order_table').DataTable();   
	});   
</script> 
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