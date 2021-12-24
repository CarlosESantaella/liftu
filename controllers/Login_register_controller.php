<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    $flag_email = false;
    $flag_register = false;
    $flag_login = false;

    if(isset($_COOKIE['errorEmail'])){
        if($_COOKIE['errorEmail'] == '1'){
            $flag_email = true;
            setcookie('errorEmail', '0', time() - 60, "/");
        }
    }

    if(isset($_COOKIE['successRegister'])){
        if($_COOKIE['successRegister'] == '1'){
            $flag_register = true;
            setcookie('successRegister', '0', time() - 60, "/");
        }
    }

    if(isset($_COOKIE['errorLogin'])){
        if($_COOKIE['errorLogin'] == '1'){
            $flag_login = true;
            setcookie('errorLogin', '0', time() - 60, "/");
        }
    }

    include($_SERVER['DOCUMENT_ROOT'].'/views/Login_register_view.php');
?>