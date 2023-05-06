  <?php  
  include "config.php";
  $result = false;
  session_start();

  	$pname = $_POST['pname'];

						// $checkBox = implode(',', $_POST['Days']);
	// $category = implode(',', $_POST['category']);
	// $category = $_POST['category'];
	$brand = $_POST['brand'];
	$category = $_SESSION['category_id'];
	$subCategory = $_SESSION['sub_ctg_id'];
	$sdesc = $_POST['sdesc'];
	$cond = $_POST['cond'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$sprice = $_POST['sprice'];
	 //$img_name=basename($_FILES["fileToUpload"]["name"]);
	$desc = $_POST['desc'];
	
	$date = date("Y-m-d h:i:s");
	echo $pname; echo "  -category-  "; echo $category;
	echo "  -sub category-  "; echo $brand;
	echo "  -short description -  "; echo $sdesc;
	echo "  - condition - "; echo $cond;
// start upload profile pic
if(isset($_POST["addProduct"])){
	if( !empty($_FILES["fileToUpload"]["name"]) ){
		
  // File upload path
$targetDir = "uploads/products/";

$profile = time().($_FILES["fileToUpload"]["name"]);
$targetFilePath1 = $targetDir . $profile;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database
            // $insert = $connect->query("UPDATE `employee` SET `dp`= '$profile' WHERE `employee_code`= $employee_code");


$sql = "INSERT INTO `products`(
								`product_name`, 
								`product_category`, 
								`sub_category`, 
								`product_brand`,
								`short_desc`, 
								`product_qty`, 
								`product_image`, 
								`product_price`, 
								`product_condition`,
								`shopkeeper_price`, 
								`long_desc`,
								`date_added`
								) VALUES (
								'$pname',
								'$category',
								'$subCategory',
								'$brand',
								'$sdesc',
								'$qty',
								'$profile',
								'$price',
								'$cond',
								'$sprice',
								'$desc',
								'$date')";

$result = $connect->query($sql);


            if($result){
                $statusMsg = "Profile image has been uploaded successfully.";
            }else{
                $statusMsg = "Fial to add Product, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select Profiel Image to upload.';
}

// Display status message
echo $statusMsg;
echo "<script>alert('$statusMsg')</script>";
if($result){
	echo'<br>';
	echo ' ';
	header('location: all-products.php');
} else {
	echo'error';
}
}
// end upload profile pic

  
 

    ?>