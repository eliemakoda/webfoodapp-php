<?php
session_start();
require "./config/app.php";
// require "./config/app.php";

$apps= new App;
$sql="SELECT * FROM  team WHERE 1";
$resultats=$apps->SelectionnerTout($sql);
require "./config/Header.php";
?>
		<div class="inner-banner title-area text-center image-4">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Notre Equipe</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">Tout savoir sur FoodApp
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span>Notre Equipe</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			
			<!-- OUR TEAM STARTS
				========================================================================= -->	
			<div class="our-team" id="team">
				<div class="container">
					
					<div class="row">
						<!-- Block Starts -->
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
			<?php
			require "./config/footer.php";
			?>