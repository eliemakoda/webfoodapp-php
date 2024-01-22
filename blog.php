<?php
require "./config/app.php";
session_start();
$req="SELECT * FROM publication WHERE 1";
$apps= new App;
$posts= $apps->SelectionnerTout($req);
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-6">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Blog</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">ALL LASTEST NEWS ABOUT OUR RESTARANT</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Blog</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- LATEST NEWS STARTS
				========================================================================= -->
			<div class="blog" id="blog">
				<div class="container">
					<!-- Post Starts -->
					<?php
					if(isset($posts)&& ($posts!=null)):
						foreach($posts as $post):
							$im= explode(',',$post->images)
					?>
					<div class="row blog-post">
						<div class="col-lg-8 col-md-8 animated" data-animation="fadeIn" data-animation-delay="800">
							<div class="picture"><img src="images/<?php echo $im[0];?>" class="img-responsive center-block" alt=""></div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="blog-contents animated" data-animation="fadeIn" data-animation-delay="1000">
								<h1 class="post-title"><a href="#"><?php echo $post->title;?></a></h1>
								<div class="post-metas"><?php echo $post->date;?> <a class="" href="#">Recipe</a></div>
								<div class="line"></div>
								<div class="post-desc">
									
								<?php
								$description = $post->description;
								$words = str_word_count($description, 1); // Divise la chaîne en mots
								$first20Words = array_slice($words, 0, 20); // Sélectionne les 20 premiers mots
								echo implode(' ', $first20Words); // Affiche les mots séparés par un espace
							?>
							</div>
								<div class="button"><a class="fill-orange" href="blog-details-video.php?id=<?php echo $post->id;?>">Voir plus...</a></div>
							</div>
						</div>
					</div>
					<?php
					endforeach;
				endif;
					?>
				<!-- fin des publication -->
					<!-- Pagging Starts -->
					<div class="row">
						
						
					</div>
					<!-- Pagging Ends -->
				</div>
			</div>
			<!-- /. LATEST NEWS ENDS
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

<!-- Mirrored from miraclestudio.design/html/delicieux/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 12:07:06 GMT -->
</html>