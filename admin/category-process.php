  <?php  
  include "config.php";
  

  $statusMsg = '';

//$date = date("Y-m-d h:i:s");

// start upload catImage pic
if(isset($_POST["cname"])){
	$cname = $_POST['cname'];
	$cdesc = $_POST['cdesc'];
	$date = date("Y-m-d");
if( !empty($_FILES["fileImage"]["name"]) ){
	
// File upload path
$targetDir = "uploads/categories/";

$catImage = time().($_FILES["fileImage"]["name"]);
$targetFilePath1 = $targetDir . $catImage;
$fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType1, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["fileImage"]["tmp_name"], $targetFilePath1)){
            // Insert image file name into database


            $sql = "INSERT INTO `category`(`category_name`, `category_desc`, `category_image`, `date_added`) VALUES ('$cname','$cdesc','$catImage','$date')";
            $result = $connect->query($sql);
            if($result){
                $statusMsg = "New Category has been added successfully.";
            }else{
                $statusMsg = "New Category not added, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your Image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.';
    }
}else{
     $noimgsql = "INSERT INTO `category`(`category_name`, `category_desc`, `date_added`) VALUES ('$cname','$cdesc','$date')";
            $noimgresult = $connect->query($noimgsql);
            if($noimgresult){
                $statusMsg = "New Category has been added successfully.";
            }else{
                $statusMsg = "New Category not added, please try again.";
            } 
    // $statusMsg = 'Please select Category Image to upload.';
} 

// Display status message
// echo $statusMsg;
// echo "  --  ";
// echo $cname;
// echo "  --  ";
// echo $cdesc;
// echo "  --  ";
// echo $catImage;
// echo "  --  ";
// echo $date;
echo "<script>alert('$statusMsg')</script>";
header('location: all-categories.php');
}
// end upload catImage pic

  
    ?>