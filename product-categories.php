<?php
include('header.php');
?>
<main class="main">			
	<div class="category-banner-container bg-gray">				
		<div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('assets/images/elements/page-header.jpg');">					
			<div class="container position-relative">						
				<nav aria-label="breadcrumb" class="breadcrumb-nav text-white">							
					<ol class="breadcrumb justify-content-center">								
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>								
						<li class="breadcrumb-item active" aria-current="page">Product Categories</li>							
					</ol>						
				</nav>						
				<h1 class="page-title text-center text-white">Product Categories</h1>					
			</div>				
		</div>			
	</div>

			
	<div class="container">
				
		<section class="simple-section mt-5">
					
			<h4 class="heading-bottom-border text-uppercase">All Categories</h4>
					
			<div class="row">
				 <?php
								
												$csql = "SELECT * FROM `category`"; 
								
												$cresult = $connect->query($csql);
								
												while($crow = mysqli_fetch_array($cresult)){
									
												?>
						
				<div class="col-lg-3 col-sm-4 col-6">
							
					<div class="product-category">
								
						<a href="category-details.php?category_id=<?php echo $crow['category_id']; ?>">
									
							<figure>
										
								
								<img src="img/categories/<?php echo $crow['category_image'];?>" width="300" height="300" alt="<?php echo $crow['category_name'];?>">
									
							</figure>
									
							<div class="category-content">
										
								<h3><?php echo $crow['category_name'];  ?></h3>
								
								<?php
													$category_id = $crow['category_id'];
													$psql = "SELECT * FROM products WHERE products.product_category = '$category_id'"; 
								
												$presult = $connect->query($psql);
														//$prow = mysqli_fetch_array($presult)
													$rowcount=mysqli_num_rows($presult);	
													
													?>
										
								<span><mark class="count"><?php echo $rowcount; ?></mark> products</span>
									
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

			
		
</main>

<?php
include('footer.php');
?>