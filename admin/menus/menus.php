<?php
require '../../config/app.php';
$app=   new App;
$requete = " 
        SELECT categorie.nom as cnom, categorie.id as cid, menu.* FROM categorie
        left join menu on categorie.id= menu.id_categorie
        WHERE 1";
$resultats = $app->SelectionnerTout($requete);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM menu WHERE id=$id";
  $app->supprimer($req,"./menus.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Menus</h5>
             <a  href="create-menu.php" class="btn btn-primary mb-4 text-center float-right">Creer Menus</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">quantite</th>
                    <th scope="col">prix</th>
                    <th scope="col">categorie</th>

                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($menus)&& ($menus!=null)):
                    $i=0;
                  foreach($menus as $menu):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $menu->nom; ?></td>
                    <td><?php echo $menu->quantite; ?></td>
                    <td><?php echo $admin->px; ?></td>
                    <td><?php echo $admin->cnom; ?></td>

                    <td><a  type="submit" href="./menus.php?id_sup=<?php echo $menu->id; ?>" class="btn btn-danger">supprimer</a>
                    <a type="submit" href="./create-menu.php?id_modif=<?php echo $menu->id; ?>" class="btn btn-info">Modifier</a>
                  </td>

                  </tr>
               <?php
               endforeach;
               endif
               ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>
<script type="text/javascript">

</script>
</body>
</html>