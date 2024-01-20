<?php
session_start();

require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM categorie WHERE 1";
$categorie= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM categorie WHERE id=$id";
  $app->supprimer($req,"./categorie.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Categories</h5>
             <a  href="create-categorie.php" class="btn btn-primary mb-4 text-center float-right">Creer une catgorie</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($categorie)&& ($categorie!=null)):
                    $i=0;
                  foreach($categorie as $cat):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $cat->nom; ?></td>
                    <td><?php echo $cat->description; ?></td>
                    <td><a  type="submit" href="./categorie.php?id_sup=<?php echo $cat->id; ?>" class="btn btn-danger">supprimer</a>
                    <a type="submit" href="./create-categorie.php?id_modif=<?php echo $cat->id; ?>" class="btn btn-info">Modifier</a>
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