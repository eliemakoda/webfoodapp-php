<?php
require './config/app.php';
session_start();
$req="SELECT * FROM categorie WHERE 1;";
$apps= new App;
$categorie= $apps->SelectionnerTout($req);
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Menu</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">Voir toutes nos catégories de menus</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span> menu</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- BREAKFAST MENU STARTS
				========================================================================= -->
			<div class="menu breakfast-menu">
				<div class="container-fluid">
					<div class="row">
						<?php
						if(isset($categorie)&& ($categorie!=null)):
							foreach($categorie as $cat):
						?>
						<div class="col-lg-12">
							<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="200">
								<p class="box-heading">
									<span><?php echo $cat->nom; ?></span>
								</p>
							</div>
						</div>
					</div>
					<div class="row no-gutter-3">
						<?php
					$req = "SELECT * FROM menu where id_categorie=$cat->id;";
                    $menus = $apps->SelectionnerTout($req);
					if(isset($menus)&& ($menus!=null)):
						foreach($menus as $men):
							$img= explode(',',$men->images);
							$myim=$img[array_rand($img)]

						?>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 picture animated" data-animation="fadeInUp" data-animation-delay="400">
							<img src="images/<?php echo $img[array_rand($img)]; ?>" class="img-responsive center-block" alt=<?php echo $img[array_rand($img)]?> >					
						</div>
						<?php
						endforeach;
				endif;
						?>
					
					</div>
				</div>
				<div class="container">
					<div class="row">
						<!-- Column Starts -->
						<div class="col-lg-4 col-md-4 block animated" data-animation="fadeInUp" data-animation-delay="200">
							<div class="menu-list">
								<!-- Menu Item Starts -->
								<?php
									$req = "SELECT * FROM menu where id_categorie=$cat->id;";
									$menus = $apps->SelectionnerTout($req);
									if(isset($menus)&&($menus!=null)):
								foreach($menus as $men):
								?>
								<div class="menu-item">
									<h1><a href="menu-details.php?id_menu=<?php echo $men->id ?>"><?php echo $men->nom ?></a><span class="price pull-right"><?php echo $men->px ?> FCFA<a href="./shop-cart.php?id_menu=<?php echo $men->id ?> "><i class="fa fa-shopping-cart"></i></a></span></h1>
									<div class="description"><?php 
									$description =$men->description1 ;
									$words = str_word_count($description, 1); // Divise la chaîne en mots
									$first20Words = array_slice($words, 0, 20); // Sélectionne les 20 premiers mots
									echo implode(' ', $first20Words); // Affiche les mots séparés par un espace
									 ?></div>
								</div>
								<?php
								endforeach;
							endif;
								?>
								
							</div>
						</div>
						<?php
					endforeach;
					?>
					</div>
					<?php
					endif;
					?>
				</div>
			</div>
		
			<?php
		require './config/footer.php';
			?>