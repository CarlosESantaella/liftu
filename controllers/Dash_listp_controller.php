<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Publications;

    $pubM = new Publications;

    $menu = 'publication';
    $submenu = 'list';

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