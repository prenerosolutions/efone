<?php
include('header.php');
include('sidebar.php');
$assigned = 0;
?>
  

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Product</h4>
                  <p class="card-description">
                    Fill The Form Below
                  </p>
                  <form class="forms-sample" action="product-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Product  Name</label>
                      <input type="text" class="form-control" name="pname" id="pname" placeholder="Enter Product Name" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Product  Brand</label><br>
                       <?php                 
			                $brandSql = "SELECT * FROM `brands`"; 
                			$brandResult = $connect->query($brandSql);
                  			while($brow = mysqli_fetch_array($brandResult)){
                  
?>
  <div style="margin:10px; float: left;">
    <input type='radio' name='brand' ng-model='mValue' class="" value="<?php echo $brow['brand_id'] ?>" /> <?php echo $brow['brand_name']; ?>
  </div>
                     
<?php
}
?>
                    </div>
                    <br>
                    <!-- <form action="" method="post" name="myform"> -->
					  
					   <div class="form-group">
              <label>Product Category</label>
              <select name="category" id="category_id" class="form-control" onchange="checkit(this)" >
                <option value="">Select Category</option>
                  
                <?php
                 
                $sql = "SELECT * FROM `category`"; 
                $result = $connect->query($sql);                 
                while($crow = mysqli_fetch_array($result)){
                ?>
                   <option value="<?php echo $crow['category_id'] ?>"> <?php echo $crow['category_name'] ?> </option>
                <?php
        			}
		        ?>
                
                </select>
              
            </div>
            <!-- </form> -->
            <script type="text/javascript">
                    // $(document).ready(function() { //wait until body loads

                    function checkit(that) {
                      if (that.value != "") {
                        document.getElementById("ifYes").style.display = "block";

                        if(window.XMLHttpRequest) {
                          xmlhttp = new XMLHttpRequest();
                        } else {
                          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                          if(this.readyState == 4 && this.status == 200) {
                            document.getElementById("sub_category_id").innerHTML = this.responseText;
                          }
                        }
                        xmlhttp.open("GET","product_helper.php?value="+that.value, true);
                        xmlhttp.send();
                        
                      } else {
                        document.getElementById("ifYes").style.display = "none";
                        document.cookie = "myJavascriptVar = 0";
                      }
                    }

                    function checkSubit(that){
                       if(window.XMLHttpRequest) {
                          xmlhttp = new XMLHttpRequest();
                        } else {
                          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                         
                          if(this.readyState == 4 && this.status == 200) {
                            document.getElementById("").innerHTML = this.responseText;
                          }
                        }
                        xmlhttp.open("GET","sub_catg_helper.php?value="+that.value, true);
                        xmlhttp.send();
                        
                      } 
                    

                   
                    </script>
					  
					  <div class="form-group" id="ifYes"  style="display: none;">
					    <label id="">Product Sub Category</label>
           
              <div class="form-check">
                <select name="subcategory" id="sub_category_id" class="form-control" onchange="checkSubit(this)" >
                  <option value="">Select Sub Category</option>
                  		<?php
                 			$sql = "SELECT * FROM `sub_categories`"; 
			                $result = $connect->query($sql);
            	               while($crow = mysqli_fetch_array($result)){
                		?>
                            <option value="<?php echo $crow['category_id'] ?>"> <?php echo $crow['category_name'] ?> </option>
                		<?php
					        }
						?>
                 </select>
               </div>
					
					  </div>
						
						
						
						
						
					  <div class="form-group">
                      <label for="Short Description">Short Description </label>
                      <textarea class="form-control" style="height: 100px;" name="sdesc" id="sdesc" rows="4"></textarea>
                    </div>
					  
					 <div class="form-group">
                      <label for="Quantity">Quantity:</label>
                      <input type="text" class="form-control" name="qty" id="qty" placeholder="Quantity">
                    </div>
					  
					  <div class="form-group">
                      <label for="Price">Price:</label>
                      <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                    </div>
					  
					  <div class="form-group">
                      <label for="Price">Shopkeeper Price:</label>
                      <input type="text" class="form-control" id="sprice" name="sprice" placeholder="Shopkeeper Price">
                    </div>
					  
					   <div class="form-group">
                      <label for="Condition">Condition:</label>
                      <input type="text" class="form-control" id="cond" name="cond" placeholder="Product Condition">
                    </div>
					  
					  <div class="form-group">
                      <label for="Condition">Featured Image:</label>
						   <!--<input type="file" name="fileToUpload" class="file-upload-default" title="Select Image">-->
                      <input type="file" class="btn btn-default" name="fileToUpload" title="Select file">
                    </div>
                    
					   <div class="form-group">
                      <label for="Long Description">Long Description</label>
                      <textarea class="form-control" style="height: 200px;"  name="desc" id="sdesc" rows="8"></textarea>
                    </div>
                  
                    
                    <button type="submit" class="btn btn-primary me-2" name="addProduct"><i class="mdi mdi-file-plus"></i> Add Product</button>
                    
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
	
	<?php
		  include('footer.php');
		  ?>