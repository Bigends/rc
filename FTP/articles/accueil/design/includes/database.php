<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=ryzencode;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    return $db;
} catch (PDOException $e) {
    echo "erreur de la connexion à la base de donnée".$e->getMessage();
}


?>