<?php
require_once('libraires/models/Coefficient.php');
$Coefficient= new Coefficient();

$id = $_GET['id'];

$result=$Coefficient->delete($id);
if($result){
redirect("dashboard.php");

}else{
    echo 'non';
}

?>