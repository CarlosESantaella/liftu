<?php 
 require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
 $dotenv = Dotenv\Dotenv::createimmutable($_SERVER['DOCUMENT_ROOT']);
 $dotenv->load();
 use App\Publications;
 $publicationsM = new Publications;

 $publications = $publicationsM->get_publications();


 include($_SERVER['DOCUMENT_ROOT'].'/views/Publications_view.php');

?>