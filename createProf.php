<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();
if(isset($_POST['nom'])&& !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])&&
    isset($_POST['grade'])&& !empty($_POST['grade'])&& isset($_POST['specialite'])&& !empty($_POST['specialite']))
    {
        $nom=htmlspecialchars(strip_tags($_POST['nom']));
        $prenom=htmlspecialchars($_POST['prenom']);
        $grade=htmlspecialchars($_POST['grade']);
        $specialite=htmlspecialchars($_POST['specialite']);
        // var_dump($nom);
        $sql="INSERT INTO professeurs (`nom`,`prenom`,`grade`,`specialite`,`created_at`,`updated_at`) VALUES (:nom,:prenom,:grade,:specialite,NOW(),NOW())";
        $query =$con->prepare($sql);
        $query->bindvalue(":nom",$_POST['nom']);
        $query->bindvalue(":prenom",$_POST['prenom']);
        $query->bindvalue(":grade",$_POST['grade']);
        $query->bindvalue(":specialite",$_POST['specialite']);
        $result=$query->execute();
        if($result){
            header('location: professeur.php');
        }
    }

    $pageTitle = "Create_Professeur";
    render("create/formProf",compact('pageTitle'));

?>

