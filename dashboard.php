<?php
session_start();
require_once('libraires/utils.php');
if(!($_SESSION['status'])){
    session_destroy();
    redirect("index.php");
    // echo "la session n'est là";
};
require_once('libraires/database.php');
require_once('libraires/models/Eleve.php');
require_once('libraires/models/Annee.php');
require_once('libraires/models/Coefficient.php');
require_once('libraires/models/Prof.php');
require_once('libraires/models/Matiere.php');
require_once('libraires/models/Classe.php');
// $Eleve = new Eleve();
$Annee = new Annee();
$Coefficient = new Coefficient();
$Prof = new Prof();
$Matiere = new Matiere();
$Classe = new Classe();

$con= getPdo();
    $query=$con->prepare("SELECT * FROM eleves JOIN classes ON  eleves.classe_id =classes.id  JOIN annees ON eleves.annee_id=annees.id ORDER BY 'elv_id' DESC LIMIT 2");
    $query->execute();
    $eleves=$query->fetchAll();
// la liste totale des eleves
// $eleves = $Eleve->findAll();
// la liste des années
$annees=$Annee->findAll();
// la liste des matières
$matieres= $Matiere->findAll();
//le nombre de classes
$classes =$Classe->findAll();
//le nombre des professeurs
$professeurs =$Prof->findAll();
// la liste des coefficients
$coefficients =$Coefficient-> findAll();
//le nombre de fille
$fillescount = findFilles();
//le nombre de garçons
$garconscount = findGarcons();
//liste des professeurs et matieres enseignés
$profMat = profMat();
//liste des matiere, classes et coefficient
$matiereClasse = matiereClasse();
$pageTitle = "Dashboard";
render("dashboard",compact('eleves','classes','annees','fillescount','garconscount','professeurs','matieres','pageTitle'));
?>
