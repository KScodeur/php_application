<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
require_once("libraires/models/Classe.php");
require_once("libraires/models/Matiere.php");
require_once("libraires/models/Coefficient.php");
$Classe= new Classe();
$Matiere= new Matiere();
$Coefficient= new Coefficient();
$id =$_GET['id'];

$classes=$Classe->findAll();

$matieres=$Matiere->findAll();

$coefficients=$Coefficient->findAll();
$con= getPdo();
$query =$con->prepare("SELECT * FROM matiere_classe WHERE mc_id=$id");
$query->execute();
$matiere_classe=$query->fetch();

if(isset($_POST['editer']))
{
   $result =updateMat_classe($id);
    if($result){
        redirect('dashboard.php');
    }else{
        echo 'non';
    }
}


$pageTitle = "update classe et matière";
render("update/mat_classeForm",compact('classes','matieres','coefficients','matiere_classe','pageTitle'));
?>