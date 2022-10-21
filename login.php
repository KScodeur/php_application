<?php
require_once('libraires/database.php');
require_once('libraires/utils.php');

$con = getPdo();
// $pass ='pass';
// echo password_hash($pass, PASSWORD_BCRYPT);
// exit;
    // include("functions.php");

    // if($_SERVER['REQUEST_METHOD']== "POST")
    // {
        //verification de la connection a la base de données
        if(isset($_POST['valide']))
        if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) &&!empty($_POST['password']) && !is_numeric($_POST['name']))
        {
           
            $name =htmlspecialchars($_POST['name']);
            $password = htmlspecialchars($_POST['password']);
            // read from database
            $query = "SELECT * FROM utilisateurs WHERE nom = ? AND password = ?";
            $request = $con->prepare($query);
            $request->execute(array($name,$password));
            $user= $request->fetch();
            // var_dump($user);
            if($user)
            {
                
                session_start();
                $_SESSION['status']='connecter';
                $_SESSION['name']=$name;
                $_SESSION['password']=$password;
                if($_SESSION['status']=='connecter')
                    {
                        redirect('dashboard.php');
                        // echo "session connesté";   
                    }
            }else
            {
                
                $_SESSION['form']=['name'=> $name];
                $_SESSION['error']="nom ou mot de passe incorrect";
            }
        }
        else
        {
            $_SESSION['error']="Entrer le nom et le mot de passe";

        }
?>  