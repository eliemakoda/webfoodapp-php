<?php
require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM publication WHERE 1";
$public= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM publication WHERE id=$id";
  $app->supprimer($req,"./blog.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Blog</h5>
             <a  href="create-blog.php" class="btn btn-primary mb-4 text-center float-right">Creer Publication</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Pulié le </th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($public)&& ($public!=null)):
                    $i=0;
                  foreach($public as $pub):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $pub->title; ?></td>
                    <td><?php echo $pub->date_add; ?></td>
                    <td><a  type="submit" href="./blog.php?id_sup=<?php echo $pub->id; ?>" class="btn btn-danger">supprimer</a>
                    <a type="submit" href="./create-blog.php?id_modif=<?php echo $pub->id; ?>" class="btn btn-info">Modifier</a>
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