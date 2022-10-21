<?php
require_once('libraires/models/Prof.php');
$Prof=new Prof();

$id = $_GET['id'];

$result =$Prof->delete($id);
if($result){
redirect('dashboard.php');

}else{
    echo 'non';
}

?>