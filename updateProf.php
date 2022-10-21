<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
require_once("libraires/models/Prof.php");
require_once("libraires/models/Prof.php");
$Prof= new Prof();
$con = getPdo();
$id= $_GET['id'];


// recuperer l'id de la classe
// echo $_GET['id'];
$prof =$Prof->find($id);

// la mise à jour
if (isset($_POST['editer'])) {
$result = updateProf($id);
if ($result) {
    header('Location: professeur.php');
}else{
    echo 'non';
}
}

$pageTitle = "update_prof";
render("updateProf",compact('prof','pageTitle'));
?>
