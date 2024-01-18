<?php
require '../../config/app.php';
require '../header/header.php';
?>
<?php
$monapp = new App;
$category = $monapp->SelectionnerTout("SELECT * FROM categorie WHERE 1 ");
if (isset($_POST['submit'])) { // Récupérer les données du formulaire
  $nom = $_POST["nom"];
  $qte = $_POST["qte"];
  $desc1 = $_POST["desc1"];
  $desc2 = $_POST["desc2"];
  $category = $_POST["category"];
  $id_admin = $_SESSION['id_admin'] ? $_SESSION['id_admin'] : 1;
  $prix= $_POST['prix'];
  // Récupérer les fichiers images
  $images = $_FILES["images"];

  // Initialiser un tableau pour stocker les URL des images
  $urlsImages = [];

  // Parcourir chaque image et les stocker dans le dossier "images"
  foreach ($images["tmp_name"] as $key => $tmp_name) {
    $nomImage = $images["name"][$key];
    $cheminImage = "../../images/" . $nomImage;
    move_uploaded_file($tmp_name, $cheminImage);
    // Stocker l'URL de l'image dans le tableau
    $urlsImages[] = $cheminImage;
  }

  // Créer un tableau associatif pour toutes les valeurs de la requête
  $valeurs = [
    "nom" => $nom,
    "quantite" => $qte,
    "px" => $prix, 
    "description1" => $desc1,
    "description2" => $desc2,
    "images" => implode(",", $urlsImages), // Convertir le tableau en chaîne séparée par des virgules
    "id_categorie" => $category,
    "id_admin" => $id_admin
  ];
  $req = "INSERT INTO menu(nom, quantite, px, description1, description2, images, id_categorie, id_admin) VALUES (:nom, :quantite, :px, :description1, :description2, :images, :id_categorie, :id_admin)";
  $destination="./menus.php";
  $monapp->inserer($req, $valeurs, $destination);
}
if (isset($_POST['update'])) {

  $nom = $_POST["nom"];
  $qte = $_POST["qte"];
  $desc1 = $_POST["desc1"];
  $desc2 = $_POST["desc2"];
  $category = $_POST["category"];
  $prix= $_POST['prix'];
  $id = $_GET['id'];

  $reqMiseAJour = "
  UPDATE menu SET 
  nom = '$nom', 
  quantite = '$qte', 
  px = $prix, 
  description1 ='$desc1', 
  description2 = '$desc2', 
  WHERE id = '$id'"; 

  // $req = "UPDATE `admin` SET `nom`='$nom',`email`='$email' WHERE id=$id";
  $monapp->maj($reqMiseAJour, "./menus.php");
}
?>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline"> Menus</h5>
          <?php
          if (isset($_GET["id_modif"])) :
            $id_m = $_GET["id_modif"];
            $data = $monapp->SelectionnerUn("Select * from menu where id=$id_m");
          ?>
             <form method="POST" action="create-menu.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="nom" id="form2Example1" class="form-control" placeholder="Nom" value=<?php echo $data->nom ?> />

                </div>

                <div class="form-outline mb-4">
                  <input type="number" name="qte" id="form2Example1" class="form-control" placeholder="Quantite" value=<?php echo $data->quantite ?> />
                </div>
                <div class="form-outline mb-4">
                  <input type="number" name="prix" id="form2Example1" class="form-control" placeholder="Prix" value=<?php echo $data->px ?> />
                </div>
                <div class="form-outline mb-4 col-1">
                  <label for="desc1">Description culturelle</label>
                  <textarea name="desc1" class="form2Example1" rows="7" cols="67" placeholder="hi" value=<?php echo $data->description1 ?>>
                  </textarea>
                </div>

                <div class="form-outline mb-4 flex col-1">
                  <label for="desc2">Description commerciale</label>
                  <textarea name="desc2" class="form2Example1" rows="7" cols="67" placeholder="hi" aria-placeholder="hi" value=<?php echo $data->description2 ?>>
                  </textarea>
                </div>
                <div class="form-outline mb-4">
                  <select name="category" id=""> categorie
                    <?php
                    foreach ($category as $cat) :
                    ?>
                      <option value=<?php echo $cat->id ?>> <?php echo $cat->nom ?> </option>
                    <?php
                    endforeach;
                    ?>
                  </select>
                </div>
                <!-- Submit button -->
                <button type="submit" name="update" class="btn btn-primary  mb-4 text-center">Mettre à jours</button>


              </form>
            <?php else :
            if (isset($category) && ($category != null)) :
            ?>
              <form method="POST" action="create-menu.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="nom" id="form2Example1" class="form-control" placeholder="Nom" />

                </div>

                <div class="form-outline mb-4">
                  <input type="number" name="qte" id="form2Example1" class="form-control" placeholder="Quantite" />
                </div>
                <div class="form-outline mb-4">
                  <input type="number" name="prix" id="form2Example1" class="form-control" placeholder="Prix" />
                </div>
                <div class="form-outline mb-4 col-1">
                  <label for="desc1">Description culturelle</label>
                  <textarea name="desc1" class="form2Example1" rows="7" cols="67" placeholder="hi">
                  </textarea>
                </div>

                <div class="form-outline mb-4 flex col-1">
                  <label for="desc2">Description commerciale</label>
                  <textarea name="desc2" class="form2Example1" rows="7" cols="67" placeholder="hi" aria-placeholder="hi">
                  </textarea>
                </div>
                <div class="form-outline mb-4">
                  <select name="category" id=""> categorie
                    <?php
                    foreach ($category as $cat) :
                    ?>
                      <option value=<?php echo $cat->id ?>> <?php echo $cat->nom ?> </option>
                    <?php
                    endforeach;
                    ?>
                  </select>
                </div>

                <div class="form-outline mb-4">
                  <input type="file" name="images" id="form2Example1" class="form-control" placeholder="images" multiple />
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">creer</button>


              </form>
            <?php
            else :
            ?>
              <!-- <img src="../../images/menu/2.jpg" alt=""> -->

              <p>Aucune catégorie enregistrée actuellement veuillez en enregister une</p>
          <?php
            endif;

          endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

</script>
</body>

</html>