<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Users;
    $usersM = new Users;

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user = $usersM->get_user_login($email, $pass);

    if($user){
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
        header('location: '.$_ENV['ROOT'].'/dashboard/create-publication');
    }else{
        setcookie('errorLogin', 'si', time() + 8400, "/");
        header('location: '.$_SERVER['HTTP_REFERER']);
    }

?>