<?php
session_start();
require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM admin WHERE 1";
$admins= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM admin WHERE id=$id";
  $app->supprimer($req,"./admins.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="create-admins.php" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom d'utilisateur</th>
                    <th scope="col">email</th>
                    <th scope="col">Date D'ajout</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($admins)&& ($admins!=null)):
                    $i=0;
                  foreach($admins as $admin):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $admin->nom; ?></td>
                    <td><?php echo $admin->email; ?></td>
                    <td><?php echo $admin->added_date; ?></td>
                    <td><a  type="submit" href="./admins.php?id_sup=<?php echo $admin->id; ?>" class="btn btn-danger">supprimer</a>
                    <a type="submit" href="./create-admins.php?id_modif=<?php echo $admin->id; ?>" class="btn btn-info">Modifier</a>
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