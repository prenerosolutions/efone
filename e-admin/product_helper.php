<?php 
include "config.php";
session_start();

$categoryId = $_GET['value'];
$_SESSION['category_id'] = $categoryId;
                            	
$sql = "SELECT * FROM `sub_categories` where `category_id` = '$categoryId'"; 								
$result = $connect->query($sql);
									
if (mysqli_num_rows($result)>= 1) {                    	                    
	while($prow = mysqli_fetch_array($result)){                
?>                      
<option value="<?php echo $prow['sub_ctg_id'] ?>">
	<?php echo $prow['sub_ctg_name'] ?>
</option>                                       
<?php               
	}             
} else {              
?>              
<option value="">
	<?php echo "No sub category found"; ?>
</option>                
<?php                	               
	$_SESSION['sub_ctg_id'] = "0"; 
} 
?>   
<script src="vendors/js/vendor.bundle.base.js"></script>  
<script src="vendors/chart.js/Chart.min.js"></script> 
<script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>  
<script src="vendors/progressbar.js/progressbar.min.js"></script>   
<script src="js/off-canvas.js"></script>  
<script src="js/hoverable-collapse.js"></script>  
<script src="js/template.js"></script>  
<script src="js/settings.js"></script>  
<script src="js/todolist.js"></script>    
<script src="js/jquery.cookie.js" type="text/javascript"></script>  
<script src="js/dashboard.js"></script> 
<script src="js/Chart.roundedBarCharts.js"></script>   


