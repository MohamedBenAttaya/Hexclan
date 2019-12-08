<!doctype html>
<!doctype html>
<html lang="zxx">

<?php
      include "../Core/produitCore.php";
      include "../Core/photoCore.php";


$produitCoreInstance=new produitCore();
$listProduits = $produitCoreInstance->afficherListProduits();


?>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/asahi/menu-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 19:24:29 GMT -->
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
												<a href="index.php" class="nav-link">Home One</a>
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
										<a href="#" class="nav-link dropdown-toggle active">Menu</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="menu-standard.html" class="nav-link">Menu Standard</a>
											</li>
											<li class="nav-item">
												<a href="menu-classic.html" class="nav-link">Menu Classic</a>
											</li>
											<li class="nav-item">
												<a href="menu-grid.php" class="nav-link active">Menu Grid</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Pages</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="about.html" class="nav-link active">about</a>
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
										<a href="#" class="nav-link dropdown-toggle">Shop</a>
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
												<a href="cart.html" class="nav-link">Cart</a>
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
		<div class="page-title-area item-bg-4">
			<div class="container">
				<div class="page-title-content">
					<h2>Menu Grid</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Menu Grid</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->
		
		<!-- Start Delicious Menu Area -->
		<section class="delicious-menus-area ptb-100">
			<div class="container">
				<div class="delicious-menu-wrap">
					<div class="section-title">
						<h2>Check Our <span>Delicious Menu</span></h2>
					</div>
					<div class="row">

						<?php foreach($listProduits as $row){ ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-delicious-menu">
								<div class="menu-list-img">
									<img src="http://localhost/projet/<?PHP echo $row['photo']; ?>" alt="Delicious" style="height :110px; width: 110px;">
									<div class="recommend">
										<a href="#">Recommended</a>
									</div>
								</div>
								<div class="delicious-menu-text">
									<h3><?PHP echo $row['nom']; ?></h3>
									<p><?PHP echo $row['description']; ?></p>
									<span class="lg-text"><?PHP echo $row['prix']; ?> TND</span>
								</div>
							</div>
						</div>
						<?php } ?>
						
				</div>
			</div>
		</section>
		<!-- End Delicious Menu Area -->

		<!-- Start Speacial Offers Area -->
		
		<!-- End Speacial Offers Area -->
       
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
						</ul>
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

<!-- Mirrored from templates.envytheme.com/asahi/menu-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 19:24:29 GMT -->
</html>