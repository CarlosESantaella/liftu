<?php  

    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    use App\Users;

    $usersM = new Users;

    $name = $_POST['name'];
    $father_lastname = $_POST['father_lastname'];
    $mother_lastname = $_POST['mother_lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $nEmail = $usersM->get_email($email);

    if(isset($nEmail['email'])){
        setcookie('errorEmail', '1', time() + (86400 * 30), "/");
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $usersM->set_user($name, $father_lastname, $mother_lastname, $email, $password, $type);
        setcookie('successRegister', '1', time() + (86400 * 30), "/");
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }


    

    