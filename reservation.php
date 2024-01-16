<?php
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Reservation</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">All about delicieux</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Reservation</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- RESERVATION CONTACT INFO STARTS
				========================================================================= -->
			<div class="container-fluid">
				<div class="row no-gutter-12">
					<div class="col-lg-12 res-contact-info animated" data-animation="fadeInUp" data-animation-delay="400">
						<div class="block">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="caption">
								Our Address<br>
								<div class="line"></div>
								<span>32 NASR CITY ST,<br class="visible-xs"> CAIRO, EG</span>
							</div>
						</div>
						<div class="block">
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="caption">
								Our RESERVATION NUMBER<br>
								<div class="line"></div>
								<span>02 0100 843 112</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. RESERVATION CONTACT INFO ENDS
				========================================================================= -->
			<!-- RESERVATION STARTS
				========================================================================= -->
			<div class="container-fluid reservation" id="reservation">
				<div class="row">
					<div class="leaf"><img src="images/reservation/leaf.png" alt=""></div>
					<section class="backgroundimg">
						<div class="col-lg-6 col-sm-7 col-lg-offset-6 col-sm-offset-5">
							<div class="formcontents">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="row form animated" data-animation="fadeInUp" data-animation-delay="400">
											<form action='https://miraclestudio.design/html/delicieux/reservation.php' method='post' name='ReservationForm' id='ReservationForm'>
												<div class="col-lg-12">
													<div class="herotext">
														<p class="cross-line">
															<span>Book Online</span>
														</p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="fullname" placeholder="Name *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="email" class="form-control" name="uremail" placeholder="Email *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" id="datepicker" class="form-control" name="date1"  placeholder="Date *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="time" placeholder="Time *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" name="numberofpersons" placeholder="Number of Persons *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="branchname" placeholder="Branch Name *">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<textarea rows="5" class="form-control" name="urmessage" placeholder="Message *"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div id='r_message_post'></div>
												</div>
												<div class="col-lg-12">
													<input class="btn btn-default" type='submit' value='SUBMIT' name='r_submitf' id="r_submitf">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-5 img-side img-left">
							<div class="img-holder video">
								<div class="icon"><a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a></div>
								<img src="images/reservation/2.jpg" alt="" >
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- ./ RESERVATION ENDS
				========================================================================= -->
			<div class="delivery light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Delivery At Home, Offices, Party Or Events</h1>
								<div class="button animated" data-animation="fadeInUp" data-animation-delay="500"><a href="#" class="fill-orange">View the Menu</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- OPENING HOURS STARTS
				========================================================================= -->	
			<div class="parallax-3 opening-hours reservation padding-t-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="cross-line animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Opening Hours</span>
								</p>
								<div class="line-2 animated" data-animation="fadeInUp" data-animation-delay="600">Call For Reservation</div>
							</div>
						</div>
					</div>
					<div class="row no-gutter-3 row3 animated" data-animation="fadeInUp" data-animation-delay="800">
						<div class="row-height">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/1.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="white-block">
										<div class="icon"><i class="icon-drink"></i></div>
										<div class="caption">Launch</div>
										<div class="day">Everyday</div>
										<div class="timing">13:00 - 15:00</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/2.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="white-block">
										<div class="icon"><i class="icon-food"></i></div>
										<div class="caption">Desert</div>
										<div class="day">Everyday</div>
										<div class="timing">19:00 - 22:00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutter-3 row2 animated" data-animation="fadeInDown" data-animation-delay="800">
						<div class="row-height">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="dark-block">
										<div class="icon"><i class="icon-breakfast"></i></div>
										<div class="caption">Breakfast</div>
										<div class="day">Everyday</div>
										<div class="timing">08:00 - 10:00</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/3.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="dark-block">
										<div class="icon"><i class="icon-dinner"></i></div>
										<div class="caption">Dinner</div>
										<div class="day">Everyday</div>
										<div class="timing">19:00 - 22:00</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/4.jpg" class="img-responsive center-block" alt=""></div>
							</div>
						</div>
					</div>
					<div class="row reservation-number">
						<div class="col-lg-12 animated" data-animation="flipInX" data-animation-delay="600">
							<div class="icon"><i class="icon-divider"></i></div>
							<div class="caption">
								RESERVATION NUMBER<br>
								<span>02 0100 843 112</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. OPENING HOURS ENDS
				========================================================================= -->			
			<!-- NEWSLETTER STARTS
				========================================================================= -->  
			<div class="container-fluid newsletter">
				<div class="row row1">
					<div class="col-lg-4 col-lg-offset-4">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<h1>STAY UP TO DATE</h1>
							<div class="description">Sign up to  newsletter for the latest on all things Suitsupply</div>
						</div>
						<form class="form-inline animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="form-group">							
								<input type="email" class="form-control" id="newsletter" placeholder="Enter you e-mail Address">
							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
			<!-- /. NEWSLETTER STARTS
				========================================================================= -->  
		</div>
		<!-- FOOTER STARTS
			========================================================================= -->  
		<footer>
			<div class="container-fluid">
				<div class="row row1">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="logo animated" data-animation="fadeInUp" data-animation-delay="400"><img src="images/logos/f-logo.png" class="img-responsive center-block" alt=""></div>
						<ul class="social-icons animated" data-animation="fadeInUp" data-animation-delay="600">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						</ul>
						<div class="totop">
							<a href="#" class="scrollup"><img src="images/icons/to-top/to-top.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="dark-texture-02">
				<div class="container">
					<div class="row row2">
						<div class="col-lg-6 col-md-6">
							<ul class="links">
								<li><a href="#">Home</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Use of Terms</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="copyright">© 2015 delicieux restaurant is proudly Powered By <a href="#">Mohamed Arafa</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /. FOOTER ENDS
			========================================================================= -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>				
		<script src="js/bootstrap-dropdownhover.js"></script>		
		<script src="js/ui/jquery-ui.js"></script>
		
		<!-- Animation --> 
		<script type="text/javascript" src="js/animation/jquery.appear.js"></script>		
		<!-- Parallax -->
		<script type="text/javascript" src="js/parallax/jquery.parallax-1.1.3.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.localscroll-1.2.7-min.js"></script> 
		<script type="text/javascript" src="js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
		<!-- ScrollTo --> 
		<script src="js/nav/jquery.nav.js"></script> 		
		<!-- Isotope --> 
		<script type="text/javascript" src="js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="js/isotope/custom-isotope-mansory.js"></script>
		<!-- Retina --> 
		<script type="text/javascript" src="js/retina/retina.js"></script> 
		<!-- Owl Carousel --> 
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<!-- FitVids --> 
		<script type="text/javascript" src="js/fitvids/jquery.fitvids.js"></script>
		<!-- Magnific Popup core JS file -->
		<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.js"></script>		
		<!-- AJAX Contact Form --> 			
		<script type="text/javascript" src="js/contact/contact-form.js"></script>
		<!-- AJAX Reservation Form --> 			
		<script type="text/javascript" src="js/contact/reservation.js"></script>
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>
	</body>

<!-- Mirrored from miraclestudio.design/html/delicieux/reservation.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 12:06:30 GMT -->
</html>