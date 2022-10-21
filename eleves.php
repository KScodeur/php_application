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
require_once('libraires/models/Classe.php');
$Eleve = new Eleve();
$Annee = new Annee();
$Classe = new Classe();
// la liste totale des eleves
$eleves = $Eleve->findAll();
// la liste des années
$annees=$Annee->findAll();
// la liste des matières
//le nombre de classes
$classes =$Classe->findAll();
$pageTitle= "Elèves";
render("eleves",compact('eleves','annees','classes','pageTitle'));
?>