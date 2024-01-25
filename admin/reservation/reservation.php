<?php
session_start();

require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM reservation WHERE 1 ORDER BY statut ASC";
$reserv= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM reservation WHERE id=$id";
  $app->supprimer($req,"./reservation.php");
}
if(isset($_GET['id_modif']))
{
  $id=$_GET["id_modif"];
  $sql="UPDATE reservation SET statut=1 where id=$id";
  $dest="./reservation.php";
  $app->maj($sql, $dest);
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Reservation</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom </th>
                    <th scope="col">email</th>
                    <th scope="col">Statut CMD </th>
                    <th scope="col">Tel </th>
                    <th scope="col">Message </th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($reserv)&& ($reserv!=null)):
                    $i=0;
                  foreach($reserv as $res):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $res->name; ?></td>
                    <td><?php echo $res->email; ?></td>
                    <td><?php echo $res->statut==0? "Non-livvré":"Livré"; ?></td>
                    <td><?php echo $res->phone; ?></td>
                    <td><?php echo $res->message; ?></td>

                    <td><a  type="submit" href="./reservation.php?id_sup=<?php echo $res->id; ?>" class="btn btn-danger">supprimer</a>
                    <?php if($res->statut==0): ?>
                    <td><a  type="submit" href="./reservation.php?id_modif=<?php echo $res->id; ?>" class="btn btn-info">confirmer la Livraison</a>
                    <?php endif; ?>

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