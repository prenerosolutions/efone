<?php   
include "config.php";
      
if(isset($_POST['username'])) {	
	$user_id = $_POST['user_id'];
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
				$sql = "UPDATE `users` SET  `username`='$username',
											`password`='$final_pass',
											`first_name`='$fname',
											`last_name`='$lname',
											`user_email`='$email',
											`user_pic`='$userImg',
											`user_mobile`='$phone',
											`user_role`='$userrole',
											`date_added`='$date' WHERE `user_id`='$user_id'";
			
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
		$sql = "UPDATE `users` SET  `username`='$username',
											`password`='$final_pass',
											`first_name`='$fname',
											`last_name`='$lname',
											`user_email`='$email',											
											`user_mobile`='$phone',
											`user_role`='$userrole',
											`date_added`='$date' WHERE `user_id`='$user_id'";
			
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