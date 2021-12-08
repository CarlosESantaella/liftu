<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    if(!isset($_SESSION['email'])){
        header('location: '.$_ENV['ROOT'].'/dashboard/login');
    }
    use App\Publications;

    $pubM = new Publications;

    $menu = 'publication';
    $submenu = 'listp';

    $flagDP = false;


    if(isset($_COOKIE['deletep'])){
        if($_COOKIE['deletep'] == 'si'){
            $flagDP = true;
            setcookie("deletep", "no", time() - 60, "/");
        }
    }

    $publications = $pubM->get_publications();
    

    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_listp_view.php');
?>