<?php 
require "./config/app.php";
session_start();
require './config/Header.php';
?>
		<div class="inner-banner title-area text-center image-4">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">A propos</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">Tout savoir sur FoodApp</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span>A propos</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- ABOUT US STARTS
				========================================================================= -->	
			<div class="container about-us" id="about">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<p class="box-heading">
								<span>Notre Histoire</span>
							</p>
						</div>
						<div class="description animated" data-animation="fadeInDown" data-animation-delay="800"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione culpa impedit dolore, eius cupiditate, dolorem atque numquam officia pariatur veritatis nihil natus repudiandae eaque soluta. Possimus suscipit a non mollitia alias cupiditate.* </div>
					</div>
					<div class="col-lg-6 col-md-6 animated" data-animation="fadeIn" data-animation-delay="600"><img src="images/about-us/2.jpg" class="img-responsive center-block" alt=""></div>
				</div>
			</div>
			<!-- /. ABOUT US ENDS
				========================================================================= -->						
	<?php
	require './config/footer.php';
	?>