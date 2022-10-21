<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();
if(isset($_POST['coef'])&& !empty($_POST['coef']))
    {
        $coef=htmlspecialchars($_POST['coef']);
       
        $sql="INSERT INTO coefficients (`coef`,`created_at`,`updated_at`) VALUES (:coef,NOW(),NOW())";
        $query =$con->prepare($sql);
        $array=[
            'coef'=>$coef
        ];
        $result=$query->execute($array);
        var_dump($result);

        if($result){
            echo 'c est bon';
        }else{echo 'pas bon';}

    }else{
        echo 'veiller remplir toute les inputs';
    };

    $pageTitle = "Create_coefficient";
    render("create/formCoefficient");

?>
