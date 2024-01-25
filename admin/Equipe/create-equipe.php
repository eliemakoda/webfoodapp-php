<?php
session_start();

require '../../config/app.php';
require '../header/header.php';
?>
<?php
$monapp=new App;

 if(isset($_POST['submit']))
 {
    $nom=$_POST["nom"];
    $poste=$_POST["poste"];
    $urlsImages = [];

    $uploadDirectory ="../../images/";
      
    // Vérifier s'il y a des erreurs lors du téléchargement des images
    if (!empty($_FILES["images"]["name"][0])) {
        foreach ($_FILES["images"]["name"] as $key => $imageName) {
            $imageTmpName = $_FILES["images"]["tmp_name"][$key];
            $urlsImages[]=$imageName;
            $imagePath = $uploadDirectory . $imageName;
            move_uploaded_file($imageTmpName,$imagePath);
    }
  
    $sql="INSERT INTO team(position, name, image) VALUES(:position, :name, :image)";
     $tab=[
        ":position"=>$poste,
         ":name"=>$nom,
          ":image"=>implode(',',$urlsImages)
     ];
     $dest="./equipe.php";
     $monapp->inserer($sql,$tab,$dest);
    }
 }

?>

    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Ajouter un Membre à votre Equipe</h5>
    
                     <form method="POST" action="create-equipe.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="nom" name="nom" id="form2Example1" class="form-control" placeholder="nom" />
                 
                </div>

                <div class="form-outline mb-4 mt-4">
                  <input type="nom" name="poste" id="form2Example1" class="form-control" placeholder="Poste Occupé" />
                 
                </div>
                <div class="form-outline mb-4">
                <input type="file" name="images[]" id="form2Example1" class="form-control" placeholder="images" multiple />
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Ajouter</button>

          
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>