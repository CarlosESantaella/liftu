<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createimmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    
    use App\Articles;
    $articlesM = new Articles;

    $articles = $articlesM->get_articles();

    include($_SERVER['DOCUMENT_ROOT'].'/views/Blog_view.php');

?>