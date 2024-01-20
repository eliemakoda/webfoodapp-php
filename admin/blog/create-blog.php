<?php
session_start();

require '../../config/app.php';
require '../header/header.php';
?>
<?php
$monapp=new App;

 if(isset($_POST['submit']))
 {
    $title=$_POST['title'];
    $description=$_POST["description"];
    $images = $_FILES["images"];
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
  

     $requete = "INSERT INTO publication(title, description, images) VALUES(:title,:description,:images)";
     $tab= [
         ":title"=>$title,
         ":description" =>$description,
         ":images" =>implode(',',$urlsImages)
     ];
     $destination="./blog.php";
     $monapp->inserer($requete, $tab,$destination);
     
 }}
if(isset($_POST['update']))
{
  $title= $_POST['title'];
  $desc= $_POST['description'];
  $id=$_GET['id'];
  $req= "UPDATE `publication` SET `title`='$title',`description`='$desc' WHERE id=$id";
  $monapp->maj($req, "./blog.php");
}
?>

    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">creer des Publications</h5>
              <?php
                if(isset($_GET["id_modif"])):
                  $id_m=$_GET["id_modif"];
                 $data= $monapp->SelectionnerUn("Select * from publication where id=$id_m");
                ?>
          <form method="POST" action="create-blog.php?id=<?php echo $data->id;?>" enctype="multipart/form-data">
                <!-- Email input -->
              
                <div class="form-outline mb-4 mt-4">
                  <input type="title" name="title" id="form2Example1" class="form-control"  value=<?php echo $data->title;?> />
                 
                </div>

                <div class="form-outline mb-4">
                    <textarea name="description" id="form2Example1"  value=<?php echo $data->description;?>></textarea>
                  <!-- <input type="text" name="username" id="form2Example1" class="form-control" value=<// echo $data->nom;?>/> -->
                </div>
              
                <!-- Submit button -->
                <button type="submit" name="update" class="btn btn-primary  mb-4 text-center">Mettre à jour</button>
              </form>
                  <?php else:
                     ?>
                     <form method="POST" action="create-blog.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="title" name="title" id="form2Example1" class="form-control" placeholder="titre" />
                 
                </div>

                <div class="form-outline mb-4">
                    <textarea name="description" id="form2Example1" cols="30" rows="10" placeholder="votre texte ici"></textarea>
                  <!-- <input type="text" name="username" id="form2Example1" class="form-control" placeholder="Nom admin" /> -->
                </div>
                <div class="form-outline mb-4">
                <input type="file" name="images[]" id="form2Example1" class="form-control" placeholder="images" multiple />
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