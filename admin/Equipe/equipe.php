<?php
session_start();

require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM team WHERE 1";
$equipe= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM team WHERE id=$id";
  $app->supprimer($req,"./equipe.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Equipe</h5>
             <a  href="create-equipe.php" class="btn btn-primary mb-4 text-center float-right">Ajouter un Membre</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">position</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($equipe)&& ($equipe!=null)):
                    $i=0;
                  foreach($equipe as $eq):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $eq->name; ?></td>
                    <td><?php echo $eq->position; ?></td>
                    <td><a  type="submit" href="./equipe.php?id_sup=<?php echo $eq->id; ?>" class="btn btn-danger">supprimer</a>
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