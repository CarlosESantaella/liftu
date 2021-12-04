<?php 

    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    use App\Articles;

    $artM = new Articles;

    $id = $_GET['id'];

    $artM->delete_article($id);

    setcookie('deletea', 'si', time() + (86400 * 30), "/");
    header('location: '.$_ENV['ROOT'].'/dashboard/list-articles');


?>