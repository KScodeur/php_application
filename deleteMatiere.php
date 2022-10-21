<?php
require_once('libraires/models/Matiere.php');
$Matiere= new Matiere();

$id = $_GET['id'];

$result =$Matiere->delete($id);
if($result){
redirect('dashboard.php');

}else{
    echo 'non';
}

?>