<?php
require_once('includes/header.php');
?>

<div class="center">
    <h1>Avis Clients</h1><br>
    <?php
            require_once("includes/database.php");    

            if (isset($_POST['submit'])) {

                extract($_POST);

                // print_r($_FILES['fichier']);

                $content_dir = 'assets/images/';

                $tmp_file = $_FILES['fichier']['tmp_name'];

                if (!is_uploaded_file($tmp_file)) {
                    exit('Vous avez oubliez votre image !');
                }

                $type_file = $_FILES['fichier']['type'];

                if (!strstr($type_file,'jpeg') && !strstr($type_file,'png')) {
                    exit("ce fichier n'est pas une image");
                }

                $name_file = time().'.jpg';
                
                if (!move_uploaded_file($tmp_file,$content_dir.$name_file)) {
                    exit('impossible de uploader le fichier');

                }

                $save_article = $db->prepare('INSERT INTO review(titre,contenu,images_name) VALUES(?,?,?)');

                $save_article->execute(array($titre,$contenu,$name_file));
                echo "<h5 style='color:green;border: solid 1px black;text-align:center;background-color:white;padding:3px;'> Opération réussie</h5>";

            }

            ?><br>
    <!-- Ajouter un article -->
    <h5>Nom ou Société</h5>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="titre" placeholder="Nom ou Société" required="" class="form form-control">
        <h5>Votre avis en commentaire</h5>
        <textarea name="contenu" placeholder="Votre avis..." class="form form-control"></textarea><br>
        <h5>Une photo de vous ou de votre société</h5>
        <input type="file" name="fichier"><br><br>
        <input type="submit" name="submit" class="btn btn-light">
    </form>

    <!-- Modifier et supprimer Début-->
    </table>

</div>