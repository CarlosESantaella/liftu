<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    if(!isset($_SESSION['email'])){
        header('location: '.$_ENV['ROOT'].'/dashboard/login');
    }
    $flagCA = false;
    $menu = 'article';
    $submenu = 'createa';

    if(isset($_COOKIE['createa'])){
        if($_COOKIE['createa'] == 'si'){
            $flagCA = true;
            setcookie('createa', 'no', time() - 60, "/");
        }
    }

    
    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_createa_view.php');


?>