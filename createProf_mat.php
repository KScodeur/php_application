<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');

$con = getPdo();

if(isset($_POST['submit']))
{
    $query=$con->prepare("INSERT INTO professeur_matiere ( professeur_id,matiere_id,created_at,updated_at) VALUES (:professeur_id, :matiere_id ,NOW(),NOW())");
    $array=[
        'professeur_id'=>$_POST['professeur_id'],
        'matiere_id'=>$_POST['matiere_id']
    ];
    // var_dump($array);
    $result=$query->execute($array);
    
    if($result){
        header('location: prof_mat.php');
    }
}
$pageTitle = "Professeurs et matière";
    render("prof_mat");
?>
