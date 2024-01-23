<?php
require "./config/app.php";
session_start();
$apps=new App;
if(isset($_POST['submitf']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$req="SELECT * FROM user WHERE email=:email";
	$tab=[
		"email"=>$email,
		"password"=>$password
	];
	$des="./index.php";
	$apps->se_connecter_client($req,$tab,$des);
}
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-9">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Se connecter</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">Se connecter à notre restaurant</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Acceil</a> <span>Connexion</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg ">
			<!-- GET IN TOUCH STARTS
				========================================================================= -->	
			<!-- Google Map Ends -->
			<div class="login-page">			
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Se connecter</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="600">Votre sécurité c'est notre priorité </div>
							</div>
						</div>
					</div>
					<form method="POST" action="./login.php">
						<div class="row animated" data-animation="fadeInUp" data-animation-delay="800">
							<div class="col-lg-6 col-lg-offset-3 center">
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Mot de passe">
								</div>
								<div id='message_post'></div>
								<input class="btn btn-default" type='submit' value='Login' name='submitf' id="submitf">
							</div>
						</div>
					</form>
					<div class="row animated" data-animation="fadeInUp" data-animation-delay="1000">
						<div class="col-lg-12">
							<ul class="links">
								<li><a href="./signup-my-account.php">-  Creer un comte</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
		<?php
		require './config/footer.php';
		?>