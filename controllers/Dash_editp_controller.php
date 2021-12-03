<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Publications;
    $pubM = new Publications;

    $id = $_GET['id'];

    $publication = $pubM->get_publication_id($id);


    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_editp_view.php');
?>