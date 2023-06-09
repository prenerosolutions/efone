<?php
include('header.php');
?>

<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>							
								<li class="breadcrumb-item active" aria-current="page">
									Login
								</li>
							</ol>
						</div>
					</nav>

					<h1>Login to Your Account</h1>
				</div>
			</div>

			<div class="container login-container" style="margin-top: 50px;">
				<div class="row">
					<div class="col-lg-6 mx-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="heading mb-1">
									<h2 class="title">Login</h2>
								</div>

								<form action="functions.php" method="post">
									<label for="login-email">
										Username or email address
										<span class="required">*</span>
									</label>
									<input type="email" class="form-input form-wide" name="email" required />

									<label for="login-password">
										Password
										<span class="required">*</span>
									</label>
									<input type="password" class="form-input form-wide" name="password" required />

									<div class="form-footer">
										<div class="custom-control custom-checkbox mb-0">
											<input type="checkbox" class="custom-control-input" id="lost-password" />
											<label class="custom-control-label mb-0" for="lost-password">Remember
												me</label>
										</div>

										<a href="#" class="forget-password text-dark form-footer-right">Forgot
											Password?</a>
									</div>
									<button type="submit" class="btn btn-dark btn-md w-100" name="login_user">
										LOGIN
									</button>
								</form>
								<h5 align="center">Have no account? <span><a href="register.php">Create New Account!</a></span></h5>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
include('footer.php');
?>