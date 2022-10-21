<?php
require_once('libraires/models/Annee.php');
$Annee = new Annee();

$id = $_GET['id'];

$result = $Annee->delete($id);
if($result){
redirect("dashboard.php");

}else{
    echo 'non';
}

?>