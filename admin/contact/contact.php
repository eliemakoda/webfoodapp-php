<?php
require '../../config/app.php';
$app=   new App;
$req = "SELECT * FROM contact WHERE 1";
$contact= $app->SelectionnerTout($req);
if(isset($_GET['id_sup']))
{
  $id=$_GET['id_sup'];
  $req=  "DELETE FROM contact WHERE id=$id";
  $app->supprimer($req,"./contact.php");
}
require '../header/header.php';
?>
    <div class="container-fluid">

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Contact</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">email</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($contact)&& ($contact!=null)):
                    $i=0;
                  foreach($contact as $cont):
                      $i=$i+1;
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $cont->fullname; ?></td>
                    <td><?php echo $cont->email; ?></td>
                    <td><?php echo $cont->message; ?></td>
                    <td><a  type="submit" href="./contact.php?id_sup=<?php echo $cont->id; ?>" class="btn btn-danger">supprimer</a>
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