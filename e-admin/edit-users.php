<?php
include('header.php');


$user_id = $_GET['user_id'];
$query=mysqli_query($connect,"SELECT * FROM `users` WHERE `user_id`='$user_id'");										
$urow = mysqli_fetch_array($query);
?>

<div class="main_content_iner ">
	<div class="container-fluid p-0 sm_padding_15px">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="white_card card_height_100 mb_30">
					<div class="white_card_header">
						<div class="box_header m-0">
							<div class="main-title">
								<h3 class="m-0">Edit User Details</h3>
							</div>
						</div>
					</div>

					<div class="white_card_body">
						<form method="post" enctype="multipart/form-data" action="update-user.php">
							
							<div class="mb-3">
								<label class="form-label" for="Username">Userid:</label>
								<input type="text" class="form-control" value="<?php echo $urow['user_id']; ?>" name="user_id">
							</div>
							<div class="mb-3">
								<label class="form-label" for="Username">Username:</label>
								<input type="text" class="form-control" value="<?php echo $urow['username']; ?>" name="username">
							</div>
																			
							<div class="mb-3">
								<label class="form-label" for="First Name">First Name:</label>
								<input type="text" class="form-control" name="fname" value="<?php echo $urow['first_name']; ?>">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="Last Name">Last Name:</label>
								<input type="text" class="form-control" value="<?php echo $urow['last_name']; ?>" name="lname">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="User Email">User Email:</label>
								<input type="email" class="form-control" value="<?php echo $urow['user_email']; ?>" name="user_email">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="User Phone">User Phone:</label>
								<input type="text" class="form-control" value="<?php echo $urow['user_mobile']; ?>" name="user_phone">
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="User Role">User Role:</label>
								<select name="user_role"  class="form-control">
									<option value="<?php echo $urow['user_role']; ?>"><?php echo $urow['user_role']; ?></option>
									<option value="administrator">Administrator</option>
									<option value="manager">Manager</option>
															
								</select>							
							</div>
							
							<div class="input-group mb-3">								
								<img src="../img/users/<?php echo $urow['user_pic']; ?>" alt="<?php echo $urow['user_pic']; ?>">
							</div>
							
							<div class="input-group mb-3">								
								<input type="file" class="form-control" name="user_img">
								<label class="input-group-text" for="User Image">User Image</label>
							</div>
						

							<button type="submit" class="btn btn-primary" name="update-user">Update User</button>
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