<?php

    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    use App\Publications;

    $pubM = new Publications;

    $title = $_POST['title'];
    $type = $_POST['type'];
    // $descriptionShort = $_POST['description-short'];
    $description = $_POST['my-editor'];
    $link = $_POST['link'];
    $region = $_POST['region'];
    $id = $_POST['id'];
    $date = $_POST['create-date'];


    $pubM->update_publication_id($title, $type, $description, $link, $region, $date, $id);

    setcookie('editp', 'si', time() + (86400 * 30), "/");
    header('location: '.$_ENV['ROOT']."/dashboard/edit-publication/$id");
?>