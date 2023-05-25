<?php
include('header.php');
?>

<div class="main_content_iner ">
	<div class="container-fluid p-0 sm_padding_15px">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Add New Product</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<form method="post" enctype="multipart/form-data" action="user-process.php">
							<div class="mb-3">
								<label class="form-label" for="Username">Username:</label>
								<input type="text" class="form-control" placeholder="Enter Username" name="username">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Password">Password:</label>
								<input type="password" class="form-control" placeholder="*******" name="password">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="First Name">First Name:</label>
								<input type="text" class="form-control" name="fname" placeholder="First Name">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Last Name">Last Name:</label>
								<input type="text" class="form-control" placeholder="Last Name" name="lname">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="User Email">User Email:</label>
								<input type="email" class="form-control" placeholder="Enter User Email" name="user_email">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="User Phone">User Phone:</label>
								<input type="text" class="form-control" placeholder="Enter Phone Number" name="user_phone">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="User Role">User Role:</label>
								<select name="user_role"  class="form-control">
									<option selected="">Choose User Role</option>
									<option value="administrator">Administrator</option>
									<option value="manager">Manager</option>
															
								</select>							
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="user_img">
								<label class="input-group-text" for="User Image">User Image</label>
							</div>
						

							<button type="submit" class="btn btn-primary" name="add-user">Add User</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>