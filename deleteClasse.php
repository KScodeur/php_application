<?php
require_once('libraires/models/Classe.php');
$Classe = new Classe();

$id = $_GET['id'];

$result =$Classe->delete($id);
if($result){
redirect("classes.php");

}else{
    echo 'non';
}

?>