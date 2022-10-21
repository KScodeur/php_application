<?php
$dbhost='localhost';
$dbport='3308';
$dbuser='root';
$dbpass='root';
$dbname='school_php';

try{
$con= new PDO ('mysql:host='.$dbhost.':'.$dbport.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
}catch(Exception $e){
    die('Erreur : ' .$e -> getMessage());
};

?>