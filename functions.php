<?php
function check_login($con){
   if(isset($_SESSION["id"] ))
   {
       $id= $_SESSION["id"];
       $query = "select * from users where id = '$id' limit 1";

       $result=$con->prepare($query);
       $result->execute();
       $user_data = $result->fetch();
       if($user_data){
           return $user_data;
       }
   }
   //redirect to login
//    header("location:index.php");
//    die;
}