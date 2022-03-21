<?php
require_once('includes/header.php');
?>

<div class="center">
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add_article') {
            require_once("includes/database.php");
            if (isset($_POST['submit'])) {

                extract($_POST);

                // print_r($_FILES['fichier']);

                $content_dir = 'assets/img/';

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

                $save_article = $db->prepare('INSERT INTO article(titre,contenu,images_name,plus) VALUES(?,?,?,?)');

                $save_article->execute(array($titre,$contenu,$name_file,$plus));
                echo "<h5 style='color:green;border: solid 1px black;text-align:center;background-color:white;padding:3px;'> Opération réussie</h5>";

            }
            ?><br>
    <!-- Ajouter un article -->
    <h5>Titre</h5>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="titre" placeholder="Titre de l'article" required="" class="form form-control">
        <h5>Date</h5>
        <input type="text" name="plus" placeholder="Date de l'article" required="" class="form form-control">
        <h5>Description</h5>
        <textarea name="contenu" placeholder="Description de l'article" class="form form-control"></textarea><br>
        <input type="file" name="fichier"><br><br>
        <input type="submit" name="submit" class="btn btn-light">
    </form>

    <!-- Modifier et supprimer Début-->
    <?php
        }elseif ($_GET['action'] == 'edit_delete') {
            require_once("includes/database.php");
            $req_all_article = $db->prepare('SELECT *FROM article');
            $req_all_article->execute();
            ?> <table style="width: 100%"><?php
            while ($reponse= $req_all_article->fetch(PDO::FETCH_OBJ)) { // Boutton Modif & Supp
                ?>
        <tr>
            <td><?php echo $reponse->titre ?></td>
            <td><a href="?action=edit&id=<?php echo $reponse->id ?>">modifier</a></td>
            <td><a href="?action=delete&id=<?php echo $reponse->id ?>">supprimer</a></td>
        </tr>
        <?php
            }
            ?>
    </table><?php 
        }elseif ($_GET['action'] == 'delete') { // Supprimer l'article

            require_once("includes/database.php");

            $delete_article = $db->prepare('DELETE FROM article WHERE id=?');
            $delete_article->execute(array($_GET['id']));
            echo "<h5 style='color:white;border: solid 1px black;text-align:center;background-color:green;padding:3px;'> Article supprimé!</h5>";

        }elseif ($_GET['action'] == "edit") { // Modifier l'article

            require_once("includes/database.php");

            if (isset($_POST['submit'])) { // Mis à jour

                extract($_POST);

                $article_update = $db->prepare('UPDATE article set titre=?,plus=?,contenu=? WHERE id=?');
                $article_update->execute(array($titre,$plus,$contenu,$_GET['id']));
                echo "<h5 style='color:white;border: solid 1px black;text-align:center;background-color:green;padding:3px;'> Article modifié!</h5>";
            }

            $req_all_value = $db->prepare('SELECT *FROM article WHERE id=?');
            $req_all_value->execute(array($_GET['id']));
            $reponses = $req_all_value->fetch(PDO::FETCH_OBJ);
            ?>

    <!-- Formulaire Modification et Suppression -->
    <form method="POST" action="">
        <h5>Titre</h5>
        <input type="text" name="titre" value="<?php echo $reponses->titre ?>" required="" class="form form-control">
        <h5>Date</h5>
        <input type="text" name="plus" value="<?php echo $reponses->plus ?>" required="" class="form form-control">
        <h5>Description</h5>
        <textarea name="contenu" require=""
            class="form form-control"><?php echo $reponses->contenu ?></textarea><br><br>
        <input type="file" name="fichier"><br><br> <!-- Fichier Image En cours... -->
        <input type="submit" name="submit" class="btn btn-light">
    </form>
    <?php
        } // Modifier et supprimer Fin
    }

    ?>
</div>

