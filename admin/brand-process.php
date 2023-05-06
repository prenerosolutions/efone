  <?php  
  include "config.php";
  
  
    if(isset($_POST['bname'])) {
		
	$bname = $_POST['bname'];
	$bdesc = $_POST['bdesc'];
	$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO `brands`(
								`brand_name`, 
								`brand_desc`, 
								`date_added`
								) VALUES (
								'$bname',
								'$bdesc',
								'$date')";

		$result = $connect->query($sql);
		//print $sql;
		//die;
		if($result){
	echo'<br>';
	echo ' ';
	header('location: brands.php');
} else {
	echo 'error';
}
	}
    ?>