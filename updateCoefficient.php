<?php
require_once('libraires/models/Coefficient.php');
require_once('libraires/utils.php');
require_once('libraires/database.php');

$con = getPdo();
$id= $_GET['id'];

$coefficient = findCoef($id);

// la mise à jour
if (isset($_POST['editer'])) {
$result = updateCoef($id);
if ($result) {
    redirect('dashboard.php');
}else{
    echo 'non';
}
}

$pageTitle = "update_coefficient";
render("update/coefficientform",compact('coefficient','pageTitle'));
?>
