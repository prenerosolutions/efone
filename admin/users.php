<?php
include('header.php');
include('sidebar.php');
if (isset($_POST['del_user'])) {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];



$sql = "DELETE FROM `users` WHERE `user_id`='$user_id'";



$result = $connect->query($sql);

if($result){
 echo'<br>';
 echo ' ';
 echo "<script>alert('$username has been deleted from the record')</script>";
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
                                    
															<h4 class="card-title card-title-dash">Users</h4>
                                   
															<p class="card-subtitle card-subtitle-dash">All Users List</p>
                                  
														</div>
                                   <div>
                                   <a href="add-user.php"> <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-file-plus"></i>Add New User</button></a>
                                  </div>
														
                                
													</div>
                                
													
													<div class="table-responsive  mt-1">
                                  
														<table class="table select-table">
                                    
															<thead>
                                      
																<tr>
                                        
																	<th> <strong>#</strong> </th>
                                        
																	<th><strong>Image</strong></th>
                                        
																	<th><strong>Full Name</strong></th>
                                        
																	<th><strong>Username</strong></th>
                                        
																	
																	<th><strong>Email</strong></th>
																	
																	<th><strong>Phone</strong></th>																								                    
																	
																	<th> <strong>Action</strong></th>
                                      
																</tr>
                                   
															</thead>
								  
                                    
															<tbody>
										
																<?php			                    
																$n=0;															
																$query=mysqli_query($connect,"SELECT * FROM `users`");										
																while($urow = mysqli_fetch_array($query)){                      
																	$n++;									
																?>
										
																<tr>
                                        
																	<td>
                                          
																		<?php echo $n; ?>
                                        
																	</td>
                                        
																	<td>
                                          
																		 <div class="d-flex ">
                                            
																			 <?php 
                                            
																	if (!$urow['user_pic']) {
                                              
																			 ?>
                                              
																			 <img src="uploads/dp.png" alt="">
                                              
																			 <?php
                                            
																	} else {
                                              
																			 ?>
                                            
																			 <img src="uploads/users/<?php echo $urow['user_pic'];?>" alt="">
                                            
																			 <?php
                                           
																	}
																			 ?>
                                           
																			 
                                            
                                          
																		</div>
                                        
																	</td>
                                        
																	<td>
                                         
																		<h6>
                                         
																			<?php 
                                           
																	
																	echo $urow['first_name']; 
                                           
																	echo " ";
                                           
																	echo $urow['last_name'];
                                         
																			?>
																		
																			
																		</h6>
																	</td>
                                        
																	<td>
                                         
																		<?php echo $urow['username']; ?>
                                        
																	</td>
																	
																	<td>
                                         
																		<?php echo $urow['user_email']; ?>
                                        
																	</td>
																	
																	
																	
																	<td>
                                         
																		<?php echo $urow['user_mobile']; ?>
                                        
																	</td>
                                        
																	
											
																	<td> 

									
                         
																		<form method="post" action="#">                      
																			<input type="hidden" name="user_id" value="<?php echo $urow['user_id']; ?>">
																			<input type="hidden" name="username" value="<?php echo $urow['username'] ?>">
                   												
																			<button class="btn btn-danger btn-lg text-white mb-0 me-0" type="submit" name="del_user">
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