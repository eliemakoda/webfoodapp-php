
<!-- OUR TEAM STARTS
				========================================================================= -->
<div class="our-team" id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="herotext">
					<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
						<span>nos Chefs cuisiniers</span>
					</p>
					<div class="description animated" data-animation="fadeInUp" data-animation-delay="600">nos meilleurs cuisiniers disposé à vous satisfaire. </div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			// $appss = new App;
			$sql = "SELECT * FROM  team WHERE 1";
			$resultats = $apps->SelectionnerTout($sql);
			?>
			
			<?php
						if(isset($resultats)&&($resultats!=null)):
								foreach($resultats as $res):
									$im= explode(',',$res->image);
					?>
						<div class="col-lg-4 col-md-4 col-sm-6 animated" data-animation="fadeIn" data-animation-delay="800">
							<div class="block">
								<div class="picture"><img src="images/<?php echo $im[0] ?>" class="img-responsive center-block" alt=""></div>
								<div class="name"><a href="#"><?php echo $res->name ?></a></div>
								<div class="designation"><?php echo $res->position ?></div>
								<ul class="social-icons">
									
								</ul>
							</div>
						</div>
						<?php
						endforeach;
					endif;
						?>
		
		</div>
	</div>
</div>
<!-- /. OUR TEAM ENDS
				========================================================================= -->
<!-- NEWSLETTER STARTS
				========================================================================= -->
<div class="container-fluid newsletter">
	<div class="row row1">
		<div class="col-lg-4 col-lg-offset-4">
			<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
				<h1>Restez informer!</h1>
				<div class="description">Inscrivez-vous à notre newsletter </div>
			</div>
			<form class="form-inline animated" data-animation="fadeInUp" data-animation-delay="600" method="POST" action="./souscrire.php">
				<div class="form-group">
					<input type="email" class="form-control" id="newsletter" placeholder="Entrez votre addresse mail" name="email">
				</div>
				<button type="submit" class="btn btn-default" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
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

				</div>
				<div class="col-lg-6 col-md-6">
					<div class="copyright">© 2023 keyce <a href="#"></a></div>
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
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  
			The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript">
	var tpj = jQuery;

	var revapi1078;
	tpj(document).ready(function() {
		if (tpj("#rev_slider_467_1").revolution == undefined) {
			revslider_showDoubleJqueryError("#rev_slider_467_1");
		} else {
			revapi1078 = tpj("#rev_slider_467_1").show().revolution({
				sliderType: "standard",
				jsFileLocation: "revolution/js/",
				sliderLayout: "fullscreen",
				dottedOverlay: "none",
				delay: 9000,
				navigation: {
					keyboardNavigation: "off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation: "off",
					mouseScrollReverse: "default",
					onHoverStop: "off",
					touch: {
						touchenabled: "on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
						style: "zeus",
						enable: true,
						hide_onmobile: true,
						hide_under: 600,
						hide_onleave: true,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 30,
							v_offset: 0
						},
						right: {
							h_align: "right",
							v_align: "center",
							h_offset: 30,
							v_offset: 0
						}
					},
					bullets: {
						enable: true,
						hide_onmobile: true,
						hide_under: 600,
						style: "metis",
						hide_onleave: true,
						hide_delay: 200,
						hide_delay_mobile: 1200,
						direction: "horizontal",
						h_align: "center",
						v_align: "bottom",
						h_offset: 0,
						v_offset: 30,
						space: 5,
						tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
					}
				},
				viewPort: {
					enable: true,
					outof: "pause",
					visible_area: "80%",
					presize: false
				},
				responsiveLevels: [1240, 1024, 778, 480],
				visibilityLevels: [1240, 1024, 778, 480],
				gridwidth: [1240, 1024, 778, 480],
				gridheight: [600, 600, 500, 400],
				lazyType: "none",
				parallax: {
					type: "mouse",
					origo: "slidercenter",
					speed: 2000,
					levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
					type: "mouse",
				},
				shadow: 0,
				spinner: "off",
				stopLoop: "off",
				stopAfterLoops: -1,
				stopAtSlide: -1,
				shuffle: "off",
				autoHeight: "off",
				hideThumbsOnMobile: "off",
				hideSliderAtLimit: 0,
				hideCaptionAtLimit: 0,
				hideAllCaptionAtLilmit: 0,
				debugMode: false,
				fallbacks: {
					simplifyAll: "off",
					nextSlideOnWindowFocus: "off",
					disableFocusListener: false,
				}
			});
		}
	}); /*ready*/
</script>
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

</html>