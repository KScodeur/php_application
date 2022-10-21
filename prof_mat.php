<?php
session_start();
require_once('libraires/utils.php');
if(!($_SESSION['status'])){
    session_destroy();
    redirect("index.php");
    // echo "la session n'est là";
};
require_once('libraires/database.php');
require_once('libraires/models/Matiere.php');
require_once('libraires/models/Prof.php');
require_once('libraires/models/Classe.php');
$con = getPdo();
$profMat = profMat();
$Matiere = new Matiere();
$Prof = new Prof();
$Classe = new Classe();
// la liste totale des matiere
$matieres = $Matiere->findAll();
// la liste des professeurs
$profs=$Prof->findAll();
// la liste des classes
$classes = $Classe->findAll();
$pageTitle = "Professeurs";
render("prof_mat",compact('matieres','profs','profMat','classes','pageTitle'));
?>