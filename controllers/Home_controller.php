<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createimmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Users;
    $usersM = new Users;
    if(isset($_SESSION['id'])){

        $user = $usersM->get_user_by_id($_SESSION['id']);
    }

    include($_SERVER['DOCUMENT_ROOT'].'/views/Home_view.php');
?>