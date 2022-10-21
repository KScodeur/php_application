<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
require_once("libraires/models/Prof.php");
require_once("libraires/models/Matiere.php");
$Prof= new Prof();
$Matiere = new Matiere();

$con = getPdo();
$id =$_GET['id'];

$professeurs=$Prof->findAll();

$matieres=$Matiere->findAll();

$query =$con->prepare("SELECT * FROM professeur_matiere WHERE pm_id=$id");
$query->execute();
$prof_mat=$query->fetch();

if(isset($_POST['editer']))
{
   $result =updateProfMat($id);
    
    if($result){
        redirect('dashboard.php');
    }else{
        echo 'non';
    }
}
$pageTitle = "update prof et matière";
render("update/prof_matForm",compact('professeurs','matieres','prof_mat','pageTitle'));
?>