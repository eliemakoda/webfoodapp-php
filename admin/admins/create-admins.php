<?php
require '../../config/app.php';
require '../header/header.php';
?>
<?php
$monapp=new App;

 if(isset($_POST['submit']))
 {
     $nom= $_POST['username'];
     $email= $_POST['email'];
     $password=$_POST['password'];
     $requete = "INSERT INTO admin (nom,email,password) VALUES (:username,:email,:password)";
     $tab= [
         ":username"=>$nom,
         ":email" =>$email,
         ":password" =>$password,
     ];
     $destination="./admins.php";
     $monapp->inserer($requete, $tab,$destination);
     
 }
if(isset($_POST['update']))
{
  $nom= $_POST['username'];
  $email= $_POST['email'];
  $password=$_POST['password'];
  $id=$_GET['id'];
  $req= "UPDATE `admin` SET `nom`='$nom',`email`='$email' WHERE id=$id";
  $monapp->maj($req, "./admins.php");
}
?>

    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">creer  Admins</h5>
              <?php
                if(isset($_GET["id_modif"])):
                  $id_m=$_GET["id_modif"];
                 $data= $monapp->SelectionnerUn("Select * from admin where id=$id_m");
                ?>
          <form method="POST" action="create-admins.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
                <!-- Email input -->
              
                <div class="form-outline mb-4 mt-4">
                  <input type="email" name="email" id="form2Example1" class="form-control"  value=<?php echo $data->email;?> />
                 
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="username" id="form2Example1" class="form-control" value=<?php echo $data->nom;?>/>
                </div>
              
                <!-- Submit button -->
                <button type="submit" name="update" class="btn btn-primary  mb-4 text-center">Mettre à jour</button>
              </form>
                  <?php else:
                     ?>
                     <form method="POST" action="create-admins.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />
                 
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="username" id="form2Example1" class="form-control" placeholder="Nom admin" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example1" class="form-control" placeholder="Mot de passe" />
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">creer</button>

          
              </form>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>