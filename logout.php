<?php
require_once('libraires/utils.php');
session_start();
session_unset();
session_destroy();
// if(isset($_SESSION['status']))
// {
//     unset($_SESSION['status']);
    redirect('index.php');
// };


?> 
   