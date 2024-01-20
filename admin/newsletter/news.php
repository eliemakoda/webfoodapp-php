<?php
session_start();

require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM newsletter WHERE 1";
$newsl= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM newsletter WHERE id=$id";
  $app->supprimer($req,"./news.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">News Letter</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">email</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($newsl)&& ($newsl!=null)):
                    $i=0;
                  foreach($newsl as $news):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $news->email; ?></td>
                    <td><a  type="submit" href="./admins.php?id_sup=<?php echo $news->id; ?>" class="btn btn-danger">supprimer</a>
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