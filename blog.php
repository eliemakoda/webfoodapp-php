<?php
require "./config/app.php";
session_start();
$req="SELECT * FROM publication WHERE 1 ORDER BY id DESC";
$apps= new App;
$posts= $apps->SelectionnerTout($req);
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-6">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Blog</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">toutes nos dernieres informations</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span>Blog</span></div>
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
							$im= explode(',',$post->images);
							$myim=$im[array_rand($im)];

					?>
					<div class="row blog-post">
						<div class="col-lg-8 col-md-8 animated" data-animation="fadeIn" data-animation-delay="800">
							<div class="picture"><img src="images/<?php echo $im[array_rand($im)];?>" class="img-responsive center-block" alt=""></div>
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
		<?php
		require './config/footer.php';
		?>