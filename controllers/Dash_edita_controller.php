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
    $submenu = 'edita';

    $flagEA = false;

    if(isset($_COOKIE['edita'])){
        if($_COOKIE['edita'] == 'si'){
            $flagEA = true;
            setcookie('edita', 'no', time() - 60, "/");
        }
    }

    $id = $_GET['id'];

    $article = $artM->get_article_id($id);


    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_edita_view.php');
?>