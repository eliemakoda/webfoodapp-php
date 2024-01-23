<?php
require './config/app.php';
session_start();
if(isset($_POST['submit']))
{
	$nom=$_POST['fullname'];
	$email=$_POST['uremail'];
	$date=$_POST['date1'];
	$heure=$_POST['time'];
	$nb_pers=$_POST['numberofpersons'];
	$tel=$_POST['phonenumber'];
	$branchname=$_POST['branchname'];
	$message=$_POST['urmessage'];
	$statut=0;
	$req="
		INSERT INTO reservation(name, email, date_livraison, heure_livraison, nb_personne, phone, branch, message, statut) 
		VALUES(:name, :email, :date_livraison, :heure_livraison, :nb_personne, :phone, :branch,:message, :statut)
		";
	$tab=[
		":name"=>$nom,
		":email"=>$email,
		":date_livraison"=>$date, 
		":heure_livraison"=>$heure, 
		":nb_personne"=>$nb_pers,
		":phone"=>$tel,
		":branch"=>$branchname,
		":message"=>$message,
		":statut"=>$statut
	];
	$dest="./index.php";
	$apk= new App;
	$apk->inserer($req,$tab,$dest);
}
require './config/header.php';

?>
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Reservation</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">Reserver nos meilleurs plats et tables</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Accueil</a> <span>Reservation</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- RESERVATION CONTACT INFO STARTS
				========================================================================= -->
			<div class="container-fluid">
				<div class="row no-gutter-12">
					<div class="col-lg-12 res-contact-info animated" data-animation="fadeInUp" data-animation-delay="400">
						<div class="block">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="caption">
								Notre adresse<br>
								<div class="line"></div>
								<span>Douala, Cameroun<br class="visible-xs"> Bonapriso> Rue Degaulle</span>
							</div>
						</div>
						<div class="block">
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="caption">
								Numero de reservation<br>
								<div class="line"></div>
								<span>+237 657 70 22 91</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. RESERVATION CONTACT INFO ENDS
				========================================================================= -->
			<!-- RESERVATION STARTS
				========================================================================= -->
			<div class="container-fluid reservation" id="reservation">
				<div class="row">
					<div class="leaf"><img src="images/reservation/leaf.png" alt=""></div>
					<section class="backgroundimg">
						<div class="col-lg-6 col-sm-7 col-lg-offset-6 col-sm-offset-5">
							<div class="formcontents">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2">
										<div class="row form animated" data-animation="fadeInUp" data-animation-delay="400">
											<form  method='POST' action="./reservation.php" id=''>
												<div class="col-lg-12">
													<div class="herotext">
														<p class="cross-line">
															<span>Commande En ligne</span>
														</p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="fullname" placeholder="Nom *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="email" class="form-control" name="uremail" placeholder="Email *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" id="datepicker" class="form-control" name="date1"  placeholder="Date *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="time" class="form-control" name="time" placeholder="Heure *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="number" class="form-control" name="numberofpersons" placeholder="Nombre de Personnes *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number *">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="branchname" placeholder="indiquez votre rue *">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<textarea rows="5" class="form-control" name="urmessage" placeholder="Message *"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div id='r_message_post'></div>
												</div>
												<div class="col-lg-12">
													<input class="btn btn-default" type='submit' value='envoyer' name='submit' id="">
												</div>
			<!-- <input type="submit" name="submit" id="a" value="ded"> -->
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-5 img-side img-left">
							<div class="img-holder video">
								<div class="icon"><a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play"></i></a></div>
								<img src="images/reservation/2.jpg" alt="" >
							</div>
						</div>
					</section>
				</div>
			</div>
			<!-- ./ RESERVATION ENDS
				========================================================================= -->
			<div class="delivery light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Livraison à domicile, Fêtes et /ou évènements</h1>
								<div class="button animated" data-animation="fadeInUp" data-animation-delay="500"><a href="./our-menu.php" class="fill-orange">Voir les menus</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- OPENING HOURS STARTS
				========================================================================= -->	
			<div class="parallax-3 opening-hours reservation padding-t-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="cross-line animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Heure d'ouverture</span>
								</p>
								<div class="line-2 animated" data-animation="fadeInUp" data-animation-delay="600">Appelez pour vos reservations</div>
							</div>
						</div>
					</div>
					<div class="row no-gutter-3 row3 animated" data-animation="fadeInUp" data-animation-delay="800">
						<div class="row-height">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/1.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="white-block">
										<div class="icon"><i class="icon-drink"></i></div>
										<div class="caption">Petit Déjeuner</div>
										<div class="day">Tous les jours</div>
										<div class="timing">09:00 - 10:00</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/2.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="white-block">
										<div class="icon"><i class="icon-food"></i></div>
										<div class="caption">Déssert</div>
										<div class="day">Tous les Jours</div>
										<div class="timing">13:00 - 16:00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutter-3 row2 animated" data-animation="fadeInDown" data-animation-delay="800">
						<div class="row-height">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="dark-block">
										<div class="icon"><i class="icon-breakfast"></i></div>
										<div class="caption">Diner</div>
										<div class="day">Tous les JOurs</div>
										<div class="timing">17:00 - 22:00</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/3.jpg" class="img-responsive center-block" alt=""></div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside">
									<div class="dark-block">
										<div class="icon"><i class="icon-dinner"></i></div>
										<div class="caption">Dinner</div>
										<div class="day">Tous les jours </div>
										<div class="timing">9:00 - 22:00</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-sm-height col-sm-middle">
								<div class="inside"><img src="images/opening-hours/4.jpg" class="img-responsive center-block" alt=""></div>
							</div>
						</div>
					</div>
					<div class="row reservation-number">
						<div class="col-lg-12 animated" data-animation="flipInX" data-animation-delay="600">
							<div class="icon"><i class="icon-divider"></i></div>
							<div class="caption">
								Numero de reservation<br>
								<span>+237 657 70 22 91</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php
	require "./config/footer.php";
	?>