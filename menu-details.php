<?php
require './config/app.php';
$apps= new App;
$id_menu=$_GET['id_menu']?$_GET['id_menu']:1;
$sql= "SELECT * FROM menu WHERE id=$id_menu;";
$menus=$apps->SelectionnerUn($sql);
$repmen="SELECT * FROM  menureview WHERE id_menu=$id_menu";
$reps= $apps->SelectionnerTout($repmen);
$sqlmen="SELECT * FROM menu WHERE 1 LIMIT 1;";
$mens=$apps->SelectionnerTout($sqlmen);
if(isset($_POST['submit']))
{
	$comment= $_POST['commentaire'];
	$sql="INSERT INTO menureview(revmessage, id_menu) VALUES(:revmessage,:id_menu)";
	$tab=[
		":revmessage"=>$comment,
		":id_menu"=>$id_menu
	];
	$dest="./menu-details.php";
	$apps->inserer($sql,$tab,$dest);
}
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Menu</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">BROWSE ALL DELICIOUS FOODS CATEGORY</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <a href="#">Menu</a> <span>Menu Details</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- MENU DETAILS STARTS
				========================================================================= -->  
			<div class="container menu-details">
				<div class="row">
					<?php
					if(isset($menus)&&($menus!=null)):
					?>
					<!-- Flex Slider Starts -->
					<div class="col-lg-6 col-md-6 pics-gallery" data-animation="fadeInUp" data-animation-delay="200">
						<div id="slider" class="flexslider">
							<ul class="slides">
								<?php
									$img= explode(',',$menus->images);
									foreach($img as $im):
								?>
								<li>
									<img src="images/<?php echo $im;?>" alt="" >
									<a class="image-popup-vertical-fit" href="images/<?php echo $im;?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
								<?php
								endforeach;
								?>
							</ul>
						</div>
						<div id="carousel" class="flexslider">
							<ul class="slides">
							<?php
									$img= explode(',',$menus->images);
									foreach($img as $im):
								?>
								<li>
									<img src="images/<?php echo $im;?>" alt="">
								</li>
								<?php
								endforeach;
								?>
							
							</ul>
						</div>
					</div>
					<!-- Flex Slider Ends -->
					<div class="col-lg-6 col-md-6 animated" data-animation="fadeInUp" data-animation-delay="400">
						<div class="herotext clearfix">
							<div class="pull-left">
								<h1><?php echo $menus->nom;?></h1>
								<div class="line"></div>
								<div class="star">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
							<div class="price pull-right"><?php echo $menus->px;?> FCFA</div>
						</div>
						<div class="description">
						<?php echo $menus->description1;
							echo '\n';
							echo  $menus->description2;
						?>	
					</div>
						<!-- Add to Cart Starts -->	
						<div class="row add-to-cart">
							<div class="col-lg-6">
								<div>
									<select>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
									</select>
								</div>
								<div class="button"><a href="shop-cart.php?id_menu=<?php echo $menus->id;?>" class="fill-orange">Ajouter au panier</a></div>
							</div>
						
						</div>
						<!-- Add to Cart Ends -->
					</div>
				</div>
				<div class="row tab-style animated" data-animation="fadeInUp" data-animation-delay="200">
					<div class="col-lg-12">
						<!-- Nav tabs -->
						<ul class="nav1 nav-justified" role="tablist">
							<li role="presentation" class="active">
								<a href="#description" aria-controls="description" role="tab" data-toggle="tab">
									<div class="caption">DESCRIPTION</div>
								</a>
							</li>
							<li role="presentation">
								<a href="#review" aria-controls="review" role="tab" data-toggle="tab">
									<div class="caption">Commentaires</div>
								</a>
							</li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="description">
								<div class="description">
								<?php echo $menus->description1;?>
							</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="review">
								<div class="description">
									<!-- Comments Starts -->
									<div class="row comments">
										<div class="col-lg-12">
											<ul class="media-list">
											<?php
											if(isset($reps)&&($reps!=null)):
												foreach($reps as $rep):
											?>
												<!-- Media Single Comment Starts -->
												<li class="media">
													<div class="media-left">
														<a href="#">
														<!-- <img src="images/blog/users/3.jpg" class="media-object" alt="" > -->
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Anonymous</h4>
														<div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> </div>
														<p> <?php
														echo $rep->revmessage;
														?> </p>
														<a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
													</div>
												</li>
												<?php
												endforeach;
											endif;
												?>
												<!-- Media Single Comment Starts -->
											</ul>
										</div>
									</div>
									<!-- Comments Ends -->
									<!-- Leave a Reply Starts -->
									<div class="row leave-a-reply">
										<div class="col-lg-12">
											<h1>Ajouter un commentaire</h1>
											<div class="line"></div>
											<div class="row">
												
												<div class="col-lg-12">
													<div class="form-group"><form action="./menu-details.php" method="POST">
														<textarea class="form-control" rows="5" name="commentaire" placeholder="Commentaire *"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<button type="submit" class="btn btn-default">Submit</button>
												</div></form>
											</div>
										</div>
									</div>
									<!-- Leave a Reply Ends -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. MENU DETAILS ENDS
				========================================================================= -->
			<!-- RELATED RECIPE STARTS
				========================================================================= -->
			<div class="related-recipe light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<p class="box-heading">
								<span>QuelQues Menus</span>
							</p>
						</div>
					</div>
					<div class="row">
						<?php
						if(isset($mens)&&($mens!=null)):
							foreach($mens as $men): //men==menu
								$img= explode(',',$men->images);
						?>
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="images/<?php echo $img[0];?>" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										<div>
											<h1><?php echo $men->nom;?></h1>
											<p class="line"></p>
											 <p class="price-item"><span><?php echo $men->px;?><sup>FCFA</sup></span></p>
                                            <p class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
											<span class="icon"><a class="#" href="./shop-cart.php?id_menu=<?php echo $men->id;?>">Ajouter Au panier</a> | <a class="#" href="./menu-details.php?id_menu=<?php echo $men->id;?>">Detail</a></span>
										</div>
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
						<?php
						endforeach;
					endif;
						?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- /. RELATED RECIPIE STARTS
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
		<!-- FlexSlider -->
		<script defer src="js/flexslider/jquery.flexslider.js"></script>
		<script>
			$(window).load(function() {
				// The slider being synced must be initialized first
				$('#carousel').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					itemWidth: 100,
					itemMargin: 5,
					asNavFor: '#slider'
				});

				$('#slider').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					pausePlay: false,
					mousewheel: true,
					sync: "#carousel"
				});
			});
		</script>
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>
	</body>

<!-- Mirrored from miraclestudio.design/html/delicieux/menu-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 12:07:04 GMT -->
</html>