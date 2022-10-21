<?php
function redirect($url){
header("location: $url");
};
//aaficher le html.php
function render(string $path, array $variables=[]){
    extract($variables);
    ob_start();
    require('frontEnd/'.$path.'.html.php');
    $pageContent = ob_get_clean();
    require('frontend/layout.html.php');
}