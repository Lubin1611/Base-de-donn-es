<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/01/2019
 * Time: 16:02
 */

include "index.php";

if (isset($_POST["ajoutNom"]) and isset($_POST["ajoutPrenom"]) and isset($_POST["ajoutAge"])) {

    $recupNom = $_POST["ajoutNom"];
    $recupPrenom = $_POST["ajoutPrenom"];
    $recupAge = $_POST["ajoutAge"];

    dayday('eleves', $recupPrenom, $recupNom, $recupAge);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div><?php afficher()?></div>


<h1>Ajouter un elève</h1>

<form action="Form.php" method="post">

    <label for = "ajoutNom">Nom : </label><input type="text" id="ajoutNom" name="ajoutNom">
    <label for = "ajoutPrenom">Prenom : </label><input type="text" id="ajoutPrenom" name="ajoutPrenom">
    <label for = "ajoutAge">Age : </label><input type="number" id="ajoutAge" name="ajoutAge">
    <input type="submit" value="Envoyez">
</form>

Pour pouvoir supprimer un élève, cliquez sur ce lien <a href="index2.php">Cliquez ici</a>

</body>
</html>
