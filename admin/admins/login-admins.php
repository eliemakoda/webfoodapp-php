<?php
session_start();
require '../../config/app.php';
$apps =  new App;
$sqlm= "SELECT COUNT(*) AS nb from menu where 1 ";
$menu= $apps->SelectionnerUn($sqlm);
$sqlres= "SELECT COUNT(*) as nb FROM reservation WHERE 1";
$reserv= $apps->SelectionnerUn($sqlres);
$sql= "SELECT COUNT(*) as nb FROM publication WHERE 1";
$blog= $apps->SelectionnerUn($sql);
$sql= "SELECT COUNT(*) as nb FROM admin WHERE 1";
$admin= $apps->SelectionnerUn($sql);
$sql= "SELECT COUNT(*) as nb FROM replique WHERE 1";
$commentpost= $apps->SelectionnerUn($sql);
$sql= "SELECT COUNT(*) as nb FROM team WHERE 1";
$equipe= $apps->SelectionnerUn($sql);
$sql= "SELECT COUNT(*) as nb FROM categorie WHERE 1";
$categorie= $apps->SelectionnerUn($sql);
$sql= "SELECT COUNT(*) as nb FROM user WHERE 1";
$clients= $apps->SelectionnerUn($sql);
$sql= "SELECT COUNT(*) as nb FROM menureview WHERE 1";
$comMenu= $apps->SelectionnerUn($sql);
require '../header/header.php';
?>
    <div class="container-fluid">
            
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Menu</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">numbre total de menu: <?php echo $menu->nb?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Commandes</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">numbre total de commande: <?php echo $reserv->nb?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Publication Blog</h5>
              
              <p class="card-text">nombre total de Publication: <?php echo $blog->nb?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              
              <p class="card-text">nombre total d'administrateurs: <?php echo $admin->nb?>  </p>
              
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Commentaire sur nos blog</h5>
              
              <p class="card-text">nombre total de Commentaires sur notre blog: <?php echo $commentpost->nb?></p>
              
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">membres de notre Equipe</h5>
              
              <p class="card-text">nombre total des membres de notre Equipe: <?php echo $equipe->nb?></p>
              
            </div>
          </div>
        </div>



        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categorie de Menu</h5>
              
              <p class="card-text">nombre total des Categories de Menu: <?php echo $categorie->nb?></p>
              
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nos Fidèles Clients </h5>
              
              <p class="card-text">nombre total de Nos Fidèles Clients: <?php echo $clients->nb?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Appréciation de nos Menus </h5>
              
              <p class="card-text">nombre total d'Appreciation: <?php echo $comMenu->nb?></p>
              
            </div>
          </div>
        </div>

    </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>