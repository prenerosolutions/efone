
<?php


session_start();

$total_price = 0;
$total_item = 0;

$output = '<div class="dropdown-menu mobile-cart">                                
	<a href="#" title="Close (Esc)" class="btn-close">×</a>                                
	<div class="dropdownmenu-wrapper custom-scrollbar">                                    
		<div class="dropdown-cart-header">Shopping Cart</div>           
		
		<div class="dropdown-cart-products"> ';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '                                   
			
			
			
			<div class="product">                                            
				<div class="product-details">                                                
					<h4 class="product-title">                                                    
						<a href="#">'.$values["product_name"].'</a>                                                
					</h4>                                                
					<span class="cart-product-info">                                                    
						<span class="cart-product-qty">'.$values["product_quantity"].'</span> × £ '.$values["product_price"].'                                                
					</span>                                            
				</div>                                            				                                            
				<figure class="product-image-container">                                                
					<a href="#" class="product-image">                                                    
						<img src="img/products/'.$values["product_img"].'" alt="product" width="80" height="80">
					</a>                                                
					<a href="#" class="btn-remove" id="'. $values["product_id"].'" title="Remove Product"><span>×</span></a>
				</figure>                                        
			</div>
                        
		</div>';
              $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;
	}
	$output .= '                      
                                    
		<div class="dropdown-cart-total">                                        
			<span>SUBTOTAL:</span>                                        
			<span class="cart-total-price float-right">£ '.number_format($total_price, 2).'</span>                                    
		</div>';
}
else
{
	$output .= '<p>
	
	Your Cart is Empty
	</p>';
}
$output .= ' <div class="dropdown-cart-action">                                        
			<a href="cart.php" class="btn btn-gray btn-block view-cart">
				View Cart
			</a>                                        
			<a href="checkout.php" class="btn btn-dark btn-block">
				Checkout
			</a>                                    
		</div>                                                                   
	</div>                                                           
</div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'£' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);

    ?>                                                                  
		
		
		
		