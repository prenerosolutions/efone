  <footer class="footer bg-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Address:</span>Based in London, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:00447535467381">+44 7535 467381</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:">sales@e-fone.co.uk</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>

                                <ul class="links">
                                    <li><a href="#">Help & FAQs</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="dashboard.php">My Account</a></li>
                                    <li><a href="product-categories.php">Categories</a></li>
                                   
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Quick Links</h4>

                                <ul class="links">
                                    <li><a href="category-details.php?category_id=1">Data Cables</a></li>
                                    <li><a href="category-details.php?category_id=3">OTG</a></li>
                                    <li><a href="category-details.php?category_id=6">Apple Watches</a></li>
                                    <li><a href="category-details.php?category_id=8">Travel Adopters</a></li>
                                    <li><a href="category-details.php?category_id=9">Head Phones</a></li>
                                    <li><a href="category-details.php?category_id=10">Car MP3</a></li>
                                    <li><a href="category-details.php?category_id=12">Power Banks</a></li>
                                   
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Subscribe newsletter</h4>
                                <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                                </p>
                                <form action="#" class="mb-0">
                                    <input type="email" class="form-control m-b-3" placeholder="Email address" required>

                                    <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                                </form>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom">
                    <div class="container d-sm-flex align-items-center">
                        <div class="footer-left">
                            <span class="footer-copyright">© e-fone.co.uk 2023. All Rights Reserved. Designed By <a href="https://www.prenero.com/">Prenero Solutions</a></span>
                        </div>

                        <div class="footer-right ml-auto mt-1 mt-sm-0">
                            <div class="payment-icons">
                                <span class="payment-icon visa" style="background-image: url(img/payments/payment-visa.svg)"></span>
                                <span class="payment-icon paypal" style="background-image: url(img/payments/payment-paypal.svg)"></span>
                                <span class="payment-icon stripe" style="background-image: url(img/payments/payment-stripe.png)"></span>
                                <span class="payment-icon verisign" style="background-image:  url(img/payments/payment-verisign.svg)"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .footer-bottom -->
            </div>
            <!-- End .container -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="product-categories.php">Categories</a>
                        <ul>
							<?php
											$csql = "SELECT * FROM `category`"; 
								
												$cresult = $connect->query($csql);
								
												while($crow = mysqli_fetch_array($cresult)){
									
												?>
                            <li><a href="category-details.php?category_id=<?php echo $crow['category_id'];?>"><?php echo $crow['category_name'] ?></a></li>
                            <?php
												}
													?>
							
                        </ul>
                    </li>
                   
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
							Special Offer!
						</a>
                    </li>
                    
                </ul>

                <ul class="mobile-menu">
                    <li><a href="dashboard.php">My Account</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="blog.php">Blog</a></li>                   
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="login.php" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
      
    </div>
   

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="index.php">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="category-details.php" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
       
        <div class="sticky-info">
            <a href="dashboard.php" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.php" class="">
                <i class="icon-shopping-cart position-relative">
					<span class="cart-count badge-circle">3</span>
				</i>Cart
            </a>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>



<script>
    // Function to update the cart products
    function updateCartProducts() {
        $.ajax({
            url: 'cart.php',
            method: 'GET',
            success: function(response) {
                $('#cart-products').html(response);
            }
        });
    }

    // Call the updateCartProducts function when the page loads
    $(document).ready(function() {
        updateCartProducts();
    });

    // Handle the form submission and add the product to the cart using AJAX
    $('body').on('submit', 'form', function(event) {
        event.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var method = form.attr('method');
        var data = form.serialize();

        $.ajax({
            url: url,
            method: method,
            data: data,
            success: function(response) {
                updateCartProducts();
                console.log(response);
            }
        });
    });
</script>


    <!-- Plugins JS File -->
    
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
   
<script src="assets/js/bootstrap.bundle.min.js"></script>
  
<script src="assets/js/plugins.min.js"></script>
  
<script src="assets/js/nouislider.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
<script>(function(){var js = "window['__CF$cv$params']={r:'7c113b59e832fcc9',m:'5fbr6yChcM2VGmNKHK88XTNF2eCgGKJhjxEDt.7P7js-1683040654-0-AS9jb5k9yKDdP2J7yEkg5kaHQIAyfXb+e0yZNhd4cPXY',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/b5e45436/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>



</html>