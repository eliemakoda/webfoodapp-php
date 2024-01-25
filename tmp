<?php
require "./config/app.php";
session_start();
$apps = new App;
if(isset($_GET['id_menu']))
{
	$id_user= $_SESSION['id_client'];
	$id_menu=$_GET['id_menu'];
	$sql="INSERT INTO cart(id_user, id_menu) VALUES (:id_user,:id_menu)";
	$tab=[
		":id_user"=>$id_user,
		":id_menu"=>$id_menu
	];
	$dest="./shop-cart.php";
	$apps->inserer($sql,$tab,$dest);
}
$id_user= $_SESSION['id_client'];
$sql="SELECT *, cart.id as cid from cart left join menu on cart.id_menu=menu.id WHERE cart.id_user=$id_user GROUP BY cart.id_menu;";
$pannier= $apps->SelectionnerTout($sql);
$sqlm="SELECT * FROM menu WHERE 1 LIMIT 3";
$menus=$apps->SelectionnerTout($sqlm);
if(isset($_GET['id']))

if(isset($_GET['id_sup']))
{
	$id=$_GET['id_sup'];
	$sql= "DELETE FROM cart WHERE id=$id";
	$dest="./shop-cart.php";
	$apps->supprimer($sql,$dest);
}
require './config/header.php';

?>
		<div class="inner-banner title-area text-center image-10">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Panier</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">VOS COMMANDES</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span>PAnier</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- SHOP STARTS
				========================================================================= --> 
			<div class="shop bg2">
				<div class="container">
					<!-- Cart Grid Starts -->
					<div class="row">
						<div class="col-lg-12">
							<div class="cart-grid">
								<!-- Row Header Starts -->
								<div class="hidden-xs">
									<div class="row cart-row-header">
										<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2"></div>
												<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 left">
													Menu
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
													Prix (FCFA)
												</div>
												<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
													Quantite
												</div>
												<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
													Total
												</div>
												<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2"></div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row Header Ends -->
								<!-- Row Starts -->
								<?php
								if(isset($pannier)&&($pannier!=null)):
									foreach($pannier as $article):
										$img= explode(',',$article->images);
										$myim=$img[array_rand($img)]
								?>
								<div class="row cart-row">
									<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
												<img src="images/<?php echo $myim ?>" alt="" class="img-responsive"/>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
												<h1 class="product-name">
												<?php echo $article->nom; ?>
												</h1>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
										<div class="row">
											<div class="col-xs-6 col-sm-3 col-md-4 col-lg-4">
												<div class="product-price">
												<?php echo $article->px; ?>
												</div>
											</div>
											<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
												<div class="product-qty">
													<input name="text"  type="number" value="1" size="4" maxlength="12">
												</div>
											</div>
											<div class="visible-xs-block clearfix"></div>
											<div class="col-xs-6 col-sm-3 col-md-4 col-lg-4">
												<div class="total-product-price">					
												 <?php echo $article->px;
												 //pour le prix total
												 ?>
												</div>
											</div>
											<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
												<ul class="actions">
													<li>
														<a href="./shop-cart.php?id_sup=<?php echo $article->cid; ?>"><i class="fa fa-times"></i></a>
													</li>
													
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php
								endforeach;
							endif;
								?>
							<?php
							if($pannier!=null):
							?>
					<div class="row proceed-to-checkout">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<ul class="button">
								<li><a href="shop-checkout.php" class="fill-orange">Proceder au paiement</a></li>
							</ul>
						</div>
					</div>
					<!-- Buttons Ends -->
					<div class="row">
						<!-- Cart Total Starts -->
						<div class="col-lg-6 col-md-6 col-sm-6 cart-total">
							<div class="hero-text-2">
								<h1>Cart Total</h1>
							</div>
							<table class="table">
								<tbody>
									<tr>
										<th scope="row" >Total du pannier</th>
										<td id="tot">00</td> FCFA
									</tr>
								
									<tr>
										<th scope="row">Total de la commande
										</th>
										<td id="totcmd">00</td> FCFA
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Cart Total Starts -->
						<!-- Cart Total Starts -->
						<div class="col-lg-6 col-md-6 col-sm-6 cal-shipping">
						
							<div class="form">

								<div class="form-group">
									<input type="text" class="form-control" id="Mobile" placeholder="State">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="Address" placeholder="Postal Code">
								</div>
								<button type="submit" class="btn btn-default">Mettre à jour le Total</button>
							</div>
						</div>
						<!-- Cart Total Starts -->
					</div>
				</div>
			</div>
			<?php
			endif;
			?>
			<!-- /. SHOP ENDS
				========================================================================= -->
			<!-- RELATED RECIPE STARTS
				========================================================================= -->
			<div class="related-recipe light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<p class="box-heading">
								<span>Quelques Menus</span>
							</p>
						</div>
					</div>
					<div class="row">
						<?php
						if(isset($menus)&&($menus!=null)):
							foreach($menus as $men):
								$img= explode(',',$men->images);
						?>
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="images/<?php echo $img[0] ?>" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										<div> 
											<h1><?php echo $men->nom; ?></h1>
											<p class="line"></p>
											 <p class="price-item"><span><?php echo $men->px; ?><sup>FCFA</sup></span></p>
                                            <p class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
											<span class="icon"><a class="#" href="./shop-cart.php?id_menu=<?php echo $men->id ?>">Ajouter Au Panier</a> | <a class="#"href="menu-details.php?id_menu=<?php echo $men->id ?>">Detail</a></span>
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
			<?php
			require './config/footer.php';
			?>