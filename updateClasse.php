<?php
require_once('libraires/utils.php');
require_once('libraires/database.php');
require_once("libraires/models/Classe.php");
$Classe = new Classe();

$id= $_GET['id'];
// recuperer l'id de la classe
// echo $_GET['id'];
$classe =$Classe->find($id);

// la mise à jour
if (isset($_POST['editer'])) {
$result= updateClasse($id);
if ($result) {
    header('location: scolarite.php');
}
}

$pageTitle ="update_classe";
render("updateClasse",compact('classe','pageTitle'))
?>
