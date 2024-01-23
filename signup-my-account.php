<?php
require "./config/app.php";
if(isset($_POST['submit']))
{
	$nom=$_POST['name'];
	$email=$_POST["email"];
	$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	$req="INSERT INTO user( email, name, password) VALUES(:email,:name,:password)";
	$tab=[
		":email"=>$email,
		":name"=>$nom,
		":password"=>$password
	];
	$des="./login.php";
	$apps= new App;
	$apps->inserer($req,$tab,$des);

}
require './config/header.php';
?>
		<div class="inner-banner title-area text-center image-9">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Mon Compte</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200"></h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
			<div class="bread-crumb"><a href="#">Accueil</a> <span>creer un compte</span></div>
			</div>
		</div>
		
		<div class="white-bg">
		
			<div class="my-account">
				<div class="container">
					<div class="row">
						<form method="POST" action="./signup-my-account.php">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="row animated" data-animation="fadeInUp" data-animation-delay="400">
									<div class="col-lg-12 center">
										<h1>Mon Compte</h1>
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="entrez votre nom *">
										</div>
									
										<div class="form-group">
											<input type="text" class="form-control" name="email" placeholder="Email *">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="row animated" data-animation="fadeInUp" data-animation-delay="600">
									<div class="col-lg-12 center">
										<h1>Mot de Passe </h1>
										
									
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="entrez votre mot de passe">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-lg-offset-4 animated" data-animation="fadeInUp" data-animation-delay="800"><input class="btn btn-default" type='submit' value="Creer mon compte" name="submit"></div>
						</form>
					</div>
				</div>
			</div>
		<?php
		require "./config/footer.php";
		?>