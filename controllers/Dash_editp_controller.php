<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Publications;
    $pubM = new Publications;
    $menu = 'publication';
    $submenu = 'editp';

    $flagEP = false;

    if(isset($_COOKIE['editp'])){
        if($_COOKIE['editp'] == 'si'){
            $flagEP = true;
            setcookie('editp', 'no', time() - 60, "/");
        }
    }

    $id = $_GET['id'];

    $publication = $pubM->get_publication_id($id);


    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_editp_view.php');
?>