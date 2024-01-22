<?php
require "./config/app.php";
session_start();
$apps=new App;
if(isset($_POST['submitf']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$req="SELECT * FROM user WHERE email=:email";
	$tab=[
		"email"=>$email,
		"password"=>$password
	];
	$des="./index.php";
	$apps->se_connecter_client($req,$tab,$des);
}
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-9">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Login</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">For Sign in our Restaurant</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Login</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg ">
			<!-- GET IN TOUCH STARTS
				========================================================================= -->	
			<!-- Google Map Ends -->
			<div class="login-page">			
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Sign In</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="600">One morning, when Gregor Samsa woke from troubled dreams, he found himself<br>transformed in his bed into a horrible vermin. </div>
							</div>
						</div>
					</div>
					<form method="POST" action="./login.php">
						<div class="row animated" data-animation="fadeInUp" data-animation-delay="800">
							<div class="col-lg-6 col-lg-offset-3 center">
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Mot de passe">
								</div>
								<div id='message_post'></div>
								<input class="btn btn-default" type='submit' value='Login' name='submitf' id="submitf">
							</div>
						</div>
					</form>
					<div class="row animated" data-animation="fadeInUp" data-animation-delay="1000">
						<div class="col-lg-12">
							<ul class="links">
								<li><a href="./signup-my-account.php">-  Creer un comte</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<!-- /. GET IN TOUCH ENDS
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

<!-- Mirrored from miraclestudio.design/html/delicieux/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 12:07:17 GMT -->
</html>