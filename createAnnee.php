<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();
if(isset($_POST['libelles'])&& !empty($_POST['libelles']))
    {
        $libelles=htmlspecialchars($_POST['libelles']);
       
        $sql="INSERT INTO annees (`libelles`,`created_at`,`updated_at`) VALUES (:libelles,NOW(),NOW())";
        $query =$con->prepare($sql);
        $array=[
            'libelles'=>$libelles
        ];
        $result=$query->execute($array);
        var_dump($result);

        if($result){
            echo 'c est bon';
        }else{echo 'pas bon';}

    }else{
        echo 'veiller remplir toute les inputs';
    }

    $pageTitle="ajouter une nouvelle année";
    render("create/formAnnee");
?>
