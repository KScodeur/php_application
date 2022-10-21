<?php
include("login.php");
require_once("libraires/utils.php");
$pageTitle="Myschool";
// include_once("'frontEnd/pages-login.html.php'",compact('pageTitle')");
require('frontEnd/pages-login.html.php');
ob_get_clean();

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
        <form action="" method="POST">
            <h2>login</h2>
            <div>
                <label for="">nom</label>
                <input type="text" name="name" value="<?=$_SESSION['form']['name']??''?>" />
            </div>
            <div>
                <label for="">Mot de passe </label>
                <input type="text" name="password">
            </div>
            <?php if(isset($_SESSION['error']))
            {?>
                <div><?=$_SESSION['error'];?></div>
            <?php  
             $_SESSION['error']=null;  
            }
            ?>
            <!-- <input type="button" value="Login"> -->
            <button type="submit" name="valide">Login</button>

        </form>
        <a href="signup.php">S'inscrire</a>

    </div>
</body>
</html>