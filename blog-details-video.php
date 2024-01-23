<?php
require './config/app.php';
session_start();
$apps = new App;
$id = $_GET['id'];
$req = "SELECT * from publication where id =$id";
$result = $apps->SelectionnerUn($req);
$reqRep = "SELECT * from replique left join user on replique.id_utilisateur=user.id where replique.id_post=$id";
$reps = $apps->SelectionnerTout($reqRep);
$reqpubs="SELECT * FROM publication WHERE 1 LIMIT 3;";
$pubs=$apps->SelectionnerTout($reqpubs);
if (isset($_POST['submit'])) {
	$comment = $_POST['comment'];
	$id_user = $_SESSION['id_client'];
	$idpost = $_POST['id'];
	$sql = "INSERT INTO replique( id_utilisateur, message, id_post) VALUES(:id_utilisateur,:message,:id_post)";

	$tab = [
		":id_utilisateur" => $id_user,
		":message" => $comment,
		":id_post" => $idpost
	];
	$dest = "./blog.php";
	$apps->inserer($sql, $tab, $dest);
}
require './config/header.php';

?>
<div class="inner-banner title-area text-center image-6">
	<div class="container title-area-content">
		<h1 class="animated" data-animation="fadeInUp" data-animation-delay="50">Blog</h1>
		<h2 class="animated" data-animation="fadeInDown" data-animation-delay="50">Toutes nos dernières informations sur le restaurant</h2>
		<div class="line animated" data-animation="fadeInDown" data-animation-delay="50"></div>
		<div class="bread-crumb"><a href="#">Accueil</a> <a href="#">Blog</a> <span>Détail Blog </span></div>
	</div>
</div>
<!-- /. INNER BANNER STARTS
			========================================================================= -->
<div class="white-bg">
	<!-- BLOG DETAILS STARTS
				========================================================================= -->
	<div class="blog">
		<div class="container">
			<!-- Post Details Starts -->

			<div class="row">
				<div class="col-lg-12">
					<div class="blog-post">
						<div class="animated" data-animation="fadeIn" data-animation-delay="200">
							<div class="video-wrap">
								<video poster="images/videos/explore-poster.php" preload="auto" controls loop autoplay muted>
									<source src='images/videos/explore.mp4' type='video/mp4' />
									<source src='images/videos/explore.webm' type='video/webm' />
								</video>
							</div>
						</div>
						<?php
						if (isset($result) && ($result != null)) :
						?>
							<div class="blog-detail animated" data-animation="fadeIn" data-animation-delay="400">
								<h1 class="post-title"><a href="#"><?php echo $result->title; ?></a></h1>
								<div class="post-metas"><?php echo $result->date; ?> <a class="" href="#"></a></div>
								<div class="line"></div>
							</div>
							<div class="description animated" data-animation="fadeIn" data-animation-delay="200">
								<?php echo $result->description; ?>
							</div>
					</div>
				</div>
			</div>
			<!-- Post Details Ends -->
			<!-- Tag n Share Starts -->
			<div class="row tag-n-share animated" data-animation="fadeIn" data-animation-delay="200">
				<div class="col-lg-6 tag">
					<ul>
						<li>Tags : </li>
						<li><a href="#">Delicious,</a></li>
						<li><a href="#">Hamburger,</a></li>
						<li><a href="#">Foods, </a></li>
						<li><a href="#">Restaurant</a></li>
						<li><a href="#">Buffit</a></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="social-icons">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- Tag n Share Ends -->

			<div class="row tab-style animated" data-animation="fadeInUp" data-animation-delay="200">
				<div class="col-lg-12">
					<!-- Nav tabs -->
					<ul class="nav1 nav-justified" role="tablist">
						<li role="presentation" class="active">
							<a href="#description" aria-controls="description" role="tab" data-toggle="tab">
								<div class="caption">Revue </div>
							</a>
						</li>
						<li role="presentation">
							<a href="#review" aria-controls="review" role="tab" data-toggle="tab">
								<div class="caption">Laissé un commentaire</div>
							</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="description">
							<div class="description">
						<?php
						echo $result->description!=null?$result->description:"";
						?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="review">
							<div class="description">
								<!-- Comments Starts -->
								<div class="row comments">
									<div class="col-lg-12">
										<ul class="media-list">
											<!-- Media Start with nested Comments Starts -->
											<li class="media">
												<div class="media-left">
													<a href="#">
														<!-- <img src="images/blog/users/1.jpg" class="media-object" alt=""> -->
													</a>
												</div>
												<?php
												if (isset($reps) && ($reps != null)) :
													foreach ($reps as $rep) :
												?>

														<div class="media-body">
															<h4 class="media-heading"><?php echo $rep->name; ?></h4>
															<div class="time"><i class="fa fa-calendar" aria-hidden="true"></i></div>
															<p><?php
																echo $rep->message;
																?>
															</p>
															<a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
															<!-- Nested media object -->
														</div>


												<?php
													endforeach;
												endif;
												?>

									</div>
									</li>
									<!-- Media Start with nested Comments Ends -->
									<!-- Media Single Comment Starts -->
								
									<!-- Media Single Comment Starts -->
									</ul>
								</div>
							</div>
							<!-- Comments Ends -->
							<!-- Leave a Reply Starts -->
							<div class="row leave-a-reply">
								<div class="col-lg-12">
									<h1>Ajoutez un commentaire</h1>
									<div class="line"></div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4">

										</div>
										<div class="col-lg-4 col-md-4 col-sm-4">

										</div>
										<div class="col-lg-4 col-md-4 col-sm-4">

										</div>
										<form method="POST" action="./blog-details-video.php?id=<?php echo $_GET['id'];?>" >
										<div class="col-lg-12">
											<div class="form-group">
												<textarea class="form-control" rows="5" placeholder="Comment *" name="comment"></textarea>
											</div>
											<input type="text" name="id" id="" hidden value="<?php echo $_GET['id'];?>">
										</div>
											<input type="submit" value="commenter" name="submit"  class="btn btn-default">
											<!-- <button type="submit" class="btn btn-default" >Submit</button> -->
										</form>

									</div>
								</div>
							</div>
							<?php
	endif;
												?>
							<!-- Leave a Reply Ends -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- /. BLOG DETAILS ENDS
				========================================================================= -->
<!-- RELATED RECIPE STARTS
				========================================================================= -->
<div class="blog light-grey-bg">
	<div class="container">
		<div class="row">
			<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="200">
				<p class="box-heading">
					<span>Informations Relatives </span>
				</p>
			</div>
		</div>
		<div class="row">
			<?php
			if(isset($pubs)&& ($pubs!=null)):
				foreach($pubs as $pub):
					$im= explode(',',$pub->images)

			?>
			<!-- Post Starts -->
			<div class="col-lg-4 col-md-4 col-sm-4 blog-post animated" data-animation="fadeInUp" data-animation-delay="400">
				<div class="picture"><img src="images/<?php echo $im[0] ?>" class="img-responsive center-block" alt=""></div>
				<div class="blog-contents">
					<h1 class="post-title"><a href="./blog-details-video.php?id=<?php echo $pub->id;?>"><?php echo $pub->title;?></a></h1>
					<div class="post-metas"><?php echo $pub->date;?> <a class="" href="./blog-details-video.php?id=<?php echo $pub->id;?>"></a></div>
					<div class="line"></div>
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