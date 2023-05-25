<?php   
include "config.php";
      
if(isset($_POST['username'])) {					
	$fname = $_POST['fname'];				
	$lname = $_POST['lname'];		
	$username = $_POST['username'];		
	$password = $_POST['password'];		
	$email = $_POST['user_email'];		
	$phone = $_POST['user_phone'];		
	$userrole = $_POST['user_role'];		
	$date = date("Y-m-d h:i:s");
		  
	if (!empty($_FILES["user_img"]["name"])) {        
		$targetDir = "../img/users/";        
		$userImg = $_FILES["user_img"]["name"];       
		$targetFilePath = $targetDir . $userImg;       
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);       
		$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["user_img"]["tmp_name"], $targetFilePath)) {
				
				$final_pass = md5($password);
				$sql = "INSERT INTO `users`(
											`username`, 
											`password`, 
											`first_name`, 
											`last_name`, 
											`user_email`, 
											`user_pic`, 
											`user_mobile`, 
											`user_role`, 
											`date_added`
											) VALUES (
											'$username',
											'$final_pass',
											'$fname',
											'$lname',
											'$email',
											'$userImg',
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
			} else {                
				$statusMsg = "Sorry, there was an error uploading your image.";           
			}      
		} else {          
			$statusMsg = "Only JPG, JPEG, PNG, and GIF files are allowed to upload.";      
		}   
	} else {     
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
											'$final_pass',
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
    echo "<script>alert('$statusMsg')</script>";
    header('location: users.php');																			
}    
?>