<?php 
 require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

 $dotenv = Dotenv\Dotenv::createimmutable($_SERVER['DOCUMENT_ROOT']);
 $dotenv->load();


 include($_SERVER['DOCUMENT_ROOT'].'/views/Publications_view.php');

?>