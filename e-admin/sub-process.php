<?php   
include "config.php";

if(isset($_POST["sub_name"])){    
	$prod_ctg = $_POST['prod_ctg'];	
	$sub_name = $_POST['sub_name'];			
	$date = date("Y-m-d");

	if( !empty($_FILES["subctg_img"]["name"]) ){	
		// File upload path
		$targetDir = "../img/sub-categories/";
		$catImage = $_FILES["subctg_img"]["name"];
		$targetFilePath1 = $targetDir . $catImage;
		$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);    
		// Allow certain file formats   
		$allowTypes = array('jpg','png','jpeg','gif');
   
		if(in_array($fileType1, $allowTypes)){        
			// Upload file to server       
			if(move_uploaded_file($_FILES["subctg_img"]["tmp_name"], $targetFilePath1)){           
				// Insert image file name into database           
				$sql = "INSERT INTO `sub_categories`(
													`category_id`, 
													`sub_ctg_name`, 
													`sub_ctg_img`, 
													`date_added`
													) VALUES (
													'$prod_ctg', 
													'$sub_name',
													'$catImage',
													'$date')";           
				$result = $connect->query($sql);           
				if($result){                
					$statusMsg = "New Sub-Category has been added successfully.";           
				}else{               
					$statusMsg = "New Sub-Category not added, please try again.";           
				}        
			}else{           
				$statusMsg = "Sorry, there was an error uploading your Image.";       
			}   
		}else{      
			$statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';   
		}
	}else{    		     
		$noimgsql = "INSERT INTO `sub_categories`(
												`category_id`, 
												`sub_ctg_name`, 
												`date_added`
												) VALUES (
												'$prod_ctg', 
												'$sub_name',
												'$date')";
            
		$noimgresult = $connect->query($noimgsql);
            
		if($noimgresult){                
			$statusMsg = "New Sub-Category has been added successfully.";           
		}else{                
			$statusMsg = "New Sub-Category not added, please try again.";           
		} 
	}	
	echo "<script>alert('$statusMsg')</script>";
	header('location: sub-categories.php');
}
// end upload catImage pic  
    ?>