
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="../styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">FOODAPP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="../admins/login-admins.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admins/admins.php" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../menus/menus.php" style="margin-left: 20px;">Menus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../categorie/categorie.php" style="margin-left: 20px;">categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../blog/blog.php" style="margin-left: 20px;">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../reservation/reservation.php" style="margin-left: 20px;">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/contact.php" style="margin-left: 20px;">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../newsletter/news.php" style="margin-left: 20px;">News Letter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Equipe/equipe.php" style="margin-left: 20px;">Equipe</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
              echo  $_SESSION['nom_admin'];
              ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Logout</a>
              
          </li>
                          
          
        </ul>
      </div>
    </div>
    </nav>