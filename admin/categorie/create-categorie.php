<?php
session_start();

require '../../config/app.php';
require '../header/header.php';
?>
<?php
$monapp=new App;

 if(isset($_POST['submit']))
 {
     $description= $_POST['description'];
     $nom= $_POST['nom'];
     $requete = "INSERT INTO categorie (nom,description) VALUES (:nom,:description)";
     $tab= [
         ":nom"=>$nom,
         ":description" =>$description,
     ];
     $destination="./create-categorie.php";
     $monapp->inserer($requete, $tab,$destination);
     
 }
if(isset($_POST['update']))
{
  $nom= $_POST['nom'];
  $desc= $_POST['description'];
  $id=$_GET['id'];
  $req= "UPDATE `categorie` SET `nom`='$nom',`description`='$desc' WHERE id=$id";
  $monapp->maj($req, "./categorie.php");
}
?>

    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">creer  une catégorie de menus</h5>
              <?php
                if(isset($_GET["id_modif"])):
                  $id_m=$_GET["id_modif"];
                 $data= $monapp->SelectionnerUn("Select * from categorie where id=$id_m");
                ?>
          <form method="POST" action="create-categorie.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
                <!-- Email input -->
              
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="nom" id="form2Example1" class="form-control"  value=<?php echo $data->nom;?> />
                 
                </div>

                <div class="form-outline mb-4">
                    <textarea name="description" id="form2Example1" cols="10" rows="40" value=<?php echo $data->description;?>></textarea>
                  <!-- <input type="text" name="description" id="form2Example1" class="form-control" value=
                  <!-- 
                //   php echo $data->description;
                // ?>
                /> --> -->
                </div>
              
                <!-- Submit button -->
                <button type="submit" name="update" class="btn btn-primary  mb-4 text-center">Mettre à jour</button>
              </form>
                  <?php else:
                     ?>
                     <form method="POST" action="create-categorie.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="nom" name="nom" id="form2Example1" class="form-control" placeholder="nom" />
                 
                </div>

                <div class="form-outline mb-4 col-1">
                    <label for="description">description</label>
                    <textarea name="description" id="form2Example1" cols="30" rows="10"></textarea>
                  <!-- <input type="text" name="username" id="form2Example1" class="form-control" placeholder="Nom admin" /> -->
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