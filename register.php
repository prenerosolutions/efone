<?php
include('header.php');
?>
<main class="main">			
	<div class="page-header">				
		<div class="container d-flex flex-column align-items-center">					
			<nav aria-label="breadcrumb" class="breadcrumb-nav">						
				<div class="container">							
					<ol class="breadcrumb">								
						<li class="breadcrumb-item">
							<a href="index.php">Home</a>
						</li>															
						<li class="breadcrumb-item active" aria-current="page">
									Create an account								
						</li>							
					</ol>						
				</div>					
			</nav>					
			<h1>Create a New Account</h1>				
		</div>			
	</div>
	
	<div class="container login-container" style="margin-top: 50px;">				
		<div class="row">					
			<div class="col-lg-6 mx-auto">						
				<div class="row">							
					<div class="col-md-12">								
						<div class="heading mb-1">									
							<h2 class="title">Register New Account</h2>	
							<p>
								<?php					
					
								//session_start();					
					
								if(isset($_SESSION['success_msg'])){				
						
									echo '<div style="width: 90%; height: 80px; background:#58B860;  margin-left: 5%; margin-top: 25px; border-
						radius: 8px; vertical-align: middle; "> 				
						<h4 style="color: #FFFFFF; margin-top: 30px; font-size: 24px;" align="center"> '.$_SESSION['success_msg'].' </h4>			
						</div>';				
						unset($_SESSION['success_msg']);										
					}																
					?>												                    
</p>
						</div>								
						<form action="functions.php" enctype="multipart/form-data" method="post" id="register-form">
							<div class="form-group col-sm-6 float-left">									
								<label for="email">										
									Email address										
									<span class="required">*</span>									
								</label>									
								<input type="email" class="form-input form-wide" name="email" required />									
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="password">										
									Password										
									<span class="required">*</span>									
								</label>									
								<input type="password" class="form-input form-wide" name="password"  required />							
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="first-name">										
									First Name										
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="first-name"  required />									
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="last-name">										
									Last Name										
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="last-name" required />							
							</div>
							
							<div class="form-group col-sm-6 float-left">									
								<label for="first-name">										
									Phone										
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="phone"  required />									
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="last-name">										
									Company Name										
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="company" required />							
							</div>
							
							<div class="form-group col-sm-12 float-left">									
								<label for="first-name">										
									Street Address										
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="street-address"  required />									
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="last-name">										
									City									
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="city" required />							
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="last-name">										
									Postal Code									
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="postal-code" required />							
							</div>
							
							<div class="form-group col-sm-6 float-left">									
								<label for="last-name">										
									Region / State									
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="state" required />							
							</div>
							<div class="form-group col-sm-6 float-left">									
								<label for="last-name">										
									Country									
									<span class="required">*</span>									
								</label>									
								<input type="text" class="form-input form-wide" name="country" required />							
							</div>
							
							<div class="form-group col-sm-12 float-left">									
								<label for="first-name">										
									User Type										
									<span class="required">*</span>									
								</label>
								<select class="form-input form-wide" name="user-type">
									<option selected disabled> Select User Type</option>
									<option> Customer</option>
									<option> Shop Keeper</option>
								
								</select>
															
							</div>
							
							
							
							<div class="form-footer col-sm-12">
										
								<div class="custom-control custom-checkbox mb-0">
											
									<input type="checkbox" class="custom-control-input" id="lost-password" />
											
									<label class="custom-control-label mb-0" for="lost-password">
										Remember me
									</label>
										
								</div>

										
								<a href="#" class="forget-password text-dark form-footer-right">
									Forgot Password?
								</a>
									
							</div>
									
							<button type="submit" class="btn btn-dark btn-md w-100" name="signup_user">
										
								Create an Account
									
							</button>
								
						</form>
							
					</div>
							
						
				</div>
					
			</div>
				
		</div>
			
	</div>
		
</main>

<?php
include('footer.php');
?>