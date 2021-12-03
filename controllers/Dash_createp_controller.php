<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    $flagCP = false;
    $menu = 'publication';
    $submenu = 'create';

    if(isset($_COOKIE['createp'])){
        if($_COOKIE['createp'] == 'si'){
            $flagCP = true;
            setcookie('createp', 'no', time() - 60, "/");
        }
    }

    
    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_createp_view.php');


?>