<?php

include('header.php');

$category_id = $_GET['category_id'];

$csql = "SELECT * FROM category WHERE category_id ='$category_id'"; 												
$cresult = $connect->query($csql);												
$crow = mysqli_fetch_array($cresult);
?>
       
<main class="main">            
	<div class="container">               
		<nav aria-label="breadcrumb" class="breadcrumb-nav">                   
			<ol class="breadcrumb">                     
				<li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>					
				<li class="breadcrumb-item"><a href="product-categories.php">Categories</a></li>                     
				<li class="breadcrumb-item active" aria-current="page"><?php echo $crow['category_name'];?></li>                   
			</ol>                
		</nav>               
		<div class="row">                  
			<div class="col-lg-9">                    
				<div class="boxed-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">					
					<?php					
					$bsql = "SELECT * FROM `category_banner` WHERE `category_id`='$category_id'";						
					$bresult = $connect->query($bsql);																		
					$brow = mysqli_fetch_array($bresult);						
					?>                       
					<div class="boxed-slide boxed-slide-1">                         
						<figure>                          
							<img class="slide-bg owl-lazy" data-src="img/category-banners/<?php echo $brow['banner1']; ?>" src="img/category-banners/<?php echo $brow['banner1']; ?>" alt="banner" width="870" height="300">                         
						</figure>                          
						<div class="slide-content">                                                                 
						</div>                           
					</div>                           														                        
				</div>                                          
				<div class="row">						
					<section class="simple-section mt-5">					
						<h4 class="heading-bottom-border text-uppercase">
							Sub Categories
						</h4>					
						<div class="row">						
							<?php							
							$subsql = "SELECT * FROM `sub_categories` WHERE `category_id`='$category_id'";							
							$subresult = $connect->query($subsql);																			
							while($subrow = mysqli_fetch_array($subresult)){							
							?>												
							<div class="col-lg-4 col-sm-4 col-6">							
								<div class="product-category">								
									<a href="sub-category-products.php?sub_category_id=<?php echo $subrow['sub_ctg_id'] ?>">
										<figure>										
											<img src="img/sub-categories/<?php echo $subrow['sub_ctg_img'] ?>" width="300" height="300" alt="category">
										</figure>									
										<div class="category-content">										
											<h3>
												<?php echo $subrow['sub_ctg_name'] ?>
											</h3>																				
											<?php													
								$sub_ctg_id = $subrow['sub_ctg_id'];													
								$psql = "SELECT * FROM `products` WHERE `sub_category`='$sub_ctg_id'";
								$presult = $connect->query($psql);														
								//$prow = mysqli_fetch_array($presult)													
								$rowcount=mysqli_num_rows($presult);
											?>		
											<span>
												<mark class="count">
													<?php echo $rowcount; ?>
												</mark> 
												Products
											</span>									
										</div>								
									</a>							
								</div>						
							</div>												
							<?php						
							}						
							?>																	
						</div>			
					</section>							                       
				</div>                                                                  
			</div>                 
			<?php					
			include('sidebar.php');					
			?>                                                     
		</div>                           
	</div>                       
	<div class="mb-4"></div>                   
</main>
        
<?php
include('footer.php');
?>