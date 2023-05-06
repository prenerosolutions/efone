  
<?php  
  
include "config.php";
  
  
    
if(isset($_POST['username'])) {
		
	
		
	$fname = $_POST['fname'];
	
		
	$lname = $_POST['lname'];
		
	$username = $_POST['username'];
		
	$password = $_POST['password'];
		
	$email = $_POST['email'];
		
	$phone = $_POST['phone'];
		
	$userrole = 'administrator';
	
	$date = date("Y-m-d h:i:s");


	$sql = "INSERT INTO `users`( 
							`username`, 
							`password`, 
							`first_name`, 
							`last_name`, 
							`user_email`, 							 
							`user_mobile`, 
							`user_role`, 
							`date_added`
							) VALUES (
							'$username',
							'$password',
							'$fname',
							'$lname',
							'$email',
							'$phone',							
							'$userrole',
							'$date')";

		
	$result = $connect->query($sql);
		
	
		
	if($result){
	
		echo'<br>';
	
		echo ' ';
	
		header('location: users.php');

	} else {
	
		echo 'error';

	}
	
}
    
?>