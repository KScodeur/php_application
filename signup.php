<?php
session_start();
require_once('libraires/database.php');
require_once('libraires/utils.php');
$con = getPdo();

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        //verification de la connection a la base de données
        if($con){
            echo "bien";
        }else{
            echo "mal";
        }
        if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email']) && !is_numeric($_POST['name']))
        {
            $user_name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            //insertion dans la base de données
            $query = "INSERT into users (`name`,`email`,`password`,`created_at`,`updated_at`) VALUES(:name,:email,:password,NOW(),NOW())";
            $request = $con->prepare($query);
            $request->bindvalue(":name", $_POST['name']);
            $request->bindvalue(":email", $_POST['email']);
            $request->bindvalue(":password", $_POST['password']);
            $verification = $request->execute();
            // var_dump($request);
            if($verification){
            
            redirect("index.php");

            }else{
                echo 'ce n\'est pas bon signe';
            }
            // header("Location:login.php");
            // die;
        }
    }else{
        echo "svp entrer de bonne information";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div id="box">
        <form method="POST">
            <h2>creer un compte</h2>
            <div>
                <label for="">nom</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">Mot de passe </label>
                <input type="text" name="password">
            </div>
            <!-- <input type="button" value="Login"> -->
            <button type="submit">enregistrer</button>

            <a href="index.php">Se connecter</a>
        </form>
    </div>
</body>
</html>