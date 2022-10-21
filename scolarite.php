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

$Classe = new Classe();

//la liste totale de classe
$classes =$Classe->findAll();

$pageTitle = "Liste des classes";
render("scolarites",compact('classes','pageTitle'));