<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
    
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    if(isset($_SESSION['email'])){
        header('location: '.$_ENV['ROOT'].'/dashboard/create-publication');
    }
    $flagError = false;



    if(isset($_COOKIE['errorLogin'])){
        if($_COOKIE['errorLogin'] == 'si'){
            $flagError = true;
            setcookie('errorLogin', 'no', time() - 60, "/");
        }
    }




    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_login_view.php');
?>