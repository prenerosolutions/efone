
<div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <?php
session_start();
include('config.php');
// Check if the product ID is submitted
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Check if the cart array exists in the session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    if (!in_array($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
        echo "Product added to cart.";
    } else {
        echo "Product is already in the cart.";
    }
}

// Display the cart products
if (!empty($_SESSION['cart'])) {
    include('config.php'); // Include the config file

    $cart_products = $_SESSION['cart'];

    foreach ($cart_products as $product_id) {
        // Retrieve product details from the database based on the product ID
        $sql = "SELECT * FROM products WHERE product_id = $product_id";
        $result = $connect->query($sql);
        $product = mysqli_fetch_assoc($result);

        // Display the cart product details
        echo '<div class="product">';
        echo '<div class="product-details">';
        echo '<h4 class="product-title">';
        echo '<a href="product.php?product_id=' . $product['product_id'] . '">' . $product['product_name'] . '</a>';
        echo '</h4>';
        echo '<span class="cart-product-info">';
        echo '<span class="cart-product-qty">1</span> × $' . $product['product_price'];
        echo '</span>';
        echo '</div>';
        echo '<figure class="product-image-container">';
        echo '<a href="product.php?product_id=' . $product['product_id'] . '" class="product-image">';
        echo '<img src="assets/images/products/' . $product['product_image'] . '" alt="product" width="80" height="80">';
        echo '</a>';
        echo '<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>';
        echo '</figure>';
        echo '</div>';
    }
} else {
    echo 'Your cart is empty.';
}
?>

                                      
										
										
                                    </div>
                                 
									

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">$134.00</span>
                                    </div>
                                    

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                   
                                </div>
                               
                            </div>
                           
                        </div>