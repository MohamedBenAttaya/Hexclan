<!doctype html>
<?php
    //session_start();
    $database_name = "Projet";
    $con = mysqli_connect("localhost","root","",$database_name);
	mysqli_select_db($con,$database_name);
	session_start();
    /*if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }*/

function modifierProduct($product,$id){
		$database_name = "Projet";
		$con = mysqli_connect("localhost","root","",$database_name);
		mysqli_select_db($con,$database_name);
		$query="UPDATE product SET Quantity=Quantity WHERE id=id";
		if(mysqli_query($con,$query))
		header("refresh:1; url=cart.php");
		else
		echo"Not updated";
        }
		
	?>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/asahi/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 19:24:37 GMT -->
<head>
       <!-- Required meta tags -->
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	   <!-- Bootstrap CSS --> 
	   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	   <!-- Owl Theme Default CSS --> 
	   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	   <!-- Owl Carousel CSS --> 
	   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	   <!-- Animate CSS --> 
	   <link rel="stylesheet" href="assets/css/animate.css">
	   <!-- Flaticon CSS --> 
	   <link rel="stylesheet" href="assets/css/flaticon.css">
	   <!-- Font Awesome CSS --> 
	   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
	   <!-- Nice Select CSS --> 
	   <link rel="stylesheet" href="assets/css/nice-select.css">
	   <!-- Imagelightbox CSS --> 
	   <link rel="stylesheet" href="assets/css/imagelightbox.min.css">
	   <!-- Meanmenu CSS -->
	   <link rel="stylesheet" href="assets/css/meanmenu.css">
	   <!-- Date Picker CSS -->
	   <link rel="stylesheet" href="assets/css/date-picker.css">
	   <!-- Date Picker CSS -->
	   <link rel="stylesheet" href="assets/css/odometer.css">
	   <!-- Style CSS -->
	   <link rel="stylesheet" href="assets/css/style.css">
	   <!-- Responsive CSS -->
	   <link rel="stylesheet" href="assets/css/responsive.css">
	   
	   <!-- Favicon -->
	   <link rel="icon" type="image/png" href="assets/img/favicon.png">
	   <!-- TITLE -->
	   <title>Asahi - Food & Restaurant HTML Template</title>
	   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
		<div class="asahi-nav">
			<div class="navbar-area fixed-top">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="index.html" class="logo">
						<img src="assets/img/asahi-logo.png" alt="Asahi Logo">
					</a>
				</div>

				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="index.html">
								<img src="assets/img/asahi-logo.png" alt="Asahi Logo">
							</a>
	
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Home</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="index.html" class="nav-link">Home One</a>
											</li>
											<li class="nav-item">
												<a href="index-2.html" class="nav-link">Home Two</a>
											</li>
											<li class="nav-item">
												<a href="index-3.html" class="nav-link">Home Three</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Menu</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="menu-standard.html" class="nav-link">Menu Standard</a>
											</li>
											<li class="nav-item">
												<a href="menu-classic.html" class="nav-link">Menu Classic</a>
											</li>
											<li class="nav-item">
												<a href="menu-grid.html" class="nav-link">Menu Grid</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="about.html" class="nav-link">about</a>
											</li>
											<li class="nav-item">
												<a href="faq.html" class="nav-link">FAQ</a>
											</li>
											<li class="nav-item">
												<a href="coming-soon.html" class="nav-link">Coming Soon</a>
											</li>
											<li class="nav-item">
												<a href="404.html" class="nav-link">404 Error</a>
											</li>
											<li class="nav-item">
												<a href="log-in.html" class="nav-link">Log In</a>
											</li>
											<li class="nav-item">
												<a href="sign-up.html" class="nav-link">Sign Up</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle active">Shop</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="shop.html" class="nav-link">Shop</a>
											</li>
											<li class="nav-item">
												<a href="shop-details.html" class="nav-link">Shop Details</a>
											</li>
											<li class="nav-item">
												<a href="checkout.html" class="nav-link">Checkout</a>
											</li>
											<li class="nav-item">
												<a href="cart.html" class="nav-link active">Cart</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Blog</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="blog-grid.html" class="nav-link">Blog Grid</a>
											</li>
											<li class="nav-item">
												<a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="blog-details.html" class="nav-link">Blog Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link">Contact</a>
									</li>
								</ul>
								<div class="others-option">
									<a href="cart.html" class="menu-btn cart-icon">
										<i class="flaticon-shopping-cart"></i>
									</a>
									<a href="tel:+800-987-65-43" class="menu-btn contact-number">
										<i class="flaticon-phone-call"></i> 
										+800-987-65-43
									</a>
									<a href="book-table.html" class="menu-btn book-table">
										Book Table
										<i class="flaticon-right-arrow-forward"></i>
									</a>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="fa fa-times"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="index.html">
									<img src="assets/img/asahi-logo.png" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="fa fa-map-marker"></i>
										Address
										<span>44 Canal Center Plaza #200, Alexandria, VA 22314, USA</span>
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										Email
										<span>asahi@gmail.com</span>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										Phone
										<span>+25462755, 265497466</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>
								<ul>
									<li>
										<a href="log-in.html">Log In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="#">Logout</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->

		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-2">
			<div class="container">
				<div class="page-title-content">
					<h2>Cart</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Cart</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->
		
		<!-- Start Cart Area -->
		<section class="cart-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="cart-table table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th scope="col">Product</th>
											<th scope="col">Name</th>
											<th scope="col">Unit Price</th>
											<th scope="col">Quantity</th>
											<th scope="col">Total</th>
										</tr>
									</thead>
									<tbody>
									
									<?php
									$query = "SELECT * FROM product WHERE IDC=1 ORDER BY id ASC";
									$result = mysqli_query($con,$query);
									if(mysqli_num_rows($result) > 0) {
									$total = 0;
									$shipping=0;
									while ($row = mysqli_fetch_array($result)) {
									?>
									<form action="modifier_commande.php" method="POST">
										<tr>
											<td class="product-thumbnail">
												<a href="#">
													<img src="<?php echo $row["image"]; ?>" alt="item">
												</a>
											</td>

											<td class="product-name"> <?php echo $row["pname"]; ?>
											</td>

											<td class="product-price">
												<span class="unit-amount"><?php echo $row["price"]; ?> Dt</span>
											</td>

											<td class="product-quantity">
												<div class="input-counter">
													<span class="minus-btn">
														<i class="fa fa-minus"></i>
													</span>
													<input type="Number" name="Quantity" id="Quantity" value="<?php echo $row["Quantity"] ?>">
													<span class="plus-btn">
															<i class="fa fa-plus"></i>
														</span>
														
													</div>
												</td>
												<td class="product-subtotal">
												<div class="subtotal-amount" id="result"><?php echo number_format($row["Quantity"] * $row["price"], 2); ?></div>
												<script>
											var js_price="<?php echo $row["price"]; ?>"
											$(document).ready(function(){
											$("#Quantity").on("input", function(){
											// Print entered value in a div box
											$("#result").text($(this).val()* js_price);
											});
											});
											</script>
												<?php
												echo "<a href=supprimer_commande.php?id=".$row['id']." class='remove'>
												<i class='fa fa-trash-o'></i>
												</a>";
												?>
												</td>
											<td>
											<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
												<button class="primary-btn" type="submit" name="modifier">modifier</button>
											</td>
										</form>
										</tr>
										<?php
										$total = $total + ($row["Quantity"] * $row["price"]);
										}
										}
										?>
									</tbody>
								</table>
							</div>

							<div class="cart-buttons">
								<div class="row align-items-center">
									<div class="col-lg-7 col-sm-7 col-md-7">
										<div class="continue-shopping-box">
											<a href="#" class="default-btn">
												Continue Shopping
												<i class="flaticon-right-arrow-forward"></i>
											</a>
										</div>
									</div>
									<?php
									/*<div class="col-lg-5 col-sm-5 col-md-5 text-right">
										<a href="#" class=" default-btn">
											Update Cart
											<i class="flaticon-right-arrow-forward"></i>
										</a>
									</div>*/
									?>
								</div>
							</div>

							<div class="cart-totals">
								<h3>Cart Totals</h3>

								<ul>
									<li>Subtotal <span><?php echo $total; ?> Dt</span></li>
									<li>Shipping <span><?php echo $shipping; ?></span></li>
									<li>Total <span><b><?php echo ($total-$shipping); ?> Dt</b></span></li>
								</ul>
								<a href="#" class="default-btn">
									Proceed to Checkout
									<i class="flaticon-right-arrow-forward"></i>
								</a>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Cart Area -->
       
		<!-- Start Footer Area -->
		<footer class="footer-area ptb-100-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-widget">
							<a href="#">
								<img src="assets/img/asahi-footer-logo.png" alt="Footer Logo">
							</a>
							<p>Sign up to our newsletter to get the latest food item news.</p>
							<form class="subscribe">
								<label>
									<input type="search" class="search-field" placeholder="Email address">
								</label>
								<input type="submit" class="search-submit default-btn-2" value="Sbuscribe">
							</form>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
						<div class="single-widget single-widget-1">
							<h3>USEFUL LINKS</h3>
							<ul class="footer-menu">
								<li>
									<a href="hone-one.html">
										<i class="flaticon-right-arrow-forward"></i> 
										Home
									</a>
								</li>
								<li>
									<a href="#">
										<i class="flaticon-right-arrow-forward"></i>
										About Us
									</a>
								</li>
								<li>
									<a href="#">
										<i class="flaticon-right-arrow-forward"></i>
										Blog Grid
									</a>
								</li>
								<li>
									<a href="contact.html">
										<i class="flaticon-right-arrow-forward"></i>
										Contact Us
									</a>
								</li>
								<li>
									<a href="#">
										<i class="flaticon-right-arrow-forward"></i>
										Privacy Policy
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-widget single-widget-2">
							<h3>ADDRESS</h3>
							<ul>
								<li class="address-s">
									44 Canal Center Plaza #200, Alexandria, VA 22314, USA
								</li>
								<li><a href="#">Hotline: 1900 – 123 456 78</a></li>
								<li><a href="#">Email: asahi@gmail.com</a></li>
								<li><a href="#">Email: info@example.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-widget">
							<h3>OPENING HOURS</h3>
							<ul>
								<li class="footer-border">
									Monday: <span>9.00 AM - 22.00 PM</span>
								</li>
								<li class="footer-border">
									Tuesday: <span>9.00 PM - 22.00 AM</span>
								</li>
								<li class="footer-border">
									Wednesday: <span>9.00 AM - 20.00 PM</span>
								</li>
								<li>
									Thursday: <span>8.00 AM - 22.00 PM</span>
								</li>
								<li>
									Friday: <span>9.00 AM - 22.00 PM</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-3">
						<ul class="social-list">
							<li>
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-youtube-play"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="copy-right">
							<p>
								© 2019 All Rights Reserved-<a href="https://envytheme.com/">EnvyTheme</a>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-3">
						<ul class="bank-card">
							<li>
								<a href="#">
									<img src="assets/img/payment/1.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/payment/2.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/payment/3.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/payment/4.png" alt="">
								</a>
							</li>
					11111111	</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top-area">
			<div class="go-top-wrap">
				<div class="go-top-btn-wrap">
					<div class="go-top go-top-btn">
						<i class="flaticon-arrows"></i>
						<i class="flaticon-arrows"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- End Go Top Area -->

        
        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
		<!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Bootstrap Datepicker JS -->
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
        <!-- Imagelightbox JS -->
		<script src="assets/js/imagelightbox.min.js"></script>
        <!-- Appear JS -->
		<script src="assets/js/jquery.appear.js"></script>
        <!-- Odometer JS -->
		<script src="assets/js/odometer.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/asahi/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 19:24:39 GMT -->
</html>