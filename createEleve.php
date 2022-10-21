<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
require_once('libraires/models/Annee.php');
require_once('libraires/models/Classe.php');
$con = getPdo();
    // afficher les annees
    $Annees= new Annee();
    $Classes= new Classe();
    $annees=$Annees->findAll();
    // afficher les classes
    $classes=$Classes->findAll();
    if(isset($_POST['nom'])&& !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom'])&&
        isset($_POST['sexe'])&& !empty($_POST['sexe']) && isset($_POST['classe_id']) && !empty($_POST['classe_id'])&& 
        isset($_POST['annee_id']) && !empty($_POST['annee_id']))

    {
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $sexe=htmlspecialchars($_POST['sexe']);
        $classe_id=htmlspecialchars($_POST['classe_id']);
        $annee_id=htmlspecialchars($_POST['annee_id']);
        $query=$con->prepare("INSERT INTO eleves (nom, prenom, sexe, classe_id, annee_id,created_at, updated_at) VALUES (:nom,:prenom,:sexe,:classe_id,:annee_id,NOW(),NOW())");
        $array=[
            'nom'=>$nom,
            'prenom'=>$prenom, 
            'sexe'=>$sexe, 
            'classe_id'=>$classe_id, 
            'annee_id'=>$annee_id
        ];
        $query->execute($array);
        // if ($query) {
        //    echo 'élèves enregistrer avec succès';
        // }
        // else{
        //     echo 'erreur';
        // }
    };
    $pageTitle = "Create_élève";
    render("ajoutEleve",compact('annees','classes','pageTitle'));
?>