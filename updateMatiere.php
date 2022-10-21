<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
require_once('libraires/models/Matiere.php');
$Matiere=new Matiere();

$id= $_GET['id'];



// recuperer l'id de la classe
// echo $_GET['id'];
$matiere =$Matiere->find($id);

// la mise à jour
if (isset($_POST['editer'])) {
$result= updateMatiere($id);
if ($result) {
    redirect('dashboard.php');
}else{
    echo 'non';
}
}

$pageTitle = "update_matière";
render("update/matiereForm",compact('matiere','pageTitle'));
?>