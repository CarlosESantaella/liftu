<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    if(!isset($_SESSION['email'])){
        header('location: '.$_ENV['ROOT'].'/dashboard/login');
    }
    use App\Articles;

    $artM = new Articles;

    $menu = 'article';
    $submenu = 'lista';

    $flagDA = false;


    if(isset($_COOKIE['deletea'])){
        if($_COOKIE['deletea'] == 'si'){
            $flagDA = true;
            setcookie("deletea", "no", time() - 60, "/");
        }
    }

    $articles = $artM->get_articles();
    

    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_lista_view.php');
?>