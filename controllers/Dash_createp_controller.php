<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    $flagCP = false;
    $menu = 'publication';
    $submenu = 'create';

    
    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_createp_view.php');


?>