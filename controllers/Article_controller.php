<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Users;
    use App\Articles;
    $usersM = new Users;
    $articlesM = new Articles();
    
    $id = $_GET['article'];
    $article = $articlesM->get_article_id($id);

    if(isset($_SESSION['id'])){

        $user = $usersM->get_user_by_id($_SESSION['id']);
    }

    include($_SERVER['DOCUMENT_ROOT'].'/views/Article_view.php');

?>