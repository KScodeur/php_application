<?php
require_once('libraires/models/Eleve.php');
$Eleve = new Eleve();

$id = $_GET['id'];

$result = $Eleve->delete($id);
if($result){
// redirect('/Niceadmin/dashboard.php');
header("location: dashboard.php");
}else{
    echo 'non';
}

?>