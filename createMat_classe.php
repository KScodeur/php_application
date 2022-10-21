<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();
$classes=findAllClasses();
$matieres=findAllMatieres();
$coefficients=findAllCoef();

if(isset($_POST['submit']))
{
    $query=$con->prepare("INSERT INTO matiere_classe (classe_id,matiere_id,coefficient_id,created_at,updated_at) VALUES (:classe_id, :matiere_id ,:coefficient_id,NOW(),NOW())");
    $array=[
        'classe_id'=>$_POST['classe_id'],
        'matiere_id'=>$_POST['matiere_id'],
        'coefficient_id'=>$_POST['coefficient_id']
    ];
    var_dump($array);
    $result=$query->execute($array);
    
    if($result){
        redirect('dashboard.php');
    }else{
        echo 'non';
    }
};
    $pageTitle = "Matière et classe";
    render("create/formMat_classe",compact('classes','matieres','coefficients','pageTitle'));
?>
