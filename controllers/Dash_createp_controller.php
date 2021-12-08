<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    if(!isset($_SESSION['email'])){
        header('location: '.$_ENV['ROOT'].'/dashboard/login');
    }
    $flagCP = false;
    $menu = 'publication';
    $submenu = 'createp';

    if(isset($_COOKIE['createp'])){
        if($_COOKIE['createp'] == 'si'){
            $flagCP = true;
            setcookie('createp', 'no', time() - 60, "/");
        }
    }

    
    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_createp_view.php');


?>