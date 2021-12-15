<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createimmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();


    include($_SERVER['DOCUMENT_ROOT'].'/views/Home_view.php');
?>