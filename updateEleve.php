<?php
require_once('libraires/utils.php');
require_once('libraires/database.php');
require_once('libraires/models/Eleve.php');
require_once('libraires/models/Annee.php');
require_once('libraires/models/Classe.php');
$Eleve = new Eleve();
$Annee = new Annee();
$Classe = new Classe();

$con = getPdo();
// recuperer la table classe
$classes= $Classe->findAll();
// recuperer la table annees
$annees=$Annee->findAll();

// recuperer l'id de l'élèves
$id= $_GET['id'];
$eleve = $Eleve->find($id);
// la mise à jour
if (isset($_POST['editer'])) {
    $result=updateEleve($id);
if ($result) {
    header("location: eleves.php");
}else{
    echo 'non';
}
}

$pageTitle = "update_Eleve";
render("editEleve",compact('classes','annees','eleve','pageTitle'));

?>