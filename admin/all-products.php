<?php
include('header.php');
include('sidebar.php');
if (isset($_POST['del_prod'])) {
    $prodId = $_POST['product_id'];
    $productName = $_POST['product_name'];

// echo $prodId;
 
  // $sql = "SELECT `product_name` FROM `products` WHERE `product_id` = '$prodId'"; 
  // $result = $connect->query($sql);
  // $prow = mysqli_fetch_array($result);
  // $productName = $prow['product_name'];

$sql = "DELETE FROM `products` WHERE `product_id` = '$prodId'";



$result = $connect->query($sql);
//echo($sql);
//die;
if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('$productName has been deleted from the record')</script>";
} else {
echo "<script>alert('Some error occurred. Try again')</script>";
}
}
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
                                    <h4 class="card-title card-title-dash">Product Catalogue</h4>
                                   <p class="card-subtitle card-subtitle-dash">All Product List</p>
                                  </div>
                                  <div>
                                   <a href="add-product.php"> <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-file-plus"></i>Add new Product</button></a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          #
                                        </th>
                                        <th>Product Name</th>
                                        <th>Category / Brand</th>
                                        <th>Price</th>
                                        <th>Status</th>
										                    <th> Action</th>
                                      </tr>
                                    </thead>
								  
                                    <tbody>
										<?php			
                    $n=0;					
										$query=mysqli_query($connect,"SELECT * FROM `products`");
										while($crow = mysqli_fetch_array($query)){
                      $n++;

                      $categoryId = $crow['product_category'];
                      $brandId = $crow['product_brand'];

                      $categoryQuery = mysqli_query($connect, "SELECT * FROM `category` WHERE `category_id` = '$categoryId'");
                      $catRow = mysqli_fetch_array($categoryQuery);

                      $brandQuery = mysqli_query($connect, "SELECT * FROM `brands` WHERE `brand_id` = '$brandId'");
                      $brandRow = mysqli_fetch_array($brandQuery);
										?>
										<tr>
                                        <td>
                                          <?php echo $n; ?>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <img src="uploads/products/<?php echo $crow['product_image']; ?>" alt="<?php echo $crow['product_image']; ?>">
                                            <div>
                                              <h6><?php echo $crow['product_name']; ?></h6>
                                              <p><?php echo $catRow['category_name']; ?></p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6><?php echo $brandRow['brand_name']; ?></h6>
                                          <!-- <p><?php // echo $crow['product_brand']; ?></p> -->
                                        </td>
                                        <td>
                                         <?php echo $crow['product_price']; ?>
                                        </td>
                                        <td>
											<?php 
											$qty =$crow['product_qty'];
											if($qty == 0 ){  
											
												?>
												
												
											<div class="badge badge-opacity-warning">Out of Stock</div>
											<?php
											
											
											} else {
											
											?>
											
											<div class="badge badge-opacity-success">In Stock</div>
											
											
											
											<?php
												}
												?>
											</td>
											<td> 

									
                         <form method="post" action="#">

											<a href="edit-product.php?product_id=<?php echo $crow['product_id'];?>"><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-calendar-edit"></i>Edit</button></a>

                      <input type="hidden" name="product_id" value="<?php echo $crow['product_id']; ?>">
                      <input type="hidden" name="product_name" value="<?php echo $crow['product_name'] ?>">
                    
												<button class="btn btn-danger btn-lg text-white mb-0 me-0" type="submit" name="del_prod"><i class="mdi mdi-delete"></i>Delete</button>
                   </form>

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