<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();
if(isset($_POST['nom_matiere'])&& !empty($_POST['nom_matiere']) && isset($_POST['abreviation']))
    {
        $matiere=htmlspecialchars($_POST['nom_matiere']);
        $abreviation=htmlspecialchars($_POST['abreviation']);
       
        // var_dump($nom);
        $sql="INSERT INTO matieres (`nom_matiere`,`abreviation`,`created_at`,`updated_at`) VALUES (:nom_matiere,:abreviation,NOW(),NOW())";
        $query =$con->prepare($sql);
        $array=[
            'nom_matiere'=>$matiere,
            'abreviation'=>$abreviation
        ];
        $result=$query->execute($array);
        if($result){
            header("location: matiere.php");
        }

    }

?>