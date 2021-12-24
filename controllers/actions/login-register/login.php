<?php 
    session_start();
    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
    use App\Users;
    $usersM = new Users;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $usersM->get_user_login($email, $password, 'user');

    if(isset($user['email'])){
        $_SESSION['id'] = $user['id'];
        header('location: '.$_ENV['ROOT']);
    }else{
        setcookie('errorLogin', '1', time() + (86400 * 30), "/");
        header('location: '.$_SERVER['HTTP_REFERER']);
    }
