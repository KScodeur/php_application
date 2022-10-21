<?php
require_once("libraires/models/Annee.php");
require_once("libraires/utils.php");
require_once("libraires/database.php");
$Annee = new Annee();

$id= $_GET['id'];


// recuperer l'id d
$annee=$Annee->find($id);

// la mise à jour
if (isset($_POST['editer'])) {
$result = $Annee->update($id);
if ($result) {
    redirect('location:dashboard.php');
}else{
    echo 'non';
}
}

$pageTitle = "Update_année";
render("update/anneeForm",compact('annee','pageTitle'));


?>
