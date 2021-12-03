<?php 

    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    use App\Publications;

    $pubM = new Publications;

    $id = $_GET['id'];

    $pubM->delete_publication($id);

    setcookie('deletep', 'si', time() + (86400 * 30), "/");
    header('location: '.$_ENV['ROOT'].'/dashboard/list-publications');


?>