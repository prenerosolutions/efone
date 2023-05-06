<?php
include('header.php');
include('sidebar.php');
if (isset($_POST['del_customer'])) {
    $cusId = $_POST['cus_id'];
    $email = $_POST['email'];



$sql = "DELETE FROM `customers` WHERE `cus_id`='$cusId'";



$result = $connect->query($sql);

if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('$email has been deleted from the record')</script>";
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
                                    
															<h4 class="card-title card-title-dash">Customers</h4>
                                   
															<p class="card-subtitle card-subtitle-dash">All Customers List</p>
                                  
														</div>
                                  
														
                                
													</div>
                                
													
													<div class="table-responsive  mt-1">
                                  
														<table class="table select-table">
                                    
															<thead>
                                      
																<tr>
                                        
																	<th> <strong>#</strong> </th>
                                        
																	<th><strong>Image</strong></th>
                                        
																	<th><strong>Customer Name</strong></th>
                                        
																	<th><strong>Email</strong></th>
                                        
																	
																	<th><strong>Phone</strong></th>
																	
																	<th><strong>Address</strong></th>
																	
																	<th><strong>User Type</strong></th>
										                    
																	
																	<th> <strong>Action</strong></th>
                                      
																</tr>
                                   
															</thead>
								  
                                    
															<tbody>
										
																<?php			                    
																$n=0;															
																$query=mysqli_query($connect,"SELECT * FROM `customers`");										
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
                                            
																	if (!$crow['customer_pic']) {
                                              
																			 ?>
                                              
																			 <img src="uploads/dp.png" alt="">
                                              
																			 <?php
                                            
																	} else {
                                              
																			 ?>
                                            
																			 <img src="uploads/products/<?php echo $crow['customer_pic'];?>" alt="">
                                            
																			 <?php
                                           
																	}
																			 ?>
                                           
																			 
                                            
                                          
																		</div>
                                        
																	</td>
                                        
																	<td>
                                         
																		<h6>
                                         
																			<?php 
                                           
																	
																	echo $crow['first_name']; 
                                           
																	echo " ";
                                           
																	echo $crow['last_name'];
                                         
																			?>
																		
																			
																		</h6>
																	</td>
                                        
																	<td>
                                         
																		<?php echo $crow['email']; ?>
                                        
																	</td>
																	
																	<td>
                                         
																		<?php echo $crow['phone']; ?>
                                        
																	</td>
																	
																	<td>
                                         
																		
																		
																		<?php 
                                           
																	echo $crow['street_address']; 
                                           
																	echo " ";
                                           
																	echo $crow['town'];
																	
																	echo " ";
                                           
																	echo $crow['country'];
                                         
																			?>
                                        
                                        
																	</td>
																	
																	<td>
                                         
																		<?php echo $crow['user_role']; ?>
                                        
																	</td>
                                        
																	
											
																	<td> 

									
                         
																		<form method="post" action="#">                      
																			<input type="hidden" name="cus_id" value="<?php echo $crow['cus_id']; ?>">
																			<input type="hidden" name="email" value="<?php echo $crow['email'] ?>">
                   												
																			<button class="btn btn-danger btn-lg text-white mb-0 me-0" type="submit" name="del_customer">
																				<i class="mdi mdi-delete"></i>
																				Delete
																			</button>
                   
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