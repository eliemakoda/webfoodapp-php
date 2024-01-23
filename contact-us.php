<?php
require "./config/app.php";
session_start();
if(isset($_POST['submitf']))
{
	$nom=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['comment'];
	$sql= "INSERT INTO contact(fullname, email, message) VALUES(:fullname,:email,:message)";
	$tab=[
		":fullname"=>$nom,
		":email"=>$email,
		":message"=>$msg
	];
	$dest="./index.php";#page de redirection après envoi du formulaire
	$apps= new App;
	$apps->inserer($sql,$tab,$dest);
}
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-7">
			<div class="container title-area-content">
				<!-- <h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Contact Us</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">All about delicieux</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div> -->
                <div class="bread-crumb"><a href="#">Accueil</a> <span>Contact</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- GET IN TOUCH STARTS
				========================================================================= -->	
			<div class="container contact-us">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="block">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="caption">Notre adresse</div>
							<div class="line"></div>
							<div class="description">Douala, Cameroun <br>Bonapriso<br>Ru Degaulle</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="block">
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="caption">Telephone</div>
							<div class="line"></div>
							<div class="description">657 70 22 91<br>Mobile:+237 657 70 22 91<br> Ligne directe: 657 70 22 91</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="block">
							<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
							<div class="caption">Email Address</div>
							<div class="line"></div>
							<div class="description"><a href="mailto:christelletotto@gmail.com">christelletotto@gmail.com</a><br><a href="mailto:christelletotto@gmail.com">christelletotto@gmail.com</a><br><a href="mailto:sales@delicieux.com">christelletotto@gmail.com</a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Google Map Starts -->
			<div class="container-fluid">
				<div class="row no-gutter-12">
					<div class="col-lg-12 maps animated" data-animation="fadeInUp" data-animation-delay="10">						
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25215.625657884106!2d144.956637!3d-37.81456500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sus!4v1435061406583" height="400" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<!-- Google Map Ends -->
			<div class="get-in-touch">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="10">
									<span>Relâchez vous!</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="600">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet. </div>
							</div>
						</div>
					</div>
						<form action='./contact-us.php' method='POST' name='ContactForm' >
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 center">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Nom *">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Email *">
									</div>
									
									<div class="form-group">
										<textarea rows="5" class="form-control" name="comment" placeholder="votre message *"></textarea>
									</div>
									<div id='message_post'></div>
										<input class="btn btn-default" type='submit' value='SUBMIT' name='submitf' id="submitf">
									</div>
								</div>
								
						</form>
				</div>
			</div>
		<?php
		require './config/footer.php'
		?>