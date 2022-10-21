<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();
if(isset($_POST['submit']))
if(isset($_POST['nom_classe'])&& !empty($_POST['nom_classe']) && isset($_POST['scolarite']) && !empty($_POST['scolarite']))
    {
        $classe=htmlspecialchars($_POST['nom_classe']);
        $scolarite=htmlspecialchars($_POST['scolarite']);
        // var_dump($nom);
        $sql="INSERT INTO classes (`nom_classe`,`scolarite`,`created_at`,`updated_at`) VALUES (:nom_classe,:scolarite,NOW(),NOW())";
        $query =$con->prepare($sql);
        $array=[
            "nom_classe"=>$classe,
            "scolarite"=>$scolarite
        ];
        $result=$query->execute($array);
        if($result){
            header("location: scolarite.php");
        }
        // else{echo 'pas bon';}
    }
    // else{
    //     echo 'veiller remplir tous les inputs';
    // }

    // $pageTitle = "Create_classe";
    // render("scolarite");
?>
