<?php

    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    use App\Publications;

    $pubM = new Publications;

    $title = $_POST['title'];
    $type = $_POST['type'];
    $description = $_POST['my-editor'];
    $link = $_POST['link'];
    $region = $_POST['region'];

    $pubM->set_publication($title, $type, $description, $link, $region);

    setcookie('createp', 'si', time() + (86400 * 30), "/");
    header('location: '.$_ENV['ROOT'].'/dashboard/create-publication');
?>