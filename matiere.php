<?php
session_start();
require_once('libraires/utils.php');
if(!($_SESSION['status'])){
    session_destroy();
    redirect("index.php");
    // echo "la session n'est là";
};
require_once('libraires/database.php');
require_once('libraires/models/Classe.php');
require_once('libraires/models/Coefficient.php');
require_once('libraires/models/Matiere.php');

$Classe = new Classe();
$Coefficient = new Coefficient();
$Matiere = new Matiere();

//la liste totale de classe
$classes =$Classe->findAll();
$coef = $Coefficient->findAll();
$matieres = $Matiere->findAll();

$pageTitle = "Liste des classes";
render("matieres",compact('classes','coef','matieres','pageTitle'));