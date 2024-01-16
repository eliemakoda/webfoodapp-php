<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FoodAPP</title>
		<link href="css/all-stylesheets.css" rel="stylesheet">

	</head>
	<body>
	
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>

		<div id="preloader">
			<div id="status">
				<a href="./admin/">
				<div class="logo"><img src="images/logos/logo-nav.png" alt=""></div></a>
				<div class="sk-cube-grid">
					<div class="sk-cube sk-cube1"></div>
					<div class="sk-cube sk-cube2"></div>
					<div class="sk-cube sk-cube3"></div>
					<div class="sk-cube sk-cube4"></div>
					<div class="sk-cube sk-cube5"></div>
					<div class="sk-cube sk-cube6"></div>
					<div class="sk-cube sk-cube7"></div>
					<div class="sk-cube sk-cube8"></div>
					<div class="sk-cube sk-cube9"></div>
				</div>
			</div>
		</div>
	
		<nav class="navbar yamm navbar-default fill-black normal">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-sm visible-xs light-logo" href="./admin/"><img src="images/logos/logo-nav.png" alt=""></a>
					<a class="navbar-brand visible-sm visible-xs dark-logo" href="./admin/"><img src="images/logos/logo-nav-dark.png" alt=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInLeft">
							<li class="pull-left"><a class="navbar-brand hidden-sm hidden-xs light-logo" href="./admin/"><img src="images/logos/logo-nav.png" alt=""></a> <a class="navbar-brand hidden-sm hidden-xs dark-logo" href="#"><img src="images/logos/logo-nav-dark.png" alt=""></a></li>
						<li class="dropdown shop_cart pull-right">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="yamm-content">
										<div class="shop_cart_content">
											<h4>Shopping Cart</h4>
											<div class="cart_items">
												<div class="item clearfix">
													<a href="#"><img src="images/shop/menu/1.jpg" alt=""></a>
													<div class="item_desc">
														<div class="row1 clearfix">
															<a href="#">Food Name</a>
															<div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
														</div>
														<div class="row2 clearfix">
															<div class="star">
																<ol>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ol>
															</div>
															<span class="item_quantity">x 2</span>													
															<span class="item_price">$12.89</span> 
														</div>
													</div>
												</div>
												<!-- End item -->
												<div class="item clearfix">
													<a href="#"><img src="images/shop/menu/2.jpg" alt=""></a>
													<div class="item_desc">
														<div class="row1 clearfix">
															<a href="#">Food Name</a>
															<div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
														</div>
														<div class="row2 clearfix">
															<div class="star">
																<ol>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ol>
															</div>
															<span class="item_quantity">x 2</span>													
															<span class="item_price">$12.89</span> 
														</div>
													</div>
												</div>
												<!-- End item -->
												<div class="total-price clearfix"> 
													<span class="caption">Total</span>
													<span class="shop_checkout_price">$150.99</span>
												</div>
												<div class="shop_action clearfix"> 
												<a href="reservation.php" class="transparent-grey"> <button class="btn btn-dark pull-left">Check out</button></a>
												<a href="shop-cart.php" class="transparent-grey"> <button class="btn2 btn-dark pull-right">View Cart</button></a>
												</div>
											</div>
											<!-- End cart items -->
										</div>
										<!-- End shop cart content -->
									</div>
								</li>
							</ul>
						</li>
						<li class="reservation pull-right hidden-xs hidden-sm hidden-md"><a href="reservation.php" class="transparent-grey">Book Now</a></li>
						<li class="social-header pull-right hidden-xs hidden-sm hidden-md"><a href="#" class="transparent-grey"><i class="fa fa-facebook"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-twitter"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-instagram"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-tripadvisor"></i></a></li>
						<li class="dropdown">
							<a href="index.php" class=" nav-menu" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">HOME</a>
						
						</li>
						<li class="dropdown">
							<a href="our-menu.php" class="dropdown-toggle nav-menu" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>

						</li>
						<li><a href="reservation.php" class="nav-menu">RESERVATION</a></li>
						<li class="dropdown">
							<a href="blog.php" class="-toggle nav-menu" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
						
								</li>
								
						<li class="dropdown">
							<a href="shop-cart.php" class="dropdown-toggle nav-menu" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">CARTS</a>
						
						</li>
						<li><a href="contact-us.php" class="nav-menu">CONTACT</a></li>
						<li><a href="login.php" class="nav-menu">LOGIN</a></li>
						<li><a href="signup-my-account.php" class="nav-menu">SIGNUP</a></li>
						<li><a href="about-us.php" class="nav-menu">ABOUT US </a></li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>