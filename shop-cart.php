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
								?>
								<div class="row cart-row">
									<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
												<img src="images/<?php echo $im[0]; ?>" alt="" class="img-responsive"/>
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
		<!-- Custom JS -->
		<script src="js/custom/custom.js"></script>

		<script>

			// Sélectionnez tous les éléments du champ de saisie de la quantité
var quantityInputs = document.querySelectorAll('input[name="quantity"]');

// Parcourez tous les champs de saisie de la quantité et ajoutez un écouteur d'événement à chacun
quantityInputs.forEach(function(quantityInput) {
  quantityInput.addEventListener('input', function() {
    // Récupérez l'élément du prix du produit correspondant à ce champ de saisie de la quantité
    var productPriceElement = quantityInput.parentElement.nextElementSibling.querySelector('.product-price');
    
    // Récupérez le prix du produit
    var productPrice = parseFloat(productPriceElement.textContent);
    
    // Récupérez la nouvelle quantité
    var newQuantity = parseInt(quantityInput.value) || 0;
    
    // Mettez à jour le prix total du produit en multipliant le prix par la quantité
    var newTotalPrice = productPrice * newQuantity;
    
    // Mettez à jour l'élément du prix total du produit avec le nouveau total
    productPriceElement.parentElement.nextElementSibling.querySelector('.total-product-price').textContent = newTotalPrice;
  });
});
// Récupérer tous les éléments du panier
var products = document.querySelectorAll('.cart-row');

// Initialiser les totaux
var totalPannier = 0;
var totalCommande = 0;

// Parcourir tous les éléments du panier
products.forEach(function(product) {
  var price = parseFloat(product.querySelector('.product-price').textContent);
  var quantity = parseInt(product.querySelector('input[name="quantity"]').value);
  
  // Mettre à jour le prix total du produit
  product.querySelector('.total-product-price').textContent = (price * quantity).toFixed(2);
  
  // Mettre à jour le total du panier et le total de la commande
  totalPannier += (price * quantity);
  totalCommande += (price * quantity);
});

// Mettre à jour les valeurs des champs "Total du panier" et "Total de la commande"
document.getElementById('tot').textContent = totalPannier.toFixed(2);
document.getElementById('totcmd').textContent = totalCommande.toFixed(2);

		</script>
	</body>

<!-- Mirrored from miraclestudio.design/html/delicieux/shop-cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 12:07:16 GMT -->
</html>